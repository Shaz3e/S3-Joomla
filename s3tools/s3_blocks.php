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

$left_right = $this->countModules('top-left') || $this->countModules('top-right');

// Top Modules Grid
$topModules = $this->countModules('top') || 
			  $this->countModules('top-1') || 
			  $this->countModules('top-2') || 
			  $this->countModules('top-3') || 
			  $this->countModules('top-4') || 
			  $this->countModules('top-5') || 
			  $this->countModules('top-6') ||
			  $this->countModules('top-bottom');

// Mod Top Modules Grid
$modTopModules = $this->countModules('mod-top-1') || 
				 $this->countModules('mod-top-2') || 
				 $this->countModules('mod-top-3') || 
				 $this->countModules('mod-top-4') || 
				 $this->countModules('mod-top-5') || 
				 $this->countModules('mod-top-6');

// Menu Modules Grid
$menuModules = $this->countModules('menu') || 
			   $this->countModules('menu-1') || 
			   $this->countModules('menu-2') || 
			   $this->countModules('menu-3') || 
			   $this->countModules('menu-4') || 
			   $this->countModules('menu-5') || 
			   $this->countModules('menu-6') ||
			   $this->countModules('menu-bottom');

// Mod Menu Modules Grid
$modMenuModules = $this->countModules('mod-menu-1') || 
				  $this->countModules('mod-menu-2') || 
				  $this->countModules('mod-menu-3') || 
				  $this->countModules('mod-menu-4') || 
				  $this->countModules('mod-menu-5') || 
				  $this->countModules('mod-menu-6');

// Breadcrumb Modules Grid				  
$breadcrumbModules = $this->countModules('breadcrumb') || 
					 $this->countModules('breadcrumb-1') || 
					 $this->countModules('breadcrumb-2') || 
					 $this->countModules('breadcrumb-3') || 
					 $this->countModules('breadcrumb-4') || 
					 $this->countModules('breadcrumb-5') || 
					 $this->countModules('breadcrumb-6') ||
					 $this->countModules('breadcrumb-bottom');

// Mod Breadcrumb Modules Grid	
$modBreadcrumbModules = $this->countModules('mod-breadcrumb-1') || 
						$this->countModules('mod-breadcrumb-2') || 
						$this->countModules('mod-breadcrumb-3') || 
						$this->countModules('mod-breadcrumb-4') || 
						$this->countModules('mod-breadcrumb-5') || 
						$this->countModules('mod-breadcrumb-6');

// Slideshow Modules Grid
$slideshowModules = $this->countModules('slideshow') || 
					$this->countModules('slideshow-1') || 
					$this->countModules('slideshow-2') || 
					$this->countModules('slideshow-3') || 
					$this->countModules('slideshow-4') || 
					$this->countModules('slideshow-5') || 
					$this->countModules('slideshow-6') || 
					$this->countModules('slideshow-bottom');

// Mod Slideshow Modules Grid
$modSlideshowModules = $this->countModules('mod-slideshow-1') || 
					   $this->countModules('mod-slideshow-2') || 
					   $this->countModules('mod-slideshow-3') || 
					   $this->countModules('mod-slideshow-4') || 
					   $this->countModules('mod-slideshow-5') || 
					   $this->countModules('mod-slideshow-6');

// Showcase Modules Grid
$showcaseModules = $this->countModules('showcase') || 
				   $this->countModules('showcase-1') || 
				   $this->countModules('showcase-2') || 
				   $this->countModules('showcase-3') || 
				   $this->countModules('showcase-4') || 
				   $this->countModules('showcase-5') || 
				   $this->countModules('showcase-6') ||
				   $this->countModules('showcase-bottom');

// Mod Showcase Modules Grid
$modShowcaseModules = $this->countModules('mod-showcase-1') || 
					  $this->countModules('mod-showcase-2') || 
					  $this->countModules('mod-showcase-3') || 
					  $this->countModules('mod-showcase-4') || 
					  $this->countModules('mod-showcase-5') || 
					  $this->countModules('mod-showcase-6');

// Feature Modules Grid
$featureModules = $this->countModules('feature') || 
				  $this->countModules('feature-1') || 
				  $this->countModules('feature-2') || 
				  $this->countModules('feature-3') || 
				  $this->countModules('feature-4') || 
				  $this->countModules('feature-5') || 
				  $this->countModules('feature-6') ||
				  $this->countModules('feature-bottom');

// Mod Feature Modules Grid
$modFeatureModules = $this->countModules('mod-feature-1') ||
					 $this->countModules('mod-feature-2') || 
					 $this->countModules('mod-feature-3') || 
					 $this->countModules('mod-feature-4') || 
					 $this->countModules('mod-feature-5') || 
					 $this->countModules('mod-feature-6');

// Bottom Features Modules Grid	
$bottomFeatureModules = $this->countModules('bottom-feature-1') || 
						$this->countModules('bottom-feature-2') || 
						$this->countModules('bottom-feature-3') || 
						$this->countModules('bottom-feature-4') || 
						$this->countModules('bottom-feature-5') || 
						$this->countModules('bottom-feature-6');

