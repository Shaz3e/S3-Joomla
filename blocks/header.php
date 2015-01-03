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
?>
<?php if($this->countModules('header-1')): ?>
	<div class="dc-header1">
    	<jdoc:include type="modules" name="header-1" style="s3_header" />
	</div>
<?php endif; ?>
<?php if($this->countModules('header-2')): ?>
	<div class="dc-header2">
    	<jdoc:include type="modules" name="header-2" style="s3_header" />
	</div>
<?php endif; ?>
<?php if($this->countModules('header-3')): ?>
	<div class="dc-header3">
    	<jdoc:include type="modules" name="header-3" style="s3_header" />
	</div>
<?php endif; ?>
<?php if($this->countModules('header-4')): ?>
	<div class="dc-header4">
    	<jdoc:include type="modules" name="header-4" style="s3_header" />
	</div>
<?php endif; ?>