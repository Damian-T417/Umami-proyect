<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuarios;


class SigninController extends Controller{

    public function index()
    {
        helper(['form']);
        echo view('signin');
    } 
  
    public function loginAuth()
    {
        $session = session();
        $user = new Usuarios();
        $name = $this->request->getVar('nombre');
        $password = $this->request->getVar('password');
        
        $data = $user->where('nombre', $name)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['idUsuario'],
                    'name' => $data['nombre'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/profile');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }
        }else{
            $session->setFlashdata('msg', 'Name does not exist.');
            return redirect()->to('/signin');
        }
    }

}