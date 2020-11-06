<?php 

namespace App\Controllers;
use App\Models\User;
use CodeIgniter\Controller;

// This controller can be used to register, modify and authenticate users
class UserController extends BaseController {
    public function check(){
        $user = new User();
        if($user->check_credentials($this->request->getPost("email"), $this->request->getPost("password"))){
            $session = session();
            $session->set('email', $this->request->getPost("email"));
            return redirect()->to('/admin');
        } else {
            return redirect()->to('/login?error=1');
        }
    }
}