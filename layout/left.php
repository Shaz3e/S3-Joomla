<?php if($this->countModules('left')): ?>
<aside class="dc-left-sidebar">
	<div id="dc-left-sidebar">
		<div class="dc-modules">
			<div id="dc-modules">
				<div class="dc-clear"></div>
					<?php
                        if($this->countModules('left')){
                            $leftModules["left"] = '<jdoc:include type="modules" name="left" style="s3_sidebar" />';
                        }
						
						if(isset($leftModules)){
							$result = count($leftModules);
							foreach($leftModules as $leftModule => $name){
								if($result == 1){
									echo '<div class="dc-sidebar">';
										echo $name;
									echo '</div>';
								}
							}
						}
                    ?>
				<div class="dc-clear"></div>
			</div>
		</div>
	</div>
</aside>
<?php endif; ?>