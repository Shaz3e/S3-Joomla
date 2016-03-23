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
		$doc->addStyleSheet('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
	}
	
	if($this->params->get('loadBootstrap')){
		$doc->addStyleSheet('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
	}
	if($this->params->get('loadBootstrapTheme')){
		$doc->addStyleSheet('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css');
	}
	
	// Add Javascripts
	if($this->params->get('loadjQuery') == 1){
		$doc->addScript('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js', 'text/javascript');
	}
	
	if($this->params->get('loadBootstrap')){
		$doc->addScript('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', 'text/javascript');
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

/**
 * load user fonts only when google fonts are disabled
 * Google Fonts Added
 * 
 * @since S3 Framework 4.0
 */
if( $this->params->get('gfont_config') == 0 ){
	$doc->addStyleSheet('templates/'.$this->template.'/fonts/fonts.css');
}

/*
 * responsive menu
 * @since 3.3
 */
$doc->addScript($dcTemplatePath.'/js/menu.js', 'text/javascript');

// Search Script
$doc->addScript($dcTemplatePath.'/js/search.js', 'text/javascript');

// Custom JavaScript File
$doc->addScript($dcTemplatePath.'/js/scripts.js', 'text/javascript');


// if development mode is off script will generate css file instead less
if($this->params->get('developmentMode') != 1){
	// less compiler
	require "lessc.inc.php";	
		
	$inputFileTheme  = JPATH_ROOT . "/templates/" . $this->template ."/themes/colors/theme". $this->params->get('color_theme') .".less";
	$inputFileStyle  = JPATH_ROOT . "/templates/" . $this->template ."/themes/styles/style". $this->params->get('style') .".less";
		
	$outputFileTheme = JPATH_ROOT . "/templates/" . $this->template ."/themes/colors/theme". $this->params->get('color_theme') .".css";
	$outputFileStyle = JPATH_ROOT . "/templates/" . $this->template ."/themes/styles/style". $this->params->get('style') .".css";
		
	$less = new lessc;
	$less->setFormatter("compressed");
	$cacheTheme = $less->cachedCompile($inputFileTheme);
	$cacheStyle = $less->cachedCompile($inputFileStyle);
		
	file_put_contents($outputFileTheme, $cacheTheme["compiled"]);
	file_put_contents($outputFileStyle, $cacheStyle["compiled"]);
	
	$FileThemeUpdated = $cacheTheme["updated"];
	$FileStyleUpdated = $cacheStyle["updated"];
	
	$cacheTheme = $less->cachedCompile($cacheTheme);
	$cacheStyle = $less->cachedCompile($cacheStyle);
	
		if ($cacheTheme["updated"] > $FileThemeUpdated) {
			file_put_contents($outputFileTheme, $cacheTheme["compiled"]);
		}
		
		if ($cacheStyle["updated"] > $FileStyleUpdated) {
			file_put_contents($outputFileStyle, $cacheStyle["compiled"]);
		}
	// compiled css file
	$doc->addStyleSheet($dcTemplatePath."/themes/colors/theme". $this->params->get('color_theme') .".css");
	$doc->addStyleSheet($dcTemplatePath."/themes/styles/style". $this->params->get('style') .".css");
}

?>