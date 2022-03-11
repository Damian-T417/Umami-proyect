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
        $usuario = new Usuarios();
        $name = $this->request->getVar('nombre');
        $password = $this->request->getVar('password');
        
        $data = $usuario->where('nombreUsuario', $name)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['idUsuario'],
                    'name' => $data['nombreUsuario'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }
        }else{
            $session->setFlashdata('msg', 'Name does not exist.');
            return redirect()->to('/signin');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/signin');
    }

}