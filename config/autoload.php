<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Impress
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'ModuleImpressList' => 'system/modules/impress/modules/ModuleImpressList.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_impress_list' => 'system/modules/impress/templates',
));
