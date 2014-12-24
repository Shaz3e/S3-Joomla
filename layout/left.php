<?php
    // restricted access
    defined('_JEXEC') or die;
?>
<?php if($this->countModules('left')): ?>
<aside class="grid-3 dc-left-sidebar dc-clear">
	<div id="dc-left-sidebar">
    	<div class="dc-sidebar">
        	<jdoc:include type="modules" name="left" style="s3_sidebar" />
        </div>
	</div>
</aside>
<?php endif; ?>