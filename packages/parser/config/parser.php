<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2011 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * NOTICE:
 *
 * If you need to make modifications to the default configuration, copy
 * this file to your app/config folder, and make them in there.
 *
 * This will allow you to upgrade fuel without losing your custom config.
 */

return array(

	// ------------------------------------------------------------------------
	// Register extensions to their parsers, either classname or array config
	// ------------------------------------------------------------------------
	'extensions' => array(
		'php'       => 'View',
		'twig'      => 'View_Twig',
		'mustache'  => 'View_Mustache',
		'md'        => 'View_Markdown',
		'dwoo'      => array('class' => 'View_Dwoo', 'extension' => 'tpl'),
		'jade'      => 'View_Jade',
		'haml'      => 'View_Haml',
		'phptal'    => 'View_Phptal',
		'smarty'    => 'View_Smarty',
	),


	// ------------------------------------------------------------------------
	// Individual class config by classname
	// ------------------------------------------------------------------------


	// MARKDOWN ( http://michelf.com/projects/php-markdown/ )
	// ------------------------------------------------------------------------
	'View_Markdown' => array(
		'include'   => PKGPATH.'parser'.DS.'vendor'.DS.'markdown'.DS.'markdown.php',
		'allow_php' => true,
	),

	// TWIG ( http://www.twig-project.org/documentation )
	// ------------------------------------------------------------------------
	'View_Twig' => array(
		'include' => APPPATH.'vendor'.DS.'Twig'.DS.'Autoloader.php',
		'views_paths' => array(APPPATH.'views'),
		'delimiters' => array(
			'tag_block'     => array('{%', '%}'),
			'tag_comment'   => array('{#', '#}'),
				'tag_variable'  => array('{{', '}}'),
			),
			'environment' => array(
				'debug'                => false,
				'charset'              => 'utf-8',
				'base_template_class'  => 'Twig_Template',
				'cache'                => APPPATH.'cache'.DS.'twig'.DS,
				'auto_reload'          => true,
				'strict_variables'     => false,
				'autoescape'           => false,
				'optimizations'        => -1,
			),
			'extensions' => array(),
		),

		// DWOO ( http://wiki.dwoo.org/ )
		// ------------------------------------------------------------------------
		'View_Dwoo' => array(
			'include' => APPPATH.'vendor'.DS.'Dwoo'.DS.'dwooAutoload.php',
			'delimiters' => array('{{', '}}'),
			'environment' => array(
				'autoescape'       => false,
				'nested_comments'  => false,
				'allow_spaces'     => false,
				'cache_dir'        => APPPATH.'cache'.DS.'dwoo'.DS,
				'compile_dir'      => APPPATH.'cache'.DS.'dwoo'.DS.'compiled'.DS,
				'cache_time'       => 0,

				// Set what parser should do with PHP tags
				// 1 - Encode tags | 2 - Remove tags | 3 - Allow tags
				'allow_php_tags'   => 2,

				// Which PHP functions should be accessible through Parser
				'allow_php_func'   => array(),
			),
		),

		// MUSTACHE ( https://github.com/bobthecow/mustache.php )
		// ------------------------------------------------------------------------
		'View_Mustache' => array(
			'include' => PKGPATH.'parser'.DS.'vendor'.DS.'Mustache'.DS.'Mustache.php',
			'delimiters' => array('{{', '}}'),
			'environment' => array(
				'charset' => 'UTF-8',
				'pragmas' => array(),
			),
		),

		// JADE PHP ( https://github.com/everzet/jade.php )
		// See notes in /parser/classes/view/jade.php
		// ------------------------------------------------------------------------
		'View_Jade' => array(
			'include' => APPPATH.'vendor'.DS.'Jade'.DS.'autoload.php.dist',
			'cache_dir' => APPPATH.'cache'.DS.'jade'.DS,
		),

		// HAML / PHAMLP ( http://code.google.com/p/phamlp/ )
		// ------------------------------------------------------------------------
		'View_Haml'   => array(
			'include'   => APPPATH.'vendor'.DS.'Phamlp'.DS.'haml'.DS.'HamlParser.php',
			'cache_dir' => APPPATH.'cache'.DS.'haml'.DS,
		),
		// SMARTY ( http://www.smarty.net/documentation )
		// ------------------------------------------------------------------------
		'View_Smarty'   => array(
			'include'       => APPPATH.'vendor'.DS.'Smarty'.DS.'libs'.DS.'Smarty.class.php',
			'delimiters'    => array('{', '}'),
			'environment'   => array(
				'compile_dir'       => APPPATH.'tmp'.DS.'Smarty'.DS.'templates_c'.DS,
				'config_dir'        => APPPATH.'tmp'.DS.'Smarty'.DS.'configs'.DS,
				'cache_dir'         => APPPATH.'cache'.DS.'Smarty'.DS,
				'caching'           => false,
				'cache_lifetime'    => 0,
				'force_compile'     => false,
				'compile_check'     => true,
				'debugging'         => false,
				'autoload_filters'  => array(),
				'default_modifiers' => array(),
			),
		),

		// Phptal ( http://phptal.org/manual/en/ )
		// ------------------------------------------------------------------------
		'View_Phptal'   => array(
			'include'   => APPPATH.'vendor'.DS.'PHPTAL'.DS.'PHPTAL.php',
			'cache_dir' => APPPATH.'cache'.DS.'PHPTAL'.DS,
			'cache_lifetime' => 0,
			'encoding' => 'UTF-8',
			'output_mode' => 'PHPTAL::XHTML',
			'template_repository' => '',
			'force_reparse' => false,
		),

	);

				// end of file parser.php
