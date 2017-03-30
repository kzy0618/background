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
use OCP\IL10N;
use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\AppFramework\Http\DataResponse;

class SettingsController extends Controller {

	private $config;
	private $userId;
	private $l10n;

	public function __construct($AppName, IRequest $request,IConfig $config, IL10N $l10n, $UserId){
		parent::__construct($AppName, $request);
		$this->userId = $UserId;
		$this->config = $config;
		$this->l10n = $l10n;
	}

	/**
	 * Simply method that get the user value by key
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
	public function getUserValue() {
		$params = ['name' => $this->getItem('name'),
			'age' => $this->getItem('age'),
			'gender' => $this->getItem('gender'),
			'addr' => $this->getItem('addr'),
			'eprofil' => $this->getItem('eprofil'),
			'etype' => $this->getItem('etype'),
			'eexposure' => $this->getItem('eexposure'),
			'edetail' => $this->getItem('edetail'),
			'mprofil' => $this->getItem('mprofil'),
			'mtype' => $this->getItem('mtype'),
			'mexposure' => $this->getItem('mexposure'),
			'mdetail' => $this->getItem('mdetail'),

//For each new varaible add a new line at this function : 'variableName' => $this->getItem('variableName'),

			];
		return new TemplateResponse('background', 'main', $params);
	}

	protected function getItem($key){
                return $this->config->getUserValue($this->userId, $this->appName, $key);
        }
	
	protected function updateItem($key, $value){
		if ( ( $value==='' ) || ( $value === NULL ) ){
			return $this->config->deleteUserValue($this->userId, $this->appName, $key);
		}else{
			return $this->config->setUserValue($this->userId, $this->appName, $key, $value);
		}
	}

	/**
	 * Simply method that set the user value by key
	 * @NoAdminRequired
     * @NoCSRFRequired
	 */
	public function setBackground($name, $age, $gender, $addr, $eprofil, $etype, $eexposure, $edetail, $mprofil, $mtype, $mexposure, $mdetail) {
		$this->updateItem('name', $name);
		$this->updateItem('age', $age);
		$this->updateItem('gender', $gender);
		$this->updateItem('addr', $addr);
		$this->updateItem('eprofil', $eprofil);
		$this->updateItem('etype', $etype);
		$this->updateItem('eexposure', $eexposure);
		$this->updateItem('edetail', $edetail);
		$this->updateItem('mprofil', $mprofil);
		$this->updateItem('mtype', $mtype);
		$this->updateItem('mexposure', $mexposure);
		$this->updateItem('mdetail', $mdetail);

//For each new varaible add a new line at this function : $this->updateItem('variableName', $variableName);

		return $this->getUserValue();  // templates/main.php
	}
}
