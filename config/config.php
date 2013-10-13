<?php
 
/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['content']['impress'] = array(
	'tables' => array('tl_impress'),
	'icon'   => 'system/modules/impress/assets/images/impress.png'
);
$GLOBALS['FE_MOD']['impress'] = array(
	'impress_list' => 'ModuleImpressList',
);
