<?php
namespace OCA\Background\Db;

use OPC\AppFramework\Db\Entity;

class BackgroundInfo extends Entity{
	protected $name;
	protected $age;
	protected $gender;
	protected $addr;
	
	public function __construct(){
		$this->addType('age', 'integer');
	}
}
?>
