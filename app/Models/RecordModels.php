<?php namespace App\Models;

use CodeIgniter\Model;

class RecordModels extends Model {

    protected $table = 'clientes';
    protected $primaryKey = 'idUsuario';
    protected $allowedFields = ['name','surname','address','email','password','phone'];
    

}