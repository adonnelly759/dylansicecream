<?php

namespace App\Controllers;
use App\Models\User;
use CodeIgniter\Controller;

class Frontend extends BaseController {
    public function index(){
        echo view("templates/header");
        echo view("pages/frontend/index");
        echo view("templates/footer");
    }

    public function login(){
        $error = $this->request->getGet("error");

        $data['error'] = $error;

        echo view("templates/header");
        echo view("pages/frontend/login", $data);
        echo view("templates/footer");        
    }
}

?>