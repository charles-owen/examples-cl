<?php
/**
 * @file
 * Example of a PHP view class
 */

namespace CL\Examples;


use CL\Site\Site;

/**
 * Example of a PHP view class
 */
class ExamplePhpView extends \CL\Site\View {
	/**
	 * SectionSelectorView constructor.
	 * @param Site $site Site object
	 */
	public function __construct(Site $site) {
		parent::__construct($site);

		$this->setTitle('Example PHP View');
	}


	/**
	 * Present the section selector
	 * @return string HTML
	 */
	public function present() {
		return <<<HTML
<p>Example PHP View</p>
HTML;

	}

}
