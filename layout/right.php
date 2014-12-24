<?php
    // restricted access
    defined('_JEXEC') or die;
?>
<?php if($this->countModules('right')) :?>
<aside class="grid-3 dc-right-sidebar dc-clear">
	<div id="dc-right-sidebar">
    	<div class="dc-sidebar">
	        <jdoc:include type="modules" name="right" style="s3_sidebar" />
        </div>
	</div>
</aside>
<?php endif; ?>