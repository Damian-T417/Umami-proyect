<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Menu;
use App\Models\Categorias;

class Home extends BaseController
{
    public function index()
    {
        $platillos = new Menu();
        $categorias = new Categorias();

        //$datos['platillos'] = $platillos->orderBy('idPlatillo','ASC')->findAll();
        $datos['platillos'] = $platillos;
        $datos['categorias'] = $categorias->orderBy('idCategoria','ASC')->findAll();
        return view('index', $datos);
    }

    public function dashboard()
    {
        $datos['header'] = view('admin/template/header');
        $datos['footer'] = view('admin/template/footer');
        return view('admin/panel', $datos);
    }
}
