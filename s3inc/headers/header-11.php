<?php
	/**
	 * Header Styles - Center 1
	 * File Name: header-11.php
	 * @since S3 Framework 4.0
	 */

// restricted access
defined('_JEXEC') or die;
?>
<div class="dc-fixed-header">
    <section class="dc-header dc-header-<?php echo $this->params->get('header_style'); ?> dc-clear" id="dc-header">
        <?php if( $headerModules ): ?>
        <div class="s3-header-<?php echo $this->params->get('header_style'); ?>">
            <div class="<?php echo( $this->params->get('fluidContainer') == 1 ? 'container-fluid' : 'row' ); ?>">
            	<div class="grid-12">
                	<div class="block">
                        <div class="dc-header-boxes">
                            <?php 
								include_once("params/phone.php");
								include_once("params/email.php");
								include_once("params/search.php");
								include_once("params/social.php");
							?>
                        </div>
    				</div>
    			</div>
            </div>
        </div>
        <?php endif; ?>

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
                	<?php include_once("params/calltoaction.php");?>
                    <div class="dc-menu">
                    	<?php include_once("params/menu.php"); ?>
                    </div>
				</div>
            </div>
        </div><?php // .row ?>
    </section>
</div>