<?php

/*======================================================================*\
|| #################################################################### ||
|| # Package - Joomla Template based on Shaz3e S3 Framework             ||
|| # Copyright (C) 2010  shaz3e.com. All Rights Reserved.               ||
|| # Authors - Shahrukh A. Khan (Shaz3e) and DiligentCreators           ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of shaz3e.com                         ||
|| # for more information visit http://www.shaz3e.com/                  ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses websites - http://www.shaz3e.com        ||
|| # A project of DiligentCreators - Construcing Ideas...               ||
|| #################################################################### ||
\*======================================================================*/

// restricted access
defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();

$this->language = $doc->language;
$this->direction = $doc->direction;
$dcTemplatePath = $this->baseurl.'/templates/'.$this->template;

// Sitename
$sitename = $app->getCfg('sitename');
$sitetitle = htmlspecialchars($this->params->get('sitetitle'));

// meta generator
$documentGenerator = $this->params->get('documentGenerator');
	if($documentGenerator){
		$document = JFactory::getDocument();
		$document->setGenerator($this->params->get('documentGenerator'));
	}else{
		$document = JFactory::getDocument();
		$document->setGenerator('Shaz3e - The Revealing Paradigm');
	}



// Add pageclass_sfx from menu item
$DCPageClassSuffix = $app->getParams('com_content');

// Get Active Menu Alias as a body.class
$DCActivePageAliasClassName = JFactory::getApplication()->getMenu()->getActive();

// pageclass_sfx & DCActivePageAliasClassName
$DCBodyPageClasses = 'Shaz3e '; // Default Class for Shaz3e
$DCBodyPageClasses .= 'dc-wrapper '; // relative wrapper 
$DCBodyPageClasses .= $DCActivePageAliasClassName->alias . ' '; // get pageclass_sfx from item menu
$DCBodyPageClasses .= $DCPageClassSuffix->get('pageclass_sfx'); // get active menu alias as a class


// Logo Params
$logoName = $this->params->get('logo');

	// Logo Image
	if($logoName){
		$logo = '<img src="'. JURI::root() . $logoName .'" alt="'. $sitetitle .'">';
	}else{
		$logo = '<img src="'.$dcTemplatePath.'/themes/images/logo.png'.'" alt="'.$sitetitle.'">';
	}
?>