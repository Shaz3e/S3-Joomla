<?php
	/**
	 * Header Styles - Small Header RTLA Menu LTRA
	 * File Name: header-19.php
	 * @since S3 Framework 4.0
	 */

// restricted access
defined('_JEXEC') or die;
?>
<div class="dc-fixed-header">
    <section class="dc-header dc-header-<?php echo $this->params->get('header_style'); ?> dc-clear" id="dc-header">
        <div class="<?php echo( $this->params->get('fluidContainer') == 1 ? 'container-fluid' : 'row' ); ?>">
            <div class="grid-<?php echo $this->params->get('logoGridClass'); ?>">
                <div class="block">
                    <div class="dc-logo">
                    	<?php include_once('params/logo.php'); ?>
                    </div>
                </div>
            </div><?php // .grid-3 ?>
            
            <div class="grid<?php echo $this->params->get('logoGridClass') - 12; ?>">
            	<div class="block">
                    <div class="dc-header-boxes">
                    	<?php if( $headerModules ): ?>
						<?php
							include_once("params/phone.php");
							include_once("params/email.php");
							include_once("params/social.php");
							include_once("params/search.php");
							include_once("params/calltoaction.php");
						?>
                        <div class="dc-clear"></div>
                        <?php endif; ?>
                        <div class="dc-menu">
                        	<?php include_once("params/menu.php"); ?>
                        </div>
                    </div>
				</div>
            </div>
        </div><?php // .row ?>
    </section>
</div>