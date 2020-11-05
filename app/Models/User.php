<?php namespace App\Models;

use CodeIgniter\Model;
use \DateTime; 

class User extends Model
{
	protected $DBGroup ='user';
	protected $table = 'user';
	protected $primarykey = 'id';
	protected $returnType = 'array';
    protected $allowedFields = ['email', 'password', 'first_name', 'last_name', 'session'];
    protected $validationRules    = [
		'email' => 'required|valid_email|is_unique(user.email)',
		'password' => 'required',
		'first_name' => 'required',
		'last_name' => 'required'
	];

    protected $validationMessages = [
		'email' => [
			'required' => '"Email" cannot be empty.', 
			'valid_email' => 'Please enter a valid email address.',
			'is_unique' => 'This email is already in use. Please enter a different email address.'
			],
		'password' => [
			'required' => '"Password" cannot be empty.'
			],
		'first_name' => [
			'required' => '"First Name" cannot be empty.'
			],
		'last_name' => [
			'required' => '"Last Name" cannot be empty.'
			]
	];
    protected $skipValidation = false;

	public function create_user($email, $password, $first_name, $last_name){
		$data = [
			"email"=>$email,
			"password"=>$this->salt_password($password),
			"first_name"=>$first_name,
			"last_name"=>$last_name
		];
		return (!$this->user_exists && $this->insert($data)) ? true : false;
	}

	public function check_credentials($email, $password){
		$query = $this->where("email", $email)->where("password", $this->salt_password($password))->find();
		if(count($query) === 1){
			$this->update_session($email);
			return true;
		} else {
			return false;
		}
	}

	public function update_session($email){
		$this->where("email", $email)->set("session", $this->generate_session($email))->update();
	}

	public function user_exists($email){
		return (count($user->where("email", $email)->findAll()) > 0) ? true : false;
	}

	public function salt_password($password){
		return md5($password.sha1(md5($password)));
	}
	
	public function generate_session($email){
		$date = new DateTime();
		return md5($email.sha1(md5(sha1($date->format('Y-m-d H:i:s')))));
	}

}
?>