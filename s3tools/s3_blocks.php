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

/**
 * Header Modules i.e. Search Box | Phone | Email | Social Icons
 * @since S3 Framework 4.0
 */
$headerModules = $this->params->get('s3_search_box') || 
				 $this->params->get('s3_phone_box') || 
				 $this->params->get('s3_email_box') || 
				 $this->params->get('s3_social_icon');

// Top Module
$topModules = $this->countModules('top') || 
			  $this->countModules('top-1') || 
			  $this->countModules('top-2') || 
			  $this->countModules('top-3') || 
			  $this->countModules('top-4') || 
			  $this->countModules('top-5') || 
			  $this->countModules('top-6') ||
			  $this->countModules('top-7') || 
			  $this->countModules('top-8') || 
			  $this->countModules('top-9') || 
			  $this->countModules('top-10') || 
			  $this->countModules('top-11') || 
			  $this->countModules('top-12') ||
			  $this->countModules('top-bottom');
			  
// grid Top Modules
$gridTopModules = $this->countModules('grid-top-1') || 
				  $this->countModules('grid-top-2') || 
				  $this->countModules('grid-top-3') || 
				  $this->countModules('grid-top-4') || 
				  $this->countModules('grid-top-5') || 
				  $this->countModules('grid-top-6') ||
				  $this->countModules('grid-top-7') || 
				  $this->countModules('grid-top-8') || 
				  $this->countModules('grid-top-9') || 
				  $this->countModules('grid-top-10') || 
				  $this->countModules('grid-top-11') || 
				  $this->countModules('grid-top-12');

// Menu Modules
$menuModules = $this->countModules('menu') || 
			  $this->countModules('menu-1') || 
			  $this->countModules('menu-2') || 
			  $this->countModules('menu-3') || 
			  $this->countModules('menu-4') || 
			  $this->countModules('menu-5') || 
			  $this->countModules('menu-6') ||
			  $this->countModules('menu-7') || 
			  $this->countModules('menu-8') || 
			  $this->countModules('menu-9') || 
			  $this->countModules('menu-10') || 
			  $this->countModules('menu-11') || 
			  $this->countModules('menu-12') ||
			   $this->countModules('menu-bottom');

// grid Menu Modules
$gridMenuModules = $this->countModules('grid-menu-1') || 
				 $this->countModules('grid-menu-2') || 
				 $this->countModules('grid-menu-3') || 
				 $this->countModules('grid-menu-4') || 
				 $this->countModules('grid-menu-5') || 
				 $this->countModules('grid-menu-6') ||
				 $this->countModules('grid-menu-7') || 
				 $this->countModules('grid-menu-8') || 
				 $this->countModules('grid-menu-9') || 
				 $this->countModules('grid-menu-10') || 
				 $this->countModules('grid-menu-11') || 
				 $this->countModules('grid-menu-12');

// Breadcrumb Modules
$breadcrumbModules = $this->countModules('breadcrumb') ||
			  $this->countModules('breadcrumb-1') || 
			  $this->countModules('breadcrumb-2') || 
			  $this->countModules('breadcrumb-3') || 
			  $this->countModules('breadcrumb-4') || 
			  $this->countModules('breadcrumb-5') || 
			  $this->countModules('breadcrumb-6') ||
			  $this->countModules('breadcrumb-7') || 
			  $this->countModules('breadcrumb-8') || 
			  $this->countModules('breadcrumb-9') || 
			  $this->countModules('breadcrumb-10') || 
			  $this->countModules('breadcrumb-11') || 
			  $this->countModules('breadcrumb-12') ||
			  $this->countModules('breadcrumb-bottom');

// grid Breadcrumb Modules	
$gridBreadcrumbModules = $this->countModules('grid-breadcrumb-1') || 
				 $this->countModules('grid-breadcrumb-2') || 
				 $this->countModules('grid-breadcrumb-3') || 
				 $this->countModules('grid-breadcrumb-4') || 
				 $this->countModules('grid-breadcrumb-5') || 
				 $this->countModules('grid-breadcrumb-6') ||
				 $this->countModules('grid-breadcrumb-7') || 
				 $this->countModules('grid-breadcrumb-8') || 
				 $this->countModules('grid-breadcrumb-9') || 
				 $this->countModules('grid-breadcrumb-10') || 
				 $this->countModules('grid-breadcrumb-11') || 
				 $this->countModules('grid-breadcrumb-12');

// Slideshow Modules
$slideshowModules = $this->countModules('slideshow') || 
			  $this->countModules('slideshow-1') || 
			  $this->countModules('slideshow-2') || 
			  $this->countModules('slideshow-3') || 
			  $this->countModules('slideshow-4') || 
			  $this->countModules('slideshow-5') || 
			  $this->countModules('slideshow-6') ||
			  $this->countModules('slideshow-7') || 
			  $this->countModules('slideshow-8') || 
			  $this->countModules('slideshow-9') || 
			  $this->countModules('slideshow-10') || 
			  $this->countModules('slideshow-11') || 
			  $this->countModules('slideshow-12') ||
					$this->countModules('slideshow-bottom');

