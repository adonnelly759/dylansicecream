<?php

namespace App\Controllers;
use App\Models\User;
use App\Models\Item;
use App\Models\Creation;
use CodeIgniter\Controller;

class CreationController extends BaseController {
	
public function findCode(){
        $code = new Creation();
        $codeInput = $this->request->getPost("codeInput");
        $query = $code->where("code", $codeInput)->find();
        if(count($query) != 0 ){
             $creation = $code->filter_creation($codeInput); 
             $this->session->setFlashdata('creation', $creation);
            return redirect()->to('/retrieve?codeFound=1');
        } else {
            return redirect()->to('/retrieve?error=1');
        }
    }
}