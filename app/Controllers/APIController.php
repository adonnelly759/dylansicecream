<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;
use App\Models\Item;

class APIController extends \CodeIgniter\Controller {
    public function getImageName(){
        $item = new Item();
        $value = $this->request->getPost("value");
        return $this->response->setJSON($item->find(["id"=>$value]));
    }
}

?>