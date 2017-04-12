<?php
/**
 * ownCloud - background
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Shawn <syu702@aucklanduni.ac.nz>, A.Daugieras <adau828@aucklanduni.ac.nz>
 * @copyright Shawn,Daugieras 2017
 */

namespace OCA\Background\Controller;

use OCP\IRequest;
use OCP\IConfig;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\AppFramework\Http\DataResponse;
use OCP\AppFramework\Controller;
use OCP\IUserSession;

use OCA\Background\db\backgroundinfo;
use OCA\Background\db\backgroundinfomapper;

class PageController extends Controller {

	private $mapper;
	private $userId;
	private $config;

	public function __construct($AppName, IRequest $request, backgroundinfomapper $mapper, IConfig $config, $UserId){
		parent::__construct($AppName, $request);	
		$this->config = $config;
		$this->userId = $userId;
		$this->mapper = $mapper;
	}

	/**
	 * CAUTION: the @Stuff turns off security checks; for this page no admin is
	 *          required and no CSRF check. If you don't know what CSRF is, read
	 *          it up in the docs or you might create a security hole. This is
	 *          basically the only required method to add this exemption, don't
	 *          add it to any other method if you don't exactly know what it does
	 *
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
	public function index() {
		$params = ['user' => $this->userId];
		return new TemplateResponse('background', 'main', $params);  // templates/main.php
	}

	 public function create($name, $age, $gender, $addr, $eprofil, $etype, $eexposure, $edetail, $mprofil, $mtype, $mexposure, $mdetail, $nztime) {
		 $background = new backgroundinfo();
		 $background->setName($name);
		 $background->setAge($age);
		 $background->setGender($gender);
		 $background->setAddr($addr);
		 $background->setEprofil($eprofil);
		 $background->setEtype($etype);
		 $background->setEexposure($eexposure);
		 $background->setEdetail($edetail);
		 $background->setMprofil($mprofil);
		 $background->setMtype($mtype);
		 $background->setMexposure($mexposure);
		 $background->setMdetail($mdetail);
		 $background->setNztime($nztime);

//For each new variable add a line at this function : $background->setVariableName($variableName);

		 return new DataResponse($this->mapper->insert($background));
	 }
}
