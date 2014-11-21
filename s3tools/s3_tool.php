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

if($this->params->get('LocalCDN')){
	
	// Add Stylesheets
	$doc->addStyleSheet('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
	$doc->addStyleSheet('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css');
	$doc->addStyleSheet('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css');
	
	// Add Javascripts
	$doc->addScript('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', 'text/javascript');
	$doc->addScript('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js', 'text/javascript');
	
	// jQuery FitVIDS
	if($this->params->get('ResponsiveVideo')){
		$doc->addScript('//cdnjs.cloudflare.com/ajax/libs/fitvids/1.1.0/jquery.fitvids.min.js', 'text/javascript');
	}

}else{

	// Add Stylesheets
	$doc->addStyleSheet('templates/'.$this->template.'/font-awesome/css/font-awesome.min.css');
	$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap.css');
	$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap-theme.css');
	
	// Add Javascripts
	$doc->addScript($dcTemplatePath.'/js/jquery.min.js', 'text/javascript');
	$doc->addScript($dcTemplatePath.'/js/bootstrap.min.js', 'text/javascript');
	
	// jQuery FitVIDS
	if($this->params->get('ResponsiveVideo')){
		$doc->addScript($dcTemplatePath.'/js/jquery.fitvids.js', 'text/javascript');
	}

}

// Custom JavaScript File
$doc->addScript($dcTemplatePath.'/js/scripts.js', 'text/javascript');


include_once(JPATH_ROOT . "/templates/" . $this->template . '/s3tools/s3_functions.php');
include_once(JPATH_ROOT . "/templates/" . $this->template . '/s3tools/s3_params.php');
include_once(JPATH_ROOT . "/templates/" . $this->template . '/s3tools/s3_blocks.php');

require "lessc.inc.php";
$less = new lessc;
$less->setFormatter("compressed");
$less->checkedCompile(JPATH_ROOT . "/templates/" . $this->template ."/themes/style". $this->params->get('style') ."/style.less", JPATH_ROOT . "/templates/" . $this->template ."/compile/style.css");
?>