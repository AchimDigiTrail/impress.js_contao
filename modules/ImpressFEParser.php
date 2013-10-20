<?php

class ImpressFEParser
{
	public function outputFrontendTemplateImpress($strContent, $strTemplate)
	{

		$this->css = "/system/modules/impress/assets/css/impress.css";
		$this->js = "/system/modules/impress/assets/js/impress.js";
		$replace = '<link href="'.$this->css.'" rel="stylesheet" />
		<script src="'.$this->js.'"></script>
		<script>impress().init();</script>';
	    if ($strTemplate == 'fe_page')
	    {
	        
	        $strContent = str_replace("{{impress_js_and_css}}", $replace, $strContent);
	    }
	       //echo $strTemplate;

    return $strContent;
	}
}