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


/**
 * Load Files from CDN or Locally
 */
if($this->params->get('LocalCDN')){

	/**
	 * Load Files from CDN
	 */

	// Load jQuery
	if($this->params->get('loadjQuery') == 1){
		$doc->addScript('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', 'text/javascript');
	}
	 
	// Load Font Awesome
	if($this->params->get('loadFontAwesome')){
		$doc->addStyleSheet('https://use.fontawesome.com/releases/v5.1.0/css/all.css');
	}
	
	// Load Boostrap
	if($this->params->get('loadBootstrap')){
		$doc->addStyleSheet('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
		$doc->addScript('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
	}
	
	// Load animate.css
	if($this->params->get('loadAnimateCSS')){
		$doc->addStyleSheet('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
	}
	
	// jQuery FitVIDS
	if($this->params->get('loadResponsiveVideo')){
		$doc->addScript('//cdnjs.cloudflare.com/ajax/libs/fitvids/1.1.0/jquery.fitvids.min.js', 'text/javascript');
	}

}else{

	/**
	 * Load Files Locally
	 */	
	
	// Add Javascripts
	if($this->params->get('loadjQuery') == 1){
		$doc->addScript($dcTemplatePath.'/js/jquery.min.js', 'text/javascript');
	}
	
	// Load Bootstrap
	if($this->params->get('loadBootstrap')){
		$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap.min.css');
	}
	
	// Load Bootstrap Theme
	if($this->params->get('loadBootstrapTheme')){
		$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap-theme.css');
	}
	
	// Load animate.css
	if($this->params->get('loadAnimateCSS')){
		$doc->addStyleSheet('templates/'.$this->template.'/css/animate.css');
	}
	
	// Load Font Awesome
	if($this->params->get('loadFontAwesome')){
		$doc->addScript('/font-awesome/js/all.js', 'text/javascript');
	}
	
	// Load Bootstrap
	if($this->params->get('loadBootstrap')){
		$doc->addScript($dcTemplatePath.'/js/bootstrap.bundle.min.js', 'text/javascript');
	}
	
	// jQuery FitVIDS
	if($this->params->get('loadResponsiveVideo')){
		$doc->addScript($dcTemplatePath.'/js/jquery.fitvids.js', 'text/javascript');
	}

}

/**
 * load user fonts only when google fonts are disabled
 * Google Fonts Added
 * 
 * @since S3 Framework 4.0
 */
if( $this->params->get('css_custom_font') == 1 ){
	$doc->addStyleSheet('templates/'.$this->template.'/fonts/fonts.css');
}

/**
 * responsive menu
 * @since 3.3
 */
$doc->addScript($dcTemplatePath.'/js/menu.js', 'text/javascript');

/**
 * Search Script
 * @since 4.0
 */
if($this->params->get('s3_search_box') == 1){
	$doc->addScript($dcTemplatePath.'/js/search.js', 'text/javascript');
}

/**
 * Custom JavaScript File
 * @since 1.0
 */
$doc->addScript($dcTemplatePath.'/js/scripts.js', 'text/javascript');


// if development mode is off script will generate css file instead less
if($this->params->get('developmentMode') != 1){
	// less compiler
	
	if ( !class_exists( 'lessc' ) ) {
		require "lessc.inc.php";
	}
		
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