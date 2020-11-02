<?php

namespace App\Controllers;

class Frontend extends BaseController {
    public function index(){
        echo view("templates/header");
        echo view("pages/frontend/index");
        echo view("templates/footer");
    }
}

?>