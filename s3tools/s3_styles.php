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


// Theme Selector
if($this->params->get('style') == 1): ?>
<link rel="stylesheet/less" type="text/css" href="<?php echo $dcTemplatePath; ?>/themes/style<?php echo $this->params->get('style'); ?>/style.less">
<?php

		$styleSheets = array(); 

		// DEFINE STYLESHEETS
		$styleSheets[1]["text"]	 =	'Style 1';
		$styleSheets[1]["title"]	=	'Style 1';
		$styleSheets[1]["sheet"]	=	'<link rel="stylesheet/less" type="text/css" href="'.$dcTemplatePath.'/themes/style1/style.less">';
		
		$styleSheets[2]["text"]	 =	'Style 2';
		$styleSheets[2]["title"]	=	'Style 2';
		$styleSheets[2]["sheet"]	=	'<link rel="stylesheet/less" type="text/css" href="'.$dcTemplatePath.'/themes/style2/style.less">';
		
		$styleSheets[3]["text"]	 =	'Style 3';
		$styleSheets[3]["title"]	=	'Style 3';
		$styleSheets[3]["sheet"]	=	'<link rel="stylesheet/less" type="text/css" href="'.$dcTemplatePath.'/themes/style3/style.less">';
		
		
		
		// DEFAULT STYLESHEET
		$defaultStyleSheet = $this->params->get('style');
		
		// SET STYLESHEET
		if(!isset($_COOKIE["STYLE"])){
			if(isset($_SESSION["STYLE"])){
				echo $styleSheets[$_SESSION["STYLE"]]["sheet"];
			} else {
				echo $styleSheets[$defaultStyleSheet]["sheet"];
			}
		} else {
			echo $styleSheets[$_COOKIE["STYLE"]]["sheet"];
		}
<?php endif; ?>