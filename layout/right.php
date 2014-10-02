<?php if($this->countModules('right')) :?>
<aside class="dc-right-sidebar">
	<div id="dc-right-sidebar">
    	<div class="dc-modules">
        	<div id="dc-modules">
            	<div class="dc-clear"></div>
					<?php
                        if($this->countModules('right')){
                            $rightModules["right"] = '<jdoc:include type="modules" name="right" style="s3_sidebar" />';
                        }
						
						if(isset($rightModules)){
							$result = count($rightModules);
							foreach($rightModules as $rightModule => $name){
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