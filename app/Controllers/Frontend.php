<?php

namespace App\Controllers;
use App\Models\User;
use App\Controllers\UserController;
use CodeIgniter\Controller;

class Frontend extends BaseController {
    public function index(){
        $user = new User();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;
        
        echo view("templates/header", $data);
        echo view("pages/frontend/index");
        echo view("templates/footer");
    }

    public function login(){
        $error = $this->request->getGet("error");
        $user = new User();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;

        if($user->user_exists($this->session->email) && !empty($this->session->email)){
            return redirect()->to("/admin");
        }

        $data['error'] = $error;

        echo view("templates/header", $data);
        echo view("pages/frontend/login", $data);
        echo view("templates/footer");        
    }

    public function admin(){
        $user = new User();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;    
        echo view("templates/header", $data);
        echo view("pages/frontend/admin");
        echo view("templates/footer");
    }
}

?>