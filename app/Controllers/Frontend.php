<?php

namespace App\Controllers;

class Frontend extends BaseController {
    public function index(){
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