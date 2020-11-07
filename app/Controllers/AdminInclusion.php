<?php

namespace App\Controllers;

class AdminInclusion extends BaseController {
    public function manage(){
        $user = new User();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;
        $data['inclusions'] = $->findAll();
        echo view("templates/header", $data);
        echo view("pages/admin/inclusions/manage", $data);
        echo view("templates/footer");     
    }
}

?>