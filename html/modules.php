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


// no direct access
defined('_JEXEC') or die;

	function spanReplace($title){ 
		$title = "<span>" . $title;
		$space = strpos($title," ");
			if($space){ 
				$title = substr($title, 0, $space) . "</span>" . substr($title, $space);
			}else{
				$title .= "";
			}
		return $title;
	}

	function modChrome_s3_none($module, &$params, &$attribs)
	{
		echo $module->content;
	}
	
	function modChrome_s3_block($module, &$params, &$attribs)
	{
		if (!empty ($module->content)) : ?>
			<div class="dc-block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
				<?php echo $module->content; ?>
			</div>
	}

	/* Default Module Style */
	function modChrome_shaz3e($module, &$params, &$attribs)
	{
		if (!empty ($module->content)) : ?>
			<div class="dc-block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
			<?php if ($module->showtitle != 0) : ?>
				<h3><?php echo spanReplace($module->title); ?></h3>
			<?php endif; ?>
				<?php echo $module->content; ?>
			</div>
		<?php endif;
	}

	/* Sidebar */
	function modChrome_s3_sidebar($module, &$params, &$attribs)
	{
		if (!empty ($module->content)) : ?>
			<div class="dc-block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
			<?php if ($module->showtitle != 0) : ?>
				<h3><?php echo spanReplace($module->title); ?></h3>
			<?php endif; ?>
				<?php echo $module->content; ?>
			</div>
		<?php endif;
	}

?>
