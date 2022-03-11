<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Menu;
use App\Models\Categorias;

class MenuController extends Controller{

    public function listar()
    {

        $platillos = new Menu();
        $categorias = new Categorias();

        $datos['platillos'] = $platillos->orderBy('idPlatillo','ASC')->findAll();
        $datos['categorias'] = $categorias;
        
        $datos['header'] = view('admin/template/header');
        $datos['footer'] = view('admin/template/footer');
        return view('admin/menu/listar', $datos);
    }

    public function crear()
    {

        $categorias = new Categorias();

        $datos['categorias'] = $categorias->orderBy('idCategoria', 'ASC')->findAll();
        $datos['header'] = view('admin/template/header');
        $datos['footer'] = view('admin/template/footer');

        return view('admin/menu/crear', $datos);
    }

    public function guardar()
    {
        helper(['form']);
        $rules = [
            'nombre'      => 'required|min_length[4]|max_length[50]',
            'descripcion'     => 'required|min_length[5]|max_length[50]',
        ];

        if($this->validate($rules)){
            $platillo = new Menu();

            if($imagen=$this->request->getFile('imagen')){

                $nuevoTitulo = $imagen->getRandomName();
                $imagen->move('../public/uploads/',$nuevoTitulo);

                $datos=[
                    'nombrePlatillo'=>$this->request->getVar('nombre'),
                    'descripcion'=>$this->request->getVar('descripcion'),
                    'imgPlatillo'=>$nuevoTitulo,
                    'idCategoria'=>$this->request->getVar('idCategoria')
                ];

                $platillo->insert($datos);
                return $this->response->redirect(base_url('/dashboard/menu'));
            }else{
                return $this->response->redirect(base_url('/dashboard/menu'));
            }

        }else{
            $categorias = new Categorias();

            $datos['categorias'] = $categorias->orderBy('idCategoria', 'ASC')->findAll();
            $datos['validation'] = $this->validator;

            $datos['header'] = view('admin/template/header');
            $datos['footer'] = view('admin/template/footer');

            return view('admin/menu/crear', $datos);
        }

    }

    public function editar($idPlatillo)
    {   
        helper(['form']);
        $platillo = new Menu();
        $categorias = new Categorias();

        $datos['platillo'] = $platillo->where('idPlatillo',$idPlatillo)->first();
        $datos['categorias'] = $categorias->orderBy('idCategoria', 'ASC')->findAll();

        $datos['header'] = view('admin/template/header');
        $datos['footer'] = view('admin/template/footer');
        
        return view('admin/menu/editar', $datos);
    }

    public function actualizar()
    {
        helper(['form']);
        $rules = [
            'nombre'      => 'required|min_length[4]|max_length[50]',
            'descripcion'     => 'required|min_length[5]|max_length[50]',
        ];

        if($this->validate($rules)){
            $platillo = new Menu();

            if($imagen=$this->request->getFile('imagen')){

                $nuevoTitulo = $imagen->getRandomName();
                $imagen->move('../public/uploads/',$nuevoTitulo);

                $datos=[
                    'nombrePlatillo'=>$this->request->getVar('nombre'),
                    'descripcion'=>$this->request->getVar('descripcion'),
                    'imgPlatillo'=>$nuevoTitulo,
                    'idCategoria'=>$this->request->getVar('idCategoria')
                ];

                $idPlatillo = $this->request->getVar('idPlatillo');
                $platillo->update($idPlatillo, $datos);

                return $this->response->redirect(base_url('/dashboard/menu'));
            }else{
                return $this->response->redirect(base_url('/dashboard/menu'));
            }
        }else{
            $categorias = new Categorias();

            $datos['categorias'] = $categorias->orderBy('idCategoria', 'ASC')->findAll();
            $datos['validation'] = $this->validator;

            $datos['header'] = view('admin/template/header');
            $datos['footer'] = view('admin/template/footer');

            return view('admin/menu/editar/'.$idPlatillo, $datos);
        }
    }


    public function borrar($idPlatillo=null){

        $platillo = new Menu();

        $datosCategoria = $platillo->where('idPlatillo',$idPlatillo)->first();
        $platillo->where('idPlatillo',$idPlatillo)->delete($idPlatillo);

        return $this->response->redirect(site_url('/dashboard/menu'));
    }

}
