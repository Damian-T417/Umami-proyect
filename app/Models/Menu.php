<?php 
namespace App\Models;

use CodeIgniter\Model;

class Menu extends Model{
    protected $table      = 'menu';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idPlatillo';
    protected $allowedFields = [
        'nombrePlatillo',
        'descripPlatillo',
        'precioPlatillo',
        'imgPlatillo',
        'idCategoria'
    ];
}