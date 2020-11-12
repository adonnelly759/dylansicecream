<?php

namespace App\Models;
use CodeIgniter\Model;

class Creation extends Model{
    protected $DBGroup = "default";
    protected $table = "creation";
    protected $returnType = "array";
    protected $primaryKey = "id";
    protected $allowedFields = ["code", "flavours", "wafers", "inclusions", "sprinkles", "sauces", "cream", "used"];
    protected $createdField = ["created"];

    public function random_code(){
        return \strtoupper(\substr(md5(\str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ")), 0, 6));
    }

    public function is_unique($code){
        $query = $this->where("code", $code)->findAll();
        return (count($query) === 0) ? true : false;
    }

    public function filter_creation($code){
        $query = $this->where("code", $code)->find();
        return array(
            "id"=>$query[0]["id"],
            "code"=>$query[0]["code"],
            "flavours"=>\json_decode($query[0]["flavours"]),
            "wafers"=>\json_decode($query[0]["wafers"]),
            "inclusions"=>\json_decode($query[0]["inclusions"]),
            "sprinkles"=>\json_decode($query[0]["sprinkles"]),
            "sauces"=>\json_decode($query[0]["sauces"]),
            "cream"=>$query[0]["cream"],
            "created"=>$query[0]["created"],
            "used"=>$query[0]["used"]
        );
    }
}

?>