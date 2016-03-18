<?php
// restricted access
defined('_JEXEC') or die;

	/**
	 * Copyright & Credit Settings
	 * S3CC Styles - Default
	 * File Name: s3cc-0.php
	 * @since S3 Framework 2.0
	 */
?>
<?php if($this->params->get('credit') || $this->params->get('copyright') || $this->params->get('shaz3e')): ?>
<section class="DiligentCreators s3cc-<?php echo $this->params->get('s3_ccstyle'); ?><?php echo ($this->params->get('s3cc_fixed') == '' ? '' : ' s3cc-fixed'); ?> dc-clear" id="DiligentCreators">
	<div class="row">
	<?php if($this->params->get('credit') && $this->params->get('copyright')): ?>
    	<div class="grid-6 dc-copyright" id="dc-copyright">
            <div class="block">
        	<?php
				include_once("copyright.php");
			?>
            </div>
        </div>
        
        <div class="grid-6 dc-credits" id="dc-credits">
        	<div class="block">
        	<?php
				include_once("credits.php");
			?>
            </div>
        </div>
    <?php else: ?>
    	<div class="grid-12 dc-copyright" id="dc-copyright">
            <?php if( $this->params->get('copyright') == 1) : ?>
            <div class="block">
    	        <?php
					include_once("copyright.php");
				?>
            </div>
            <?php endif; ?>

            <?php if( $this->params->get('credit')  == 1) : ?>
        	<div class="block">
    	        <?php
					include_once("credits.php");
				?>
            </div>
			<?php endif; ?>
        </div>
    <?php endif; ?>


		<?php if( $this->params->get('shaz3e')  == 1): ?>
			<div class="dc-clear"></div>
            <?php include("s3logo.php"); ?>
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>