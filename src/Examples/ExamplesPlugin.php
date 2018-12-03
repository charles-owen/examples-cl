<?php
/**
 * @file
 * Plugin class for the Development Examples Subsystem
 */

/**
 * Classes in the Examples subsystem
 *
 * The cl/examples subsystem provides examples of how to
 * implement specific functionality.
 */
namespace CL\Examples;

use CL\Site\Site;
use CL\Site\System\Server;
use CL\Site\Router;

/**
 * Plugin class for the Development Examples Subsystem
 */
class ExamplesPlugin extends \CL\Site\Plugin {
	/**
	 * A tag that represents this plugin
	 * @return string A tag like 'course', 'users', etc.
	 */
	public function tag() {return 'examples';}

	/**
	 * Return an array of tags indicating what plugins this one is dependent on.
	 * @return array of tags this plugin is dependent on
	 */
	public function depends() {return ['users'];}

	/**
	 * Property get magic method
	 *
	 * <b>Properties</b>
	 * Property | Type | Description
	 * -------- | ---- | -----------
	 *
	 * @param string $property Property name
	 * @return mixed
	 */
	public function __get($property) {
		switch($property) {
			default:
				return parent::__get($property);
		}
	}
	/**
	 * Install the plugin
	 * @param Site $site The Site configuration object
	 */
	public function install(Site $site) {
	}


	/**
	 * Ensure the tables for this component exist.
	 * @param Site $site The site configuration component
	 */
	public function ensureTables(Site $site) {
	}

	/**
	 * Amend existing object
	 * The Router is amended with routes for the login page
	 * and for the user API.
	 * @param $object Object to amend.
	 */
	public function amend($object) {
		if($object instanceof Router) {
			$router = $object;

			$router->addRoute(['example', 'vue'], function(Site $site, Server $server, array $params, array $properties, $time) {
				$view = new ExampleVueView($site, $server);
				return $view->vue();
			});

			$router->addRoute(['example', 'php'], function(Site $site, Server $server, array $params, array $properties, $time) {
				$view = new ExamplePhpView($site, $server);
				return $view->whole();
			});

		}
	}
}