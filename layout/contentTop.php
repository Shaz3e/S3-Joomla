<?php if($this->countModules('content-top-1') || $this->countModules('content-top-2') || $this->countModules('content-top-3')): ?>
<section class="dc-content-top">
	<div id="dc-content-top">
		<div id="dc-modules">
			<div class="dc-clear"></div>
				<?php
                    if($this->countModules('content-top-1')){
                        $contentTops["mod1"] = '<jdoc:include type="modules" name="content-top-1" style="shaz3e" />';
                    }
                    if($this->countModules('content-top-2')){
                        $contentTops["mod2"] = '<jdoc:include type="modules" name="content-top-2" style="shaz3e" />';
                    }
                    if($this->countModules('content-top-3')){
                        $contentTops["mod3"] = '<jdoc:include type="modules" name="content-top-3" style="shaz3e" />';
                    }
                if(isset($contentTops)){
                    $result = count($contentTops);
                    foreach($contentTops as $contentTop => $name){
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