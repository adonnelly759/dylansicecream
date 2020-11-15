<?php 

namespace App\Models;
use CodeIgniter\Model;

class Item extends Model
{
	protected $DBGroup = 'default';
	protected $table = 'item';
	protected $primarykey = 'id';
	protected $returnType = 'array';
	protected $allowedFields = ['name', 'price', 'group', 'image'];

	public function filter_item(Int $group){
		$query = $this->query("SELECT `item`.`id` as 'ItemID', `item`.`image` as 'ItemImage', `item`.`name` AS 'ItemName', `item`.`price` AS 'ItemPrice', `item`.`group` AS 'ItemGroupID', `group`.`name` AS 'GroupName' FROM `item` INNER JOIN `group` ON `group`.`id` = `item`.`group` WHERE `item`.`group` = ?", $group);
		return $query->getResultArray();
	}
}
?>