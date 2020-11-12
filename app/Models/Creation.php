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
		$query = $this->query("SELECT `creation`.`id` as 'CreationID', `creation`.`code` AS 'CreationCode', `creation`.`Created` AS 'Created' FROM `creation` WHERE `creation`.`code` = ?", $code);
		return $query->getResultArray();
	}
}

?>