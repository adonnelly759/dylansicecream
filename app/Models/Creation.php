<?php

namespace App\Models;
use CodeIgniter\Model;
use App\Models\Item;

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
        $item = new Item();
        return array(
            "id"=>$query[0]["id"],
            "code"=>$query[0]["code"],
            "flavours"=>$item->find(\json_decode($query[0]["flavours"])),
            "wafers"=>$item->find(\json_decode($query[0]["wafers"])),
            "inclusions"=>$item->find(\json_decode($query[0]["inclusions"])),
            "sprinkles"=>$item->find(\json_decode($query[0]["sprinkles"])),
            "sauces"=>$item->find(\json_decode($query[0]["sauces"])),
            "cream"=>$query[0]["cream"],
            "created"=>$query[0]["created"],
            "used"=>$query[0]["used"]
        );
    }
}

?>