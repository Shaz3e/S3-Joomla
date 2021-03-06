<?php
// restricted access
defined('_JEXEC') or die;

	/**
	 * Copyright & Credit Settings
	 * S3CC Styles - Style 2
	 * File Name: s3cc-2.php
	 * @since S3 Framework 2.0
	 */
?>
<?php if($this->params->get('credit') || $this->params->get('copyright') || $this->params->get('shaz3e')): ?>
<section class="DiligentCreators s3cc-<?php echo $this->params->get('s3_ccstyle'); ?> s3cc-fixed dc-clear" id="DiligentCreators">
	<div class="<?php echo( $this->params->get('fluidContainer') == 1 ? 'container-fluid' : 'row' ); ?>">
    <?php if( $this->params->get('copyright')  == 1 || $this->params->get('credit') == 1): ?>
    
        <?php if( $this->params->get('shaz3e')  == 1): ?>
        <div class="grid-6 dc-copyright" id="dc-copyright">
        	<div class="block">
            	<div class="dc-clear"></div>
                <?php include("s3logo.php"); ?>
            </div>
        </div>
		<?php endif; ?>
    
    	<div class="grid-6 dc-credits" id="dc-credits">
            <div class="block">
            <?php
				include("copyright.php");
				include("credits.php");
			?>
            </div>
        </div>

	<?php else: ?>
    
        <?php if( $this->params->get('shaz3e')  == 1): ?>
        <div class="grid-12" style="text-align:center;">
        	<div class="block">
            	<div class="dc-clear"></div>
                <?php include("s3logo.php"); ?>
            </div>
        </div>
		<?php endif; ?>
    <?php endif; ?>
    
    </div>
</section>
<?php endif; ?>