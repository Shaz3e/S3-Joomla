<?php
	/**
	 * Header Styles
	 * File Name: header-3.php
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
                    <?php if( $headerModules ): ?>
                    <div class="s3-header-<?php echo $this->params->get('header_style'); ?>">
                        <div class="dc-header-boxes">
                        	<div class="grid-6">
								<?php
									include_once("params/phone.php");
									include_once("params/email.php");
                                ?>
                            </div>
                            <div class="grid-6">
								<?php
                                    include_once("params/social.php");
                                    include_once("params/search.php");
                                ?>
                            </div>
                            <div class="dc-clear"></div>
                        </div>
                    </div>
	                    <?php include_once("params/calltoaction.php");?>
                    <?php endif; ?>
                    <div class="dc-menu">
                        <?php include_once("params/menu.php"); ?>
                    </div>
				</div>
            </div>
        </div><?php // .row ?>
    </section>
</div>