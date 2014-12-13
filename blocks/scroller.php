<?php
    // restricted access
    defined('_JEXEC') or die;
	
?>
<?php
    if($this->countModules('scroller-1')){
        $scrollers["scroller1"] = '<jdoc:include type="modules" name="scroller-1" style="shaz3e" />';
    }
    if($this->countModules('scroller-2')){
        $scrollers["scroller2"] = '<jdoc:include type="modules" name="scroller-2" style="shaz3e" />';
    }
    if($this->countModules('scroller-3')){
        $scrollers["scroller3"] = '<jdoc:include type="modules" name="scroller-3" style="shaz3e" />';
    }
    if($this->countModules('scroller-4')){
        $scrollers["scroller4"] = '<jdoc:include type="modules" name="scroller-4" style="shaz3e" />';
    }
    if($this->countModules('scroller-5')){
        $scrollers["scroller5"] = '<jdoc:include type="modules" name="scroller-5" style="shaz3e" />';
    }
    if($this->countModules('scroller-6')){
        $scrollers["scroller6"] = '<jdoc:include type="modules" name="scroller-6" style="shaz3e" />';
    }
    if($this->countModules('scroller-7')){
        $scrollers["scroller7"] = '<jdoc:include type="modules" name="scroller-7" style="shaz3e" />';
    }
    if($this->countModules('scroller-8')){
        $scrollers["scroller8"] = '<jdoc:include type="modules" name="scroller-8" style="shaz3e" />';
    }
    if($this->countModules('scroller-9')){
        $scrollers["scroller9"] = '<jdoc:include type="modules" name="scroller-9" style="shaz3e" />';
    }
    if($this->countModules('scroller-10')){
        $scrollers["scroller10"] = '<jdoc:include type="modules" name="scroller-10" style="shaz3e" />';
    }
    if($this->countModules('scroller-11')){
        $scrollers["scroller11"] = '<jdoc:include type="modules" name="scroller-11" style="shaz3e" />';
    }
    if($this->countModules('scroller-12')){
        $scrollers["scroller12"] = '<jdoc:include type="modules" name="scroller-12" style="shaz3e" />';
    }
	
if(isset($scrollers)){
    $result = count($scrollers);
    foreach($scrollers as $scroller => $name){


        if($result == 12){
            echo '<div class="col-12">';
	            echo $name;
            echo '</div>';
        }
        if($result == 11){
            echo '<div class="col-11">';
            	echo $name;
            echo '</div>';
        }
        if($result == 10){
            echo '<div class="col-10">';
        	    echo $name;
            echo '</div>';
        }
        if($result == 9){
            echo '<div class="col-9">';
    	        echo $name;
            echo '</div>';
        }
        if($result == 8){
            echo '<div class="col-8">';
	            echo $name;
            echo '</div>';
        }
        if($result == 7){
            echo '<div class="col-7">';
				echo $name;
            echo '</div>';
        }
        if($result == 6){
            echo '<div class="col-6">';
            	echo $name;
            echo '</div>';
        }
        if($result == 5){
            echo '<div class="col-5">';
            	echo $name;
            echo '</div>';
        }
        if($result == 4){
            echo '<div class="col-4">';
            	echo $name;
            echo '</div>';
        }
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
}

?>