// grid Slideshow Modules
$gridSlideshowModules = $this->countModules('grid-slideshow-1') || 
				 $this->countModules('grid-slideshow-2') || 
				 $this->countModules('grid-slideshow-3') || 
				 $this->countModules('grid-slideshow-4') || 
				 $this->countModules('grid-slideshow-5') || 
				 $this->countModules('grid-slideshow-6') ||
				 $this->countModules('grid-slideshow-7') || 
				 $this->countModules('grid-slideshow-8') || 
				 $this->countModules('grid-slideshow-9') || 
				 $this->countModules('grid-slideshow-10') || 
				 $this->countModules('grid-slideshow-11') || 
				 $this->countModules('grid-slideshow-12');

// Showcase Modules
$showcaseModules = $this->countModules('showcase') || 
			  $this->countModules('showcase-1') || 
			  $this->countModules('showcase-2') || 
			  $this->countModules('showcase-3') || 
			  $this->countModules('showcase-4') || 
			  $this->countModules('showcase-5') || 
			  $this->countModules('showcase-6') ||
			  $this->countModules('showcase-7') || 
			  $this->countModules('showcase-8') || 
			  $this->countModules('showcase-9') || 
			  $this->countModules('showcase-10') || 
			  $this->countModules('showcase-11') || 
			  $this->countModules('showcase-12') ||
			  $this->countModules('showcase-bottom');

// grid Showcase Modules
$gridShowcaseModules = $this->countModules('grid-showcase-1') || 
				 $this->countModules('grid-showcase-2') || 
				 $this->countModules('grid-showcase-3') || 
				 $this->countModules('grid-showcase-4') || 
				 $this->countModules('grid-showcase-5') || 
				 $this->countModules('grid-showcase-6') ||
				 $this->countModules('grid-showcase-7') || 
				 $this->countModules('grid-showcase-8') || 
				 $this->countModules('grid-showcase-9') || 
				 $this->countModules('grid-showcase-10') || 
				 $this->countModules('grid-showcase-11') || 
				 $this->countModules('grid-showcase-12');

// Feature Modules
$featureModules = $this->countModules('feature') || 
			  $this->countModules('feature-1') || 
			  $this->countModules('feature-2') || 
			  $this->countModules('feature-3') || 
			  $this->countModules('feature-4') || 
			  $this->countModules('feature-5') || 
			  $this->countModules('feature-6') ||
			  $this->countModules('feature-7') || 
			  $this->countModules('feature-8') || 
			  $this->countModules('feature-9') || 
			  $this->countModules('feature-10') || 
			  $this->countModules('feature-11') || 
			  $this->countModules('feature-12') ||
			  $this->countModules('feature-bottom');

// grid Feature Modules
$gridFeatureModules = $this->countModules('grid-feature-1') || 
				 $this->countModules('grid-feature-2') || 
				 $this->countModules('grid-feature-3') || 
				 $this->countModules('grid-feature-4') || 
				 $this->countModules('grid-feature-5') || 
				 $this->countModules('grid-feature-6') ||
				 $this->countModules('grid-feature-7') || 
				 $this->countModules('grid-feature-8') || 
				 $this->countModules('grid-feature-9') || 
				 $this->countModules('grid-feature-10') || 
				 $this->countModules('grid-feature-11') || 
				 $this->countModules('grid-feature-12');

// Bottom Feature Modules
$bottomFeatureModules = $this->countModules('bottom-feature-1') || 
			  $this->countModules('bottom-feature-2') || 
			  $this->countModules('bottom-feature-3') || 
			  $this->countModules('bottom-feature-4') || 
			  $this->countModules('bottom-feature-5') || 
			  $this->countModules('bottom-feature-6') ||
			  $this->countModules('bottom-feature-7') || 
			  $this->countModules('bottom-feature-8') || 
			  $this->countModules('bottom-feature-9') || 
			  $this->countModules('bottom-feature-10') || 
			  $this->countModules('bottom-feature-11') || 
			  $this->countModules('bottom-feature-12');

// grid Bottom Feature Modules	
$gridBottomFeatureModules = $this->countModules('grid-bottom-feature-1') || 
				 $this->countModules('grid-bottom-feature-2') || 
				 $this->countModules('grid-bottom-feature-3') || 
				 $this->countModules('grid-bottom-feature-4') || 
				 $this->countModules('grid-bottom-feature-5') || 
				 $this->countModules('grid-bottom-feature-6') ||
				 $this->countModules('grid-bottom-feature-7') || 
				 $this->countModules('grid-bottom-feature-8') || 
				 $this->countModules('grid-bottom-feature-9') || 
				 $this->countModules('grid-bottom-feature-10') || 
				 $this->countModules('grid-bottom-feature-11') || 
				 $this->countModules('grid-bottom-feature-12');

