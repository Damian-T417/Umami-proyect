<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function dashboard()
    {
        $datos['header'] = view('admin/template/header');
        $datos['footer'] = view('admin/template/footer');
        return view('admin/panel', $datos);
    }
}
