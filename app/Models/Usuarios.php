<?php 
namespace App\Models;

use CodeIgniter\Model;

class Usuarios extends Model{
    protected $table      = 'usuarios';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idUsuario';
    protected $allowedFields = [
        'nombre',
        'password',
        'created_at'
    ];
}