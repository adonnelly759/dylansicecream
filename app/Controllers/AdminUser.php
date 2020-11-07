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

    public function add(){
        $user = new User();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;
    
        // Handle post
        if($this->request->getMethod() === "post"){
            if(!$user->user_exists($this->request->getPost("email"))){
                if($user->create_user($_POST)){
                    return redirect()->to("/admin/user");
                } else {
                    $data['error'] = "Failed to create user.";    
                }
            } else {
                $data['error'] = "Email already exists in database.";
            }
        } else {
            $data['error'] = null;
        }

        echo view("templates/header", $data);
        echo view("pages/admin/user/add", $data);
        echo view("templates/footer");         
    }

    public function edit($id){
        $user = new User();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;
        $data['user'] = $user->where("id", $id)->find()[0];

        // Handle post
        if($this->request->getMethod() === "post"){
            $user->set("email", $this->request->getPost("email"));
            $user->set("first_name", $this->request->getPost("first_name"));
            $user->set("last_name", $this->request->getPost("last_name"));
            (!empty($this->request->getPost("blank_password"))) ? $user->set("password", $user->salt_password($this->request->getPost("blank_password"))) : null;
            $user->where("id", $id);
            if($user->update()){
                return redirect()->to("/admin/user");
            } else {
                $data['error'] = "Failed to update user details.";
            }
        } else {
            $data['error'] = null;
        }

        echo view("templates/header", $data);
        echo view("pages/admin/user/edit", $data);
        echo view("templates/footer");          
    }

    public function delete($id){
        $user = new User();
        if($user->delete(["id"=>$id])){
            return redirect()->to("/admin/user");
        }
    }
}

?>