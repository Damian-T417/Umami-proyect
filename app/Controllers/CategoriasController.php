<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Categoria;
class CategoriasController extends Controller{

    public function listar(){
        $datos['header'] = view('admin/template/header');
        $datos['footer'] = view('admin/template/footer');
        return view('admin/categoria/listar', $datos);
    }
}