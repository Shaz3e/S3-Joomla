<?php if($this->countModules('left')): ?>
<aside class="dc-left-sidebar">
	<div id="dc-left-sidebar">
		<div class="dc-modules">
			<div id="dc-modules">
				<div class="dc-clear"></div>
	                <div class="dc-sidebar">
						<jdoc:include type="modules" name="left" style="s3_sidebar" />
					</div>
                <div class="dc-clear"></div>
			</div>
		</div>
	</div>
</aside>
<?php endif; ?>