// Component Modules
$componentModules = $this->countModules('component') || $this->countModules('component-top') || 
			  $this->countModules('component-1') || 
			  $this->countModules('component-2') || 
			  $this->countModules('component-3') || 
			  $this->countModules('component-4') || 
			  $this->countModules('component-5') || 
			  $this->countModules('component-6') ||
			  $this->countModules('component-7') || 
			  $this->countModules('component-8') || 
			  $this->countModules('component-9') || 
			  $this->countModules('component-10') || 
			  $this->countModules('component-11') || 
			  $this->countModules('component-12') || 
				  $this->countModules('component-bottom');

// grid Component Modules	
$gridcomponentModules = $this->countModules('grid-component-1') || 
				 $this->countModules('grid-component-2') || 
				 $this->countModules('grid-component-3') || 
				 $this->countModules('grid-component-4') || 
				 $this->countModules('grid-component-5') || 
				 $this->countModules('grid-component-6') ||
				 $this->countModules('grid-component-7') || 
				 $this->countModules('grid-component-8') || 
				 $this->countModules('grid-component-9') || 
				 $this->countModules('grid-component-10') || 
				 $this->countModules('grid-component-11') || 
				 $this->countModules('grid-component-12');

// Utility Modules
$utilityModules = $this->countModules('utility') || 
			  $this->countModules('utility-1') || 
			  $this->countModules('utility-2') || 
			  $this->countModules('utility-3') || 
			  $this->countModules('utility-4') || 
			  $this->countModules('utility-5') || 
			  $this->countModules('utility-6') ||
			  $this->countModules('utility-7') || 
			  $this->countModules('utility-8') || 
			  $this->countModules('utility-9') || 
			  $this->countModules('utility-10') || 
			  $this->countModules('utility-11') || 
			  $this->countModules('utility-12') || 
				  $this->countModules('utility-bottom');

// grid Utility Modules	
$gridUtilityModules = $this->countModules('grid-utility-1') || 
				 $this->countModules('grid-utility-2') || 
				 $this->countModules('grid-utility-3') || 
				 $this->countModules('grid-utility-4') || 
				 $this->countModules('grid-utility-5') || 
				 $this->countModules('grid-utility-6') ||
				 $this->countModules('grid-utility-7') || 
				 $this->countModules('grid-utility-8') || 
				 $this->countModules('grid-utility-9') || 
				 $this->countModules('grid-utility-10') || 
				 $this->countModules('grid-utility-11') || 
				 $this->countModules('grid-utility-12');

// Scroller Modules
$scrollerModules = $this->countModules('scroller') || 
			  $this->countModules('scroller-1') || 
			  $this->countModules('scroller-2') || 
			  $this->countModules('scroller-3') || 
			  $this->countModules('scroller-4') || 
			  $this->countModules('scroller-5') || 
			  $this->countModules('scroller-6') ||
			  $this->countModules('scroller-7') || 
			  $this->countModules('scroller-8') || 
			  $this->countModules('scroller-9') || 
			  $this->countModules('scroller-10') || 
			  $this->countModules('scroller-11') || 
			  $this->countModules('scroller-12') ||
			  $this->countModules('scroller-bottom');

// grid Scroller Modules
$gridScrollerModules = $this->countModules('grid-scroller-1') || 
				 $this->countModules('grid-scroller-2') || 
				 $this->countModules('grid-scroller-3') || 
				 $this->countModules('grid-scroller-4') || 
				 $this->countModules('grid-scroller-5') || 
				 $this->countModules('grid-scroller-6') ||
				 $this->countModules('grid-scroller-7') || 
				 $this->countModules('grid-scroller-8') || 
				 $this->countModules('grid-scroller-9') || 
				 $this->countModules('grid-scroller-10') || 
				 $this->countModules('grid-scroller-11') || 
				 $this->countModules('grid-scroller-12');

// Extensions Modules
$extensionModules = $this->countModules('extension') || 
			  $this->countModules('extension-1') || 
			  $this->countModules('extension-2') || 
			  $this->countModules('extension-3') || 
			  $this->countModules('extension-4') || 
			  $this->countModules('extension-5') || 
			  $this->countModules('extension-6') ||
			  $this->countModules('extension-7') || 
			  $this->countModules('extension-8') || 
			  $this->countModules('extension-9') || 
			  $this->countModules('extension-10') || 
			  $this->countModules('extension-11') || 
			  $this->countModules('extension-12') ||
			  $this->countModules('extension-bottom');

