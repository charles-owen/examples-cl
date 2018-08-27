<?php
/**
 * @file
 * Example Vue-based page
 * /cl/example/vue
 */

namespace CL\Examples;

use CL\Site\Site;
use CL\Users\View;
use CL\Site\System\Server;
use CL\Course\Member;

/**
 * Example Vue-based page
 *
 * Elements to make the page appear:
 *
 * 1. Create a View file like this one.
 * Can be derived from CL\\Site\\View, CL\\Users\\View, or CL\\Course\\View
 * depending on the specific requirements.
 *
 * Add appropriate Javascript.
 * Set the class to a unique value to use for this page.
 *
 * 2. Create a route to the page. Example:
 *
 * @code
 * $router->addRoute(['example', 'vue'], function(Site $site, Server $server, array $params, array $properties, $time) {
 *   $view = new ExampleVueView($site, $server);
 *   return $view->vue();
 * });
 * @endcode
 *
 * This should display a blank page at the location
 *
 * 3. Create a .vue file to display. See ExampleVue.vue.
 * This can start with just a simple template if necessary.
 *
 * 4. Add to the object factory site.ready function code to
 * instantiate the page:
 *
 * @code
 * 	site.ready(() => {
 *    PageVue.create('div.cl-example-vue', 'Example Vue', ExampleVue);
 *  });
 * @endcode
 *
 * If  menu bar is needed:
 *
 * @code
 * 	site.ready(() => {
 *    PageVue.create('div.cl-example-vue', 'Example Vue', ExampleVue, PageNav);
 *  });
 * @endcode
 *
 * The imports are:
 * @code
 * import {PageVue} from 'site-cl/js/Vue/PageVue';
 * import PageNav from 'site-cl/js/Vue/PageNav.vue';
 * @endcode
 */
class ExampleVueView extends View {
	/**
	 * ExampleVueView constructor.
	 * @param Site $site The Site object
	 * @param Server $server The Server object
	 */
	public function __construct(Site $site, Server $server) {
		parent::__construct($site, ['at-least'=>Member::STUDENT]);

		$this->addJS('examples');
		$data = [];
		$this->addCLS('cl-example-vue', json_encode($data));
	}
}