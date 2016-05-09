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
		$container->registerService ( 'SettingsController', function (IContainer $c){
			$server = $c->query('ServerContainer');
			return new SettingsController ( $c->query ( 'AppName' ), 
							$server->getRequest(),
				                        $server->getConfig(),
							$c->query('L10N'),
							$c->query('CurrentUID'));
		} );
		
		/**
		 * Core
		 */
		$container->registerService('L10N', function(SimpleContainer $c) {
			return $c->query('ServerContainer')->getL10N($c->query('AppName'));
		});

		$container->registerService('CurrentUID', function(IContainer $c) {
			/** @var \OC\Server $server */
			$server = $c->query('ServerContainer');

			$user = $server->getUserSession()->getUser();
			return ($user) ? $user->getUID() : '';
		});
	}
}
