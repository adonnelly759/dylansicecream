<?php

namespace App\Controllers;
use App\Models\Creation;

class Frontend extends BaseController {
    public function index(){
        $creation = new Creation();
        var_dump($creation->findAll());
        echo view("templates/header");
        echo view("pages/frontend/index");
        echo view("templates/footer");
    }

    public function login(){
        echo view("templates/header");
        echo view("pages/frontend/login");
        echo view("templates/footer");        
    }
}

?>