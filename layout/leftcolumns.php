<?php
    // restricted access
    defined('_JEXEC') or die;
?>
<section class="dc-container">
<div class="dc-clear"></div>
	<div id="dc-container">
    <div class="dc-clear"></div>

		<?php require_once("left.php"); ?>
        
        <section class="dc-componentLeft">
			<?php
				// content top modules
				require_once("contentTop.php");
				
				// main component area
				require_once("component.php");
				
				// content bottom modules
				require_once("contentBottom.php");
			?>
        </section>
        
	<div class="dc-clear"></div>
    </div>
<div class="dc-clear"></div>
</section>
<div class="dc-clear"></div><!--clearfix -->