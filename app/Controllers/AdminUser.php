<?php

namespace App\Controllers;
use App\Models\User;

class AdminUser extends BaseController {
    public function manage(){
        $user = new User();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;
        $data['users'] = $user->findAll();
        echo view("templates/header", $data);
        echo view("pages/admin/user/manage", $data);
        echo view("templates/footer");     
    }
}

?>