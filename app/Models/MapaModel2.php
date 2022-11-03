<?php

namespace App\Models;

use CodeIgniter\Model;

class MapaModel extends Model
{

    //    protected $table = 'usuarios';
//    protected $primaryKey = 'id';


    protected $table = 'tabla2';
    protected $primaryKey = 'rid';
//
    protected $returnType = 'array';
//    protected $useSoftDeletes = true;
//
//    protected $allowedFields = [ 'nombre','username'];

    protected $useTimestamps = false;
//    protected $createdField = 'created_at';
//    protected $updatedField = 'updated_at';
//    protected $deletedField = 'deleted_at';
//
//    protected $validationRules = [];
//    protected $validationMessages = [];
//    protected $skipValidation = false;
}