// Mod Bottom Features Modules Grid	
$modBottomFeatureModules = $this->countModules('mod-bottom-feature-1') ||
						   $this->countModules('mod-bottom-feature-2') || 
						   $this->countModules('mod-bottom-feature-3') || 
						   $this->countModules('mod-bottom-feature-4') || 
						   $this->countModules('mod-bottom-feature-5') || 
						   $this->countModules('mod-bottom-feature-6');

// Utility Modules Grid	
$utilityModules = $this->countModules('utility') || 
				  $this->countModules('utility-1') || 
				  $this->countModules('utility-2') || 
				  $this->countModules('utility-3') || 
				  $this->countModules('utility-4') || 
				  $this->countModules('utility-5') || 
				  $this->countModules('utility-6') || 
				  $this->countModules('utility-bottom');

// Mod Utility Modules Grid	
$modUtilityModules = $this->countModules('mod-utility-1') ||
					 $this->countModules('mod-utility-2') || 
					 $this->countModules('mod-utility-3') || 
					 $this->countModules('mod-utility-4') || 
					 $this->countModules('mod-utility-5') || 
					 $this->countModules('mod-utility-6');

// Scroller Modules Grid
$scrollerModules = $this->countModules('scroller') || 
				   $this->countModules('scroller-1') || 
				   $this->countModules('scroller-2') || 
				   $this->countModules('scroller-3') || 
				   $this->countModules('scroller-4') || 
				   $this->countModules('scroller-5') || 
				   $this->countModules('scroller-6') || 
				   $this->countModules('scroller-bottom');

// Mod Scroller Modules Grid
$modScrollerModules = $this->countModules('mod-scroller-1') || 
					  $this->countModules('mod-scroller-2') || 
					  $this->countModules('mod-scroller-3') || 
					  $this->countModules('mod-scroller-4') || 
					  $this->countModules('mod-scroller-5') || 
					  $this->countModules('mod-scroller-6');

// Extensions Modules Grid
$extensionModules = $this->countModules('extension') || 
					$this->countModules('extension-1') || 
					$this->countModules('extension-2') || 
					$this->countModules('extension-3') || 
					$this->countModules('extension-4') || 
					$this->countModules('extension-5') || 
					$this->countModules('extension-6') || 
					$this->countModules('extension-bottom');

// Mod Extensions Modules Grid
$modExtensionModules = $this->countModules('mod-extension-1') ||
					   $this->countModules('mod-extension-2') || 
					   $this->countModules('mod-extension-3') || 
					   $this->countModules('mod-extension-4') || 
					   $this->countModules('mod-extension-5') || 
					   $this->countModules('mod-extension-6');

// Bottom Modules Grid
$bottomModules = $this->countModules('bottom') || 
				 $this->countModules('bottom-1') || 
				 $this->countModules('bottom-2') || 
				 $this->countModules('bottom-3') || 
				 $this->countModules('bottom-4') || 
				 $this->countModules('bottom-5') || 
				 $this->countModules('bottom-6') ||
				 $this->countModules('bottom-bottom');

// Mod Bottom Modules Grid
$modBottomModules = $this->countModules('mod-bottom-1') || 
					$this->countModules('mod-bottom-2') || 
					$this->countModules('mod-bottom-3') || 
					$this->countModules('mod-bottom-4') || 
					$this->countModules('mod-bottom-5') || 
					$this->countModules('mod-bottom-6');

// Footer Modules Grid
$footerModules = $this->countModules('footer') || 
				 $this->countModules('footer-1') || 
				 $this->countModules('footer-2') || 
				 $this->countModules('footer-3') || 
				 $this->countModules('footer-4') || 
				 $this->countModules('footer-5') || 
				 $this->countModules('footer-6') ||
				 $this->countModules('footer-bottom');

// Mod Footer Modules Grid
$modFooterModules = $this->countModules('mod-footer-1') || 
					$this->countModules('mod-footer-2') || 
					$this->countModules('mod-footer-3') || 
					$this->countModules('mod-footer-4') || 
					$this->countModules('mod-footer-5') || 
					$this->countModules('mod-footer-6');

// Bottom Footer Modules Grid
$bottomFooterModules = $this->countModules('bottom-footer-1') || 
					   $this->countModules('bottom-footer-2') || 
					   $this->countModules('bottom-footer-3') || 
					   $this->countModules('bottom-footer-4') || 
					   $this->countModules('bottom-footer-5') || 
					   $this->countModules('bottom-footer-6');

// Mod Bottom Footer Modules Grid
$modBottomFooterModules = $this->countModules('mod-bottom-footer-1') || 
						  $this->countModules('mod-bottom-footer-2') || 
						  $this->countModules('mod-bottom-footer-3') || 
						  $this->countModules('mod-bottom-footer-4') || 
						  $this->countModules('mod-bottom-footer-5') || 
						  $this->countModules('mod-bottom-footer-6');

?>