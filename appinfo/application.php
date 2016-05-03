<?php

namespace OCA\Background\AppInfo;

use \OC\AppFramework\Utility\SimpleContainer;
use \OCP\AppFramework\App;
use \OCA\Background\Controller\PageController;
use \OCA\Background\Controller\SettingsController;

class Application extends App {
	public function __construct(array $urlParams = array()) {
		parent::__construct ( 'background', $urlParams );
		
		$container = $this->getContainer ();
		
		/**
		 * Controllers
		 */
		$container->registerService ( 'PageController', function (SimpleContainer $c) use ($server) {
			return new PageController ( $c->query ( 'AppName' ), 
						$c->query ( 'Request' ),
						$c->query ( 'Config' ), 
						$c->query('CurrentUID'));
		} );
		
		$container->registerService ( 'SettingsController', function (SimpleContainer $c) use ($server) {
			return new SettingsController ( $c->query ( 'AppName' ), 
							$c->query ( 'Request' ), 
							$c->query ( 'Config' ), 
							$c->query('CurrentUID'));
		} );
		
		/**
		 * Core
		 */
		
		$container->registerService ( 'Config', function (SimpleContainer $c) {
			return $c->query ( 'ServerContainer' )->getConfig ();
		} );
	}
}
