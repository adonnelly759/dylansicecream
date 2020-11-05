<?php namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
	protected $DBGroup ='default';

	protected $table = 'user';
	protected $primarykey = 'id';
	protected $returnType = 'array';
	protected $allowedFields =['email', 'password', 'first_name', 'last_name', 'session'];

}
?>