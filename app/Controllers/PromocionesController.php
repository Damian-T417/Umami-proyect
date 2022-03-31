<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Promociones;

class PromocionesController extends Controller{

    public function listar()
    {
        $promocion = new Promociones();

        $datos['promociones'] = $promocion->orderBy('idPromo','ASC')->findAll();

        $datos['header'] = view('admin/template/header');
        $datos['footer'] = view('admin/template/footer');
        return view('admin/promociones/listar', $datos);
    }

    public function crear()
    {
        $datos['header'] = view('admin/template/header');
        $datos['footer'] = view('admin/template/footer');

        return view('admin/promociones/crear', $datos);
    }

    public function guardar()
    {
        helper(['form']);
        $rules = [
            'nombre'      => 'required|min_length[4]|max_length[50]',
            'descripcion'     => 'required|min_length[5]|max_length[50]',

        ];

        if($this->validate($rules)){
            $promocion = new Promociones();
            $imagen=$this->request->getFile('imagen');

            if($imagen){

                $nuevoTitulo = $imagen->getRandomName();
                $imagen->move('../public/uploads/',$nuevoTitulo);

                $datos=[
                    'nombrePromo'=>$this->request->getVar('nombre'),
                    'descripPromo'=>$this->request->getVar('descripcion'),
                    'precioPromo'=>$this->request->getVar('precio'),
                    'imgPromo'=>$nuevoTitulo,
                    'fechaExp'=>$this->request->getVar('fecha')
                ];

                $promocion->insert($datos);
                return $this->response->redirect(base_url('/dashboard/promociones'));
            }else{
                return $this->response->redirect(base_url('/dashboard/promociones'));
            }

        }else{
            $datos['validation'] = $this->validator;

            $datos['header'] = view('admin/template/header');
            $datos['footer'] = view('admin/template/footer');

            return view('admin/menu/crear', $datos);
        }

    }

    public function borrar($idPromo=null){

        $promocion = new Promociones();

        $promocion->where('idPromo',$idPromo)->delete($idPromo);

        return $this->response->redirect(site_url('/dashboard/promociones'));
    }

}