// grid Extension Modules
$gridExtensionModules = $this->countModules('grid-extension-1') || 
				 $this->countModules('grid-extension-2') || 
				 $this->countModules('grid-extension-3') || 
				 $this->countModules('grid-extension-4') || 
				 $this->countModules('grid-extension-5') || 
				 $this->countModules('grid-extension-6') ||
				 $this->countModules('grid-extension-7') || 
				 $this->countModules('grid-extension-8') || 
				 $this->countModules('grid-extension-9') || 
				 $this->countModules('grid-extension-10') || 
				 $this->countModules('grid-extension-11') || 
				 $this->countModules('grid-extension-12');
				 
// Bottom Modules
$bottomModules = $this->countModules('bottom') || 
			  $this->countModules('bottom-1') || 
			  $this->countModules('bottom-2') || 
			  $this->countModules('bottom-3') || 
			  $this->countModules('bottom-4') || 
			  $this->countModules('bottom-5') || 
			  $this->countModules('bottom-6') ||
			  $this->countModules('bottom-7') || 
			  $this->countModules('bottom-8') || 
			  $this->countModules('bottom-9') || 
			  $this->countModules('bottom-10') || 
			  $this->countModules('bottom-11') || 
			  $this->countModules('bottom-12') ||
			  $this->countModules('bottom-bottom');

// grid Bottom Modules
$gridBottomModules = $this->countModules('grid-bottom-1') || 
				 $this->countModules('grid-bottom-2') || 
				 $this->countModules('grid-bottom-3') || 
				 $this->countModules('grid-bottom-4') || 
				 $this->countModules('grid-bottom-5') || 
				 $this->countModules('grid-bottom-6') ||
				 $this->countModules('grid-bottom-7') || 
				 $this->countModules('grid-bottom-8') || 
				 $this->countModules('grid-bottom-9') || 
				 $this->countModules('grid-bottom-10') || 
				 $this->countModules('grid-bottom-11') || 
				 $this->countModules('grid-bottom-12');

// Footer Modules
$footerModules = $this->countModules('footer') || 
			  $this->countModules('footer-1') || 
			  $this->countModules('footer-2') || 
			  $this->countModules('footer-3') || 
			  $this->countModules('footer-4') || 
			  $this->countModules('footer-5') || 
			  $this->countModules('footer-6') ||
			  $this->countModules('footer-7') || 
			  $this->countModules('footer-8') || 
			  $this->countModules('footer-9') || 
			  $this->countModules('footer-10') || 
			  $this->countModules('footer-11') || 
			  $this->countModules('footer-12') ||
				 $this->countModules('footer-bottom');

// grid Footer Modules
$gridFooterModules = $this->countModules('grid-footer-1') || 
				 $this->countModules('grid-footer-2') || 
				 $this->countModules('grid-footer-3') || 
				 $this->countModules('grid-footer-4') || 
				 $this->countModules('grid-footer-5') || 
				 $this->countModules('grid-footer-6') ||
				 $this->countModules('grid-footer-7') || 
				 $this->countModules('grid-footer-8') || 
				 $this->countModules('grid-footer-9') || 
				 $this->countModules('grid-footer-10') || 
				 $this->countModules('grid-footer-11') || 
				 $this->countModules('grid-footer-12');

// Bottom Footer Modules
$bottomFooterModules = $this->countModules('bottom-footer-1') || 
			  $this->countModules('bottom-footer-2') || 
			  $this->countModules('bottom-footer-3') || 
			  $this->countModules('bottom-footer-4') || 
			  $this->countModules('bottom-footer-5') || 
			  $this->countModules('bottom-footer-6') ||
			  $this->countModules('bottom-footer-7') || 
			  $this->countModules('bottom-footer-8') || 
			  $this->countModules('bottom-footer-9') || 
			  $this->countModules('bottom-footer-10') || 
			  $this->countModules('bottom-footer-11') || 
			  $this->countModules('bottom-footer-12');

// grid Bottom Footer Modules
$gridBottomFooterModules = $this->countModules('grid-bottom-footer-1') || 
				 $this->countModules('grid-bottom-footer-2') || 
				 $this->countModules('grid-bottom-footer-3') || 
				 $this->countModules('grid-bottom-footer-4') || 
				 $this->countModules('grid-bottom-footer-5') || 
				 $this->countModules('grid-bottom-footer-6') ||
				 $this->countModules('grid-bottom-footer-7') || 
				 $this->countModules('grid-bottom-footer-8') || 
				 $this->countModules('grid-bottom-footer-9') || 
				 $this->countModules('grid-bottom-footer-10') || 
				 $this->countModules('grid-bottom-footer-11') || 
				 $this->countModules('grid-bottom-footer-12');

?>