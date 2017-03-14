<?php
namespace OCA\Background\Db;

use OCP\AppFramework\Db\Entity;

class BackgroundInfo extends Entity{
	protected $name;
	protected $age;
	protected $gender;
	protected $addr;
	protected $eprofil;
	protected $etype;
	protected $eexposure;
	protected $edetail;
	protected $mprofil;
	protected $mtype;
	protected $mexposure;
	protected $mdetail;

	public function __construct(){
		$this->addType('age', 'integer');
	}
}
?>
