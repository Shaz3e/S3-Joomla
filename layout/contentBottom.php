<?php if($this->countModules('content-bottom-1') || $this->countModules('content-bottom-2') || $this->countModules('content-bottom-3')): ?>
<section class="dc-content-bottom">
	<div id="dc-content-bottom">
    	<div id="dc-modules">
        	<div class="dc-clear"></div>
				<?php
                    if($this->countModules('content-bottom-1')){
                        $contentBottoms["mod1"] = '<jdoc:include type="modules" name="content-bottom-1" style="shaz3e" />';
                    }
                    if($this->countModules('content-bottom-2')){
                        $contentBottoms["mod2"] = '<jdoc:include type="modules" name="content-bottom-2" style="shaz3e" />';
                    }
                    if($this->countModules('content-bottom-3')){
                        $contentBottoms["mod3"] = '<jdoc:include type="modules" name="content-bottom-3" style="shaz3e" />';
                    }
                if(isset($contentBottoms)){
                    $result = count($contentBottoms);
                    foreach($contentBottoms as $contentBottom => $name){
                
                        if($result == 3){
                            echo '<div class="dc-modules3">';
                            echo $name;
                            echo '</div>';
                        }
                        if($result == 2){
                            echo '<div class="dc-modules2">';
                            echo $name;
                            echo '</div>';
                        }
                        if($result == 1){
                            echo '<div class="dc-modules1">';
                            echo $name;
                            echo '</div>';
                        }
                    }
                }
                ?>
			<div class="dc-clear"></div>
		</div>
	</div>
</section>
<?php endif; ?>