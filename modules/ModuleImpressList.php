<?php

class ModuleImpressList extends Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_impress_list';

	/**
	 * Compile the current element
	 */


	protected function compile()
	{
		$this->loadLanguageFile('tl_impress');

		$typeFilter = '';

		$whereSql = array();
		$queryArgs = array();

		// if ($this->screencast_filter_type) {
		// 	$typeFilter = $this->screencast_filter_type;
		// }
		// else if (\Input::get('type')) {
		// 	$typeFilter = \Input::get('type');
		// }

		// if ($typeFilter) {
		// 	$whereSql[] = 'type=?';
		// 	$queryArgs[] = $typeFilter;
		// }

		/** @var \Contao\Database\Result $rs */
		$settings = 'data-x="0" data-y="-1500"  data-z="0" data-rotate-y="40"';
		$rs = Database::getInstance()
			->prepare('SELECT * FROM tl_impress ORDER BY title')
			->execute($queryArgs);

		$this->Template->slides = $rs->fetchAllAssoc();
		$this->Template->css = "/system/modules/impress/assets/css/impress.css";
		$this->Template->js = "/system/modules/impress/assets/js/impress.js";
		$this->Template->settings = $settings;
		//$this->Template->filterByType = !$this->screencast_filter_type;
		//$this->Template->typeFilter   = $typeFilter;
	}
	public function outputFrontendTemplateImpress($strContent, $strTemplate)
	{
	    if ($strTemplate == 'fe_page')
	    {
	        //$strContent = "";
	    }
	       //echo $strTemplate;

    return $strContent;
	}
}