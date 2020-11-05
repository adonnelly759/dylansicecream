<?php

namespace App\Models;
use CodeIgniter\Model;

class Creation extends Model{
    protected $DBGroup = "default";
    protected $table = "creation";
    protected $primaryKey = "id";
    protected $allowedFields = ["code", "created", "used"];
    protected $createdField = ["created"];
}

?>