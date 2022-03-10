<?php 
namespace App\Models;

use CodeIgniter\Model;

class Categorias extends Model{
    protected $table      = 'categorias';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idCategoria';
    protected $allowedFields = ['nombre'];
}