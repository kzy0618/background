<?php
/**
 * ownCloud - background
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Shawn <syu702@aucklanduni.ac.nz>
 * @copyright Shawn 2016
 */

namespace OCA\Background\Controller;

use OCP\IRequest;
use OCP\IConfig;
use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\AppFramework\Http\DataResponse;

class SettingsController extends Controller {

	private $config;
	private $userId;

	public function __construct($AppName, IRequest $request,IConfig $config, $UserId){
		parent::__construct($AppName, $request);
		$this->userId = $UserId;
		$this->config = $config;
	}

	/**
	 * Simply method that get the user value by key
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
	public function getUserValue($key) {
		$this->config->getUserValue($this->userId, $this->appName, $key);
		return new DataResponse(array(
			'data' => array(
				'message'	=> (string) $this->l10n->t('Your settings have been updated.'),
			),
		));
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
	public function setBackground($name, $age, $gender, $addr) {
		$this->updateItem('name', $name);
		$this->updateItem('age', $age);
		$this->updateItem('gender', $gender);
		$this->updateItem('addr', $addr);
		return new TemplateResponse('background', 'main', null);  // templates/main.php
	}
}
