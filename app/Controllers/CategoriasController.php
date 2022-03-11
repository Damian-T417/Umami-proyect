<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Categorias;

class CategoriasController extends Controller{

    public function listar()
    {
        $categorias = new Categorias();
        $datos['categorias'] = $categorias->orderBy('idCategoria','ASC')->findAll();

        $datos['header'] = view('admin/template/header');
        $datos['footer'] = view('admin/template/footer');

        return view('admin/categorias/listar', $datos);
    }

    public function crear()
    {
        $datos['header'] = view('admin/template/header');
        $datos['footer'] = view('admin/template/footer');

        return view('admin/categorias/crear', $datos);
    }

    public function guardar()
    {
        $categoria = new categorias();

        $rules = $this->validate([
            'nombreC'=>'required|min_length[4]',
        ]);

        if(!$rules){
            $sessions = session();
            $sessions->setFlashData('mensaje', 'Faltan datos por agregar');

            return redirect()->back()->withInput();
            //return $this->response->redirect(site_url('/admin/categoria/listar'));
        }

        $datos = [
            'nombreCat'=>$this->request->getVar('nombreC'),
        ];

        $categoria->save($datos);

        return redirect()->to('/dashboard/categorias');
    }

    public function editar($idCategoria)
    {
        $categoria = new categorias();
        $datos ['categoria'] =$categoria->where('idCategoria', $idCategoria)->first();
        $datos['header'] = view('admin/template/header');
        $datos['footer'] = view('admin/template/footer');

        return view('admin/categorias/editar', $datos);
    }

    public function actualizar(){
        $categoria = new categorias();
        $datos = [
            'nombreCat'=>$this->request->getVar('nombreC'),
        ];
        $idCategoria = $this->request->getVar('idCategoria');

        $rules = $this->validate([
            'nombreC'=>'required|min_length[6]',
        ]);
        if(!$rules){
            $sessions = session();
            $sessions->setFlashData('mensaje', 'Faltan datos por agregar');

            return redirect()->back()->withInput();
            //return $this->response->redirect(site_url('/admin/categoria/listar'));
        }

        $categoria->update($idCategoria, $datos);

        return $this->response->redirect(site_url('/dashboard/categorias'));
    }

    public function borrar($idCategoria=null){
        $categoria = new categorias();
        $datosCategoria = $categoria->where('idCategoria',$idCategoria)->first();
        
        $categoria->where('idCategoria',$idCategoria)->delete($idCategoria);

        return $this->response->redirect(site_url('/dashboard/categorias'));
    }

}
