<?php

namespace App\Controllers;
use App\Models\User;

class Frontend extends BaseController {
    public function index(){

        $user = new User();
        $user->create_user("akeel01@qub.ac.uk", "Password12", "Aaron", "Keel");
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