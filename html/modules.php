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

	/** Grid Module Style
	 * 
	 * @since v3.3
	 */
	function modChrome_grid_1($module, &$params, &$attribs){
		if (!empty ($module->content)) : ?>
        	<div class="grid-1">
                <div class="block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
                <?php if ($module->showtitle != 0) : ?>
                    <h3><?php echo spanReplace($module->title); ?></h3>
                <?php endif; ?>
                    <?php echo $module->content; ?>
                </div>
            </div>
		<?php endif;
	}
	
	function modChrome_grid_2($module, &$params, &$attribs){
		if (!empty ($module->content)) : ?>
        	<div class="grid-2">
                <div class="block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
                <?php if ($module->showtitle != 0) : ?>
                    <h3><?php echo spanReplace($module->title); ?></h3>
                <?php endif; ?>
                    <?php echo $module->content; ?>
                </div>
            </div>
		<?php endif;
	}
	
	function modChrome_grid_3($module, &$params, &$attribs){
		if (!empty ($module->content)) : ?>
        	<div class="grid-3">
                <div class="block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
                <?php if ($module->showtitle != 0) : ?>
                    <h3><?php echo spanReplace($module->title); ?></h3>
                <?php endif; ?>
                    <?php echo $module->content; ?>
                </div>
            </div>
		<?php endif;
	}
	
	function modChrome_grid_4($module, &$params, &$attribs){
		if (!empty ($module->content)) : ?>
        	<div class="grid-4">
                <div class="block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
                <?php if ($module->showtitle != 0) : ?>
                    <h3><?php echo spanReplace($module->title); ?></h3>
                <?php endif; ?>
                    <?php echo $module->content; ?>
                </div>
            </div>
		<?php endif;
	}
	
	function modChrome_grid_5($module, &$params, &$attribs){
		if (!empty ($module->content)) : ?>
        	<div class="grid-5">
                <div class="block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
                <?php if ($module->showtitle != 0) : ?>
                    <h3><?php echo spanReplace($module->title); ?></h3>
                <?php endif; ?>
                    <?php echo $module->content; ?>
                </div>
            </div>
		<?php endif;
	}
	
	function modChrome_grid_6($module, &$params, &$attribs){
		if (!empty ($module->content)) : ?>
        	<div class="grid-6">
                <div class="block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
                <?php if ($module->showtitle != 0) : ?>
                    <h3><?php echo spanReplace($module->title); ?></h3>
                <?php endif; ?>
                    <?php echo $module->content; ?>
                </div>
            </div>
		<?php endif;
	}
	
	function modChrome_grid_7($module, &$params, &$attribs){
		if (!empty ($module->content)) : ?>
        	<div class="grid-7">
                <div class="block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
                <?php if ($module->showtitle != 0) : ?>
                    <h3><?php echo spanReplace($module->title); ?></h3>
                <?php endif; ?>
                    <?php echo $module->content; ?>
                </div>
            </div>
		<?php endif;
	}
	
	function modChrome_grid_8($module, &$params, &$attribs){
		if (!empty ($module->content)) : ?>
        	<div class="grid-8">
                <div class="block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
                <?php if ($module->showtitle != 0) : ?>
                    <h3><?php echo spanReplace($module->title); ?></h3>
                <?php endif; ?>
                    <?php echo $module->content; ?>
                </div>
            </div>
		<?php endif;
	}
	
	function modChrome_grid_9($module, &$params, &$attribs){
		if (!empty ($module->content)) : ?>
        	<div class="grid-9">
                <div class="block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
                <?php if ($module->showtitle != 0) : ?>
                    <h3><?php echo spanReplace($module->title); ?></h3>
                <?php endif; ?>
                    <?php echo $module->content; ?>
                </div>
            </div>
		<?php endif;
	}
	
	function modChrome_grid_10($module, &$params, &$attribs){
		if (!empty ($module->content)) : ?>
        	<div class="grid-10">
                <div class="block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
                <?php if ($module->showtitle != 0) : ?>
                    <h3><?php echo spanReplace($module->title); ?></h3>
                <?php endif; ?>
                    <?php echo $module->content; ?>
                </div>
            </div>
		<?php endif;
	}
	
	function modChrome_grid_11($module, &$params, &$attribs){
		if (!empty ($module->content)) : ?>
        	<div class="grid-11">
                <div class="block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
                <?php if ($module->showtitle != 0) : ?>
                    <h3><?php echo spanReplace($module->title); ?></h3>
                <?php endif; ?>
                    <?php echo $module->content; ?>
                </div>
            </div>
		<?php endif;
	}
	
	function modChrome_grid_12($module, &$params, &$attribs){
		if (!empty ($module->content)) : ?>
        	<div class="grid-12">
                <div class="block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
                <?php if ($module->showtitle != 0) : ?>
                    <h3><?php echo spanReplace($module->title); ?></h3>
                <?php endif; ?>
                    <?php echo $module->content; ?>
                </div>
            </div>
		<?php endif;
	}

	/** Default Module Style
	 *
	 * @since v1.0
	 */
	function modChrome_s3_none($module, &$params, &$attribs){
		echo $module->content;
	}



	/** Default Module Style
	 *
	 * @since v1.0
	 */
	function modChrome_shaz3e($module, &$params, &$attribs){
		if (!empty ($module->content)) : ?>
			<div class="block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
			<?php if ($module->showtitle != 0) : ?>
				<h3><?php echo spanReplace($module->title); ?></h3>
			<?php endif; ?>
				<?php echo $module->content; ?>
			</div>
		<?php endif;
	}

	/**
	 * Full width module
	 * @since v3.3
	 */
	function modChrome_full_width($module, &$params, &$attribs){
		if (!empty ($module->content)) : ?>
			<div class="full-width block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
			<?php if ($module->showtitle != 0) : ?>
				<h3><?php echo spanReplace($module->title); ?></h3>
			<?php endif; ?>
				<?php echo $module->content; ?>
			</div>
		<?php endif;
	}



	/* Sidebar */
	function modChrome_s3_sidebar($module, &$params, &$attribs){
		if (!empty ($module->content)) : ?>
			<div class="block <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
			<?php if ($module->showtitle != 0) : ?>
				<h3><?php echo spanReplace($module->title); ?></h3>
			<?php endif; ?>
				<?php echo $module->content; ?>
			</div>
		<?php endif;
	}
	
	function modChrome_s3_header($module, &$params, &$attribs){
		if (!empty ($module->content)) : ?>
			<div class="<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
				<?php echo $module->content; ?>
			</div>
		<?php endif;
	}
?>