<?php
    // restricted access
    defined('_JEXEC') or die;
?>
<?php if($this->countModules('right')) :?>
<aside class="dc-right-sidebar">
	<div id="dc-right-sidebar">
    	<div class="dc-modules">
        	<div id="dc-modules">
            	<div class="dc-clear"></div>
                	<div class="dc-sidebar">
	                    <jdoc:include type="modules" name="right" style="s3_sidebar" />
                    </div>
				<div class="dc-clear"></div>
			</div>
		</div>
	</div>
</aside>
<?php endif; ?>