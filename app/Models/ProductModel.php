<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model {

    protected $table = 'productos';
    protected $primaryKey = 'productoID';
    protected $allowedFields = ['nameProduct','supplier','color','size','gender','price'];
    
	



    
    

}