<?php namespace App\Models;

use CodeIgniter\Model;

class Item extends Model
{
	protected $DBGroup ='default';

	protected $table = 'item';
	protected $primarykey = 'id';
	protected $returnType = 'array';
	protected $allowedFields =['name', 'price', 'group'];

}
?>