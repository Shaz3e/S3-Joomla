<?php

// restricted access
defined('_JEXEC') or die;

/**
 * Copyright
 * @since S3 Framework 4.0
 */

if($this->countModules('copyright')): ?>
	<jdoc:include type="modules" name="copyright" style="s3_none" />

<?php elseif( $this->params->get('copyright_text') ): ?>

	<p><?php echo $this->params->get('copyright_text'); ?></p>

<?php else: ?>
	<p>&copy; <?php echo date('Y'); ?> 
    <a href="<?php echo $this->baseurl; ?>" title="<?php echo $sitetitle; ?>"> 
    <?php
		/**
		 * Show sitename params if set other wise show the default title
		 * @since 3.3
		 */
		if($this->params->get('sitetitle')){
			echo $sitetitle;
		}else{
			echo $sitename;
		}
	?>
    </a> All Rights Reserved.
</p>
<?php endif; ?>