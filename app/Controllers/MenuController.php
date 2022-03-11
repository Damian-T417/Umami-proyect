<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\menu;
class MenuController extends Controller{

    public function listar(){
        $datos['header'] = view('admin/template/header');
        $datos['footer'] = view('admin/template/footer');
        return view('admin/menu/listar', $datos);
    }
}