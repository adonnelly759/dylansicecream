<?php

namespace App\Controllers;
use App\Models\Item;
use App\Models\User;



class AdminInclusion extends BaseController {
    public function manage(){
        $user = new User();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;

        $item = new Item();
        $data['inclusions'] = $item->filter_item(2);

        echo view("templates/header", $data);
        echo view("pages/admin/inclusions/manage", $data);
        echo view("templates/footer");     
    }
}

?>