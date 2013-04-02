<?php
/**
 * Part of the Platform application.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Platform
 * @version    2.0.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2013, Cartalyst LLC
 * @link       http://cartalyst.com
 */

return array(

	/*
	|--------------------------------------------------------------------------
	| Asset Default Filters
	|--------------------------------------------------------------------------
	|
	| List the filters used by each extension when compiling
	|
	*/

	'filters' => array(

		'css' => array(

			function() { return new Assetic\Filter\CssImportFilter; },
			'Basset\Filter\UriRewriteFilter',

		),

		'less' => array(

			'Assetic\Filter\LessphpFilter',
			'Basset\Filter\UriRewriteFilter',

		),

		'sass' => array(

			'Assetic\Filter\Sass\SassFilter',
			'Basset\Filter\UriRewriteFilter',

		),

		'scss' => array(

			'Assetic\Filter\Sass\ScssFilter',
			'Basset\Filter\UriRewriteFilter',

		),

		'js' => array(

		),

		'coffee' => array(

			'Assetic\Filter\CoffeeScriptFilter',

		),

	),

);