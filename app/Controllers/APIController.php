<?php

namespace App\Controllers;
use App\Models\Item;

class APIController extends BaseController {
    public function getImageName(){
        $item = new Item();
        $value = $this->request->getPost("value");
        header('Content-Type: application/json');
        echo \json_encode($item->find(["id"=>$value]));
    }
}

?>