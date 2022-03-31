<?php 
namespace App\Models;

use CodeIgniter\Model;

class Promociones extends Model{
    protected $table      = 'promociones';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idPromo';
    protected $allowedFields = [
        'nombrePromo',
        'descripPromo',
        'precioPromo',
        'imgPromo',
        'fechaExp'
    ];
}