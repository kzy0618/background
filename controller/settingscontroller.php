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

class SettingsController extends Controller {

	private $config;

	public function __construct($AppName, IRequest $request,IConfig $config){
		parent::__construct($AppName, $request);
		$this->config = $config;
	}

	/**
	 * Simply method that get the user value by key
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
	public function getUserValue($userId, $key) {
		return $this->config->getUserValue($userId, $this->appName, $key);
	}

	/**
	 * Simply method that set the user value by key
	 * @NoAdminRequired
         * @NoCSRFRequired
	 */
	public function setUserValue($userId, $key, $value) {
		if ( ( $value==='' ) || ( $value === NULL ) ){
			return $this->config->deleteUserValue($userId, $this->appName, $key);
		}else{
			return $this->config->setUserValue($userId, $this->appName, $key, $value);
		}
	}
}
