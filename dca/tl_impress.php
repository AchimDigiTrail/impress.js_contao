<?php


/**
 * Table tl_screencast
 */
$GLOBALS['TL_DCA']['tl_impress'] = array
(

	// Config
	'config'   => array
	(
		'dataContainer'    => 'Table',
		'enableVersioning' => true,
		'sql'              => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		),
	),
	// List
	'list'     => array
	(
		'sorting'           => array
		(
			'mode'        => 2,
			'fields'      => array('title'),
			'flag'        => 1,
			'panelLayout' => 'filter;sort,search,limit'
		),
		'label'             => array
		(
			'fields' => array('title'),
			'format' => '%s',
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'      => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'       => 'act=select',
				'class'      => 'header_edit_all',
				'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		'operations'        => array
		(
			'edit'   => array
			(
				'label' => &$GLOBALS['TL_LANG']['tl_impress']['edit'],
				'href'  => 'act=edit',
				'icon'  => 'edit.gif'
			),
			'delete' => array
			(
				'label'      => &$GLOBALS['TL_LANG']['tl_screencast']['delete'],
				'href'       => 'act=delete',
				'icon'       => 'delete.gif',
				'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show'   => array
			(
				'label'      => &$GLOBALS['TL_LANG']['tl_impress']['show'],
				'href'       => 'act=show',
				'icon'       => 'show.gif',
				'attributes' => 'style="margin-right:3px"'
			),
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'  => array('type', 'platform', 'defineSize'),
		'default'       => '{title_legend},title;{content_legende},content;{settings_legend},coordinates,scale;'	
		
	),

	// Subpalettes
	'subpalettes' => array
	(
		'defineSize' => 'size',
	),

	// Fields
	'fields'   => array
	(
		'id'     => array
		(
			'sql' => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'sql' => "int(10) unsigned NOT NULL default '0'"
		),
		'title'  => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_impress']['title'],
			'inputType' => 'text',
			'exclude'   => true,
			'sorting'   => true,
			'flag'      => 1,
			'search'    => true,
			'eval'      => array(
				'mandatory' => true,
				'unique'    => true,
				'maxlength' => 255,
				'tl_class'  => 'w50'
			),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'content'  => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_impress']['content'],
			'inputType' => 'textarea',
			'exclude'   => true,
			'sorting'   => true,
			'flag'      => 1,
			'search'    => true,
			"child_record_class" => "slide",
			'eval'      => array(
					'rte'		=> "tinyMCE",
					'allowHtml' => true
			),
			'sql'       => "text NULL"
		),
		'coordinates'  => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_impress']['coordinates'],
			'inputType' => 'text',
			'exclude'   => true,
			'sorting'   => true,
			'flag'      => 1,
			'reference' => &$GLOBALS['TL_LANG']['tl_impress'],
			'eval'      => array(
				'includeBlankOption' => true,
				'tl_class'           => 'w50'
			),
			'sql'       => "text NULL"
		),
		'scale'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_impress']['scale'],
			'inputType' => 'text',
			'exclude'   => true,
			'eval'      => array(
				'tl_class' 			=> 'w50'				
			),
			'sql'       => "text NULL"
		),		
	)
);