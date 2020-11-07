<?php

namespace App\Controllers;
use App\Models\Item;
use App\Models\User;

class AdminSauce extends BaseController {
    public function manage(){
        $user = new User();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;

        $item = new Item();
        $data['sauces'] = $item->filter_item(5);

        echo view("templates/header", $data);
        echo view("pages/admin/sauces/manage", $data);
        echo view("templates/footer");     
    }

     public function add(){
        $user = new User();
        $item = new Item();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;
    
        // Handle post
        if($this->request->getMethod() === "post"){
            if($item->insert(["name"=>$this->request->getPost("sauce_name"), "group"=>5])){
                return redirect()->to("/admin/sauce");
            } else {
                $data['error'] = "Failed to add new sauce";
            }
        } else {
            $data['error'] = null;
        }

        echo view("templates/header", $data);
        echo view("pages/admin/sauces/add", $data);
        echo view("templates/footer");        
    }    

    public function edit($id){
        $user = new User();
        $item = new Item();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;
        $data['sauces'] = $item->where("id", $id)->find()[0];

        // Handle post
        if($this->request->getMethod() === "post"){
            $item->set("name", $this->request->getPost("sauce_name"));
            $item->where("id", $id);
            if($item->update()){
                return redirect()->to("/admin/sauce");
            } else {
                $data['error'] = "Failed to update sauce.";
            }
        } else {
            $data['error'] = null;
        }

        echo view("templates/header", $data);
        echo view("pages/admin/sauces/edit", $data);
        echo view("templates/footer");         
    }   
    
     public function delete($id){
        $item = new Item();
        if($item->delete(["id"=>$id])){
            return redirect()->to("/admin/sauce");
        }        
    }      
}

?>