<?php
	/**
	 * Header Styles - Default
	 * File Name: header-0.php
	 * @since S3 Framework 4.0
	 */

// restricted access
defined('_JEXEC') or die;
?>
<div class="dc-fixed-header">
    <section class="dc-header dc-header-<?php echo $this->params->get('header_style'); ?> dc-clear" id="dc-header">
        <div class="row">
            <div class="grid-<?php echo $this->params->get('logoGridClass'); ?>">
                <div class="block">
                    <div class="dc-logo">
                    	<?php include_once('params/logo.php'); ?>
                    </div>
                </div>
            </div><?php // .grid-3 ?>
            
            <?php if( $headerModules ): ?>
            <div class="grid<?php echo $this->params->get('logoGridClass') - 12; ?>">
            	<div class="block">
                    <div class="dc-header-boxes">
						<?php
							include_once("params/phone.php");
							include_once("params/email.php");
							include_once("params/social.php");
							include_once("params/search.php");
						?>
                    </div>
                    <?php include_once("params/calltoaction.php");?>
				</div>
            </div>
            <?php endif; ?>
        </div><?php // .row ?>
        
        <div class="row">
        	<div class="col-1">
                <div class="block">
					<?php
                        include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/menu.php"); 
                        include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/grid-menu.php");
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>