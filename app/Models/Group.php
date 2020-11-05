<?php

namespace App\Models;
use CodeIgniter\Model;

class Group extends Model{
    protected $DBGroup = "default";
    protected $table = "group";
    protected $returnType = "array";
    protected $primaryKey = "id";
    protected $allowedFields = ["name"];
}

?>