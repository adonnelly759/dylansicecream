<?php

namespace App\Controllers;
use App\Models\User;
use App\Models\Item;

class AdminFlavour extends BaseController {
    public function manage(){
        $user = new User();
        $item = new Item();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;
        $data['items'] = $item->filter_item(1);
        echo view("templates/header", $data);
        echo view("pages/admin/flavour/manage", $data);
        echo view("templates/footer");   
    }    

    public function add(){
        $user = new User();
        $item = new Item();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;
    
        // Handle post
        if($this->request->getMethod() === "post"){
            if($item->insert(["name"=>$this->request->getPost("flavour_name"), "group"=>1])){
                return redirect()->to("/admin/flavour");
            } else {
                $data['error'] = "Failed to add new flavour";
            }
        } else {
            $data['error'] = null;
        }

        echo view("templates/header", $data);
        echo view("pages/admin/flavour/add", $data);
        echo view("templates/footer");        
    }    

    public function edit($id){
        $user = new User();
        $item = new Item();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;
        $data['item'] = $item->where("id", $id)->find()[0];

        // Handle post
        if($this->request->getMethod() === "post"){
            $item->set("name", $this->request->getPost("flavour_name"));
            $item->where("id", $id);
            if($item->update()){
                return redirect()->to("/admin/flavour");
            } else {
                $data['error'] = "Failed to update flavour.";
            }
        } else {
            $data['error'] = null;
        }

        echo view("templates/header", $data);
        echo view("pages/admin/flavour/edit", $data);
        echo view("templates/footer");         
    }    

    public function delete($id){
        $item = new Item();
        if($item->delete(["id"=>$id])){
            return redirect()->to("/admin/flavour");
        }        
    }      
}

?>