<?php

namespace App\Controllers;
use App\Models\User;
use App\Models\Item;
use App\Models\Creation;
use CodeIgniter\Controller;

class Frontend extends BaseController {
    public function index(){
        $code = new Creation();
        $user = new User();
        $item = new Item();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;
        $data['flavours'] = $item->filter_item(1);
        $data['inclusions'] = $item->filter_item(2);
        $data['wafers'] = $item->filter_item(4);
        $data['sauces'] = $item->filter_item(5);
        $data['sprinkles'] = $item->filter_item(3);
        echo view("templates/header", $data);
        echo view("pages/frontend/index", $data);
        echo view("templates/footer");   
    }

    public function retrieve() {
        $codeFound = $this->request->getGet("codeFound");
        $error = $this->request->getGet("error");
        $user = new User();
        $data['isLogged'] = ($user->user_exists($this->session->email) && !empty($this->session->email)) ? true : false;
        $data['codeFound'] = $codeFound;
        $data['error'] = $error;
        $data['creations'] = $this->session->get('creation');
        echo view("templates/header", $data);
        echo view("pages/frontend/retrieve");
        echo view("templates/footer");
    }

    public function findCode(){
        $code = new Creation();
        $codeInput = $this->request->getPost("codeInput");
        $query = $code->where("code", $codeInput)->find();
        if(count($query) != 0 ){
             $creation = $code->filter_creation($codeInput); 
             $this->session->setFlashdata('creation', $creation);
            return redirect()->to('/retrieve?codeFound=1');
        } else {
            return redirect()->to('/retrieve?error=1');
        }
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
        echo view("pages/admin/admin");
        echo view("templates/footer");
    }

    public function logout(){
        if(!empty($this->session->email)){
            $this->session->destroy();
            return redirect()->to("/");
        } else {
            return redirect()->to("/login");
        }
    }
}

?>