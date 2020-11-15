<?php

namespace App\Controllers;
use App\Models\User;
use App\Models\Item;

class AdminWafer extends BaseController {
    public function manage(){
        $user = new User();
        $item = new Item();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;
        $data['items'] = $item->filter_item(4);
        echo view("templates/header", $data);
        echo view("pages/admin/wafer/manage", $data);
        echo view("templates/footer");   
    }    

    public function add(){
        $user = new User();
        $item = new Item();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;
    
        // Handle post
        if($this->request->getMethod() === "post"){
            $image = $this->request->getFile("file");
            $newName = $image->getRandomName();
            if($item->insert(["name"=>$this->request->getPost("wafer_name"), "group"=>4, "image"=>$newName])){
                $image->move(WRITEPATH . 'uploads', $newName);
                return redirect()->to("/admin/wafer");
            } else {
                $data['error'] = "Failed to add new wafer";
            }
        } else {
            $data['error'] = null;
        }

        echo view("templates/header", $data);
        echo view("pages/admin/wafer/add", $data);
        echo view("templates/footer");        
    }    

    public function edit($id){
        $user = new User();
        $item = new Item();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;
        $data['item'] = $item->where("id", $id)->find()[0];

        // Handle post
        if($this->request->getMethod() === "post"){
            $image = $this->request->getFile("file");
            $item->set("name", $this->request->getPost("wafer_name"));
            if(!empty($image->getClientName())){
                $newName = $image->getRandomName();
                $item->set("image", $newName);
                $image->move(WRITEPATH . "uploads", $newName);
            }
            $item->where("id", $id);
            if($item->update()){
                return redirect()->to("/admin/wafer");
            } else {
                $data['error'] = "Failed to update wafer.";
            }
        } else {
            $data['error'] = null;
        }

        echo view("templates/header", $data);
        echo view("pages/admin/wafer/edit", $data);
        echo view("templates/footer");         
    }    

    public function delete($id){
        $item = new Item();
        if($item->delete(["id"=>$id])){
            return redirect()->to("/admin/wafer");
        }        
    }    
}

?>