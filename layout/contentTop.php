<?php
    // restricted access
    defined('_JEXEC') or die;
?>
<?php if($this->countModules('content-top') || 
		 $this->countModules('content-top-1') || 
		 $this->countModules('content-top-2') || 
		 $this->countModules('content-top-3') ||
		 $this->countModules('content-top-bottom')
		 ): ?>
<section class="dc-content-top" id="dc-content-top">

	<?php if($this->countModules('content-top')): ?>
	    <jdoc:include type="modules" name="content-top" style="shaz3e" />
    	<div class="dc-clear"></div>
    <?php endif; ?>
				<?php
                    if($this->countModules('content-top-1')){
                        $contentTops["content-top1"] = '<jdoc:include type="modules" name="content-top-1" style="shaz3e" />';
                    }
                    if($this->countModules('content-top-2')){
                        $contentTops["content-top2"] = '<jdoc:include type="modules" name="content-top-2" style="shaz3e" />';
                    }
                    if($this->countModules('content-top-3')){
                        $contentTops["content-top3"] = '<jdoc:include type="modules" name="content-top-3" style="shaz3e" />';
                    }
                if(isset($contentTops)){
                    $result = count($contentTops);
                    foreach($contentTops as $contentTop => $name){
                        if($result == 3){
                            echo '<div class="col-3">';
    	                        echo $name;
                            echo '</div>';
                        }
                        if($result == 2){
                            echo '<div class="col-2">';
	                            echo $name;
                            echo '</div>';
                        }
                        if($result == 1){
                            echo '<div class="col-1">';
                            	echo $name;
                            echo '</div>';
                        }
                    }
					// clearfix
					echo '<div class="dc-clear"></div>';
                }
                ?>
                

	<?php if($this->countModules('content-top-bottom')): ?>
    	<jdoc:include type="modules" name="content-top-bottom" style="shaz3e" />
    	<div class="dc-clear"></div>
	<?php endif; ?>

</section>
<?php endif; ?>