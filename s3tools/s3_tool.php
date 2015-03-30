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

include_once(JPATH_ROOT . "/templates/" . $this->template . '/s3tools/s3_params.php');
include_once(JPATH_ROOT . "/templates/" . $this->template . '/s3tools/s3_blocks.php');

if($this->params->get('LocalCDN')){
	
	// Add Stylesheets
	if($this->params->get('loadFontAwesome')){
		$doc->addStyleSheet('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	}
	
	if($this->params->get('loadBootstrap')){
		$doc->addStyleSheet('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css');
	}
	if($this->params->get('loadBootstrapTheme')){
		$doc->addStyleSheet('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css');
	}
	
	// Add Javascripts
	if($this->params->get('loadjQuery') == 1){
		$doc->addScript('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', 'text/javascript');
	}
	
	if($this->params->get('loadBootstrap')){
		$doc->addScript('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', 'text/javascript');
	}
	
	// jQuery FitVIDS
	if($this->params->get('ResponsiveVideo')){
		$doc->addScript('//cdnjs.cloudflare.com/ajax/libs/fitvids/1.1.0/jquery.fitvids.min.js', 'text/javascript');
	}

}else{

	// Add Stylesheets
	if($this->params->get('loadFontAwesome')){
		$doc->addStyleSheet('templates/'.$this->template.'/font-awesome/css/font-awesome.min.css');
	}
		
	if($this->params->get('loadBootstrap')){
		$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap.css');
	}
	if($this->params->get('loadBootstrapTheme')){
		$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap-theme.css');
	}
	
	// Add Javascripts
	if($this->params->get('loadjQuery') == 1){
		$doc->addScript($dcTemplatePath.'/js/jquery.min.js', 'text/javascript');
	}
	if($this->params->get('loadBootstrap')){
		$doc->addScript($dcTemplatePath.'/js/bootstrap.min.js', 'text/javascript');
	}
	
	// jQuery FitVIDS
	if($this->params->get('ResponsiveVideo')){
		$doc->addScript($dcTemplatePath.'/js/jquery.fitvids.js', 'text/javascript');
	}

}

// font style sheet
$doc->addStyleSheet('templates/'.$this->template.'/fonts/fonts.css');

/*
 * responsive menu
 * @since 3.3
 */
$doc->addScript($dcTemplatePath.'/js/menu.js', 'text/javascript');

// Custom JavaScript File
$doc->addScript($dcTemplatePath.'/js/scripts.js', 'text/javascript');


// if development mode is off script will generate css file instead less
if($this->params->get('developmentMode') != 1){
	// less compiler
	require "lessc.inc.php";
	
	$inputFile = JPATH_ROOT . "/templates/" . $this->template ."/themes/style". $this->params->get('style') ."/style.less";
	$outputFile = JPATH_ROOT . "/templates/" . $this->template ."/themes/style". $this->params->get('style') ."/style.css";
	
	$less = new lessc;
	$less->setFormatter("compressed");
	$cache = $less->cachedCompile($inputFile);
	
	file_put_contents($outputFile, $cache["compiled"]);
	
	$last_updated = $cache["updated"];
	$cache = $less->cachedCompile($cache);
		if ($cache["updated"] > $last_updated) {
			file_put_contents($outputFile, $cache["compiled"]);
		}

	// compiled css file
	$doc->addStyleSheet($dcTemplatePath.'/themes/style'.$this->params->get('style').'/style.css');
}

?>