<?php namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
	protected $DBGroup ='user';

	protected $table = 'user';
	protected $primarykey = 'id';
	protected $returnType = 'array';
	protected $allowedFields =['email', 'password', 'first_name', 'last_name', 'session'];

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
    protected $skipValidation     = false;

}
?>