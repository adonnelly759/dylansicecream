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

     public function add(){
        $user = new User();
        $item = new Item();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;
    
        // Handle post
        if($this->request->getMethod() === "post"){
            if($item->insert(["name"=>$this->request->getPost("inclusion_name"), "group"=>2])){
                return redirect()->to("/admin/inclusion");
            } else {
                $data['error'] = "Failed to add new inclusion";
            }
        } else {
            $data['error'] = null;
        }

        echo view("templates/header", $data);
        echo view("pages/admin/inclusions/add", $data);
        echo view("templates/footer");        
    }    

    public function edit($id){
        $user = new User();
        $item = new Item();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;
        $data['inclusions'] = $item->where("id", $id)->find()[0];

        // Handle post
        if($this->request->getMethod() === "post"){
            $item->set("name", $this->request->getPost("inclusion_name"));
            $item->where("id", $id);
            if($item->update()){
                return redirect()->to("/admin/inclusion");
            } else {
                $data['error'] = "Failed to update inclusion.";
            }
        } else {
            $data['error'] = null;
        }

        echo view("templates/header", $data);
        echo view("pages/admin/inclusions/edit", $data);
        echo view("templates/footer");         
    }   
    
     public function delete($id){
        $item = new Item();
        if($item->delete(["id"=>$id])){
            return redirect()->to("/admin/inclusion");
        }        
    }      
}

?>