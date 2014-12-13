<?php
    // restricted access
    defined('_JEXEC') or die;
?>
<?php
    if($this->countModules('bottom-feature-1')){
        $bottomFeatures["bottom-feature1"] = '<jdoc:include type="modules" name="bottom-feature-1" style="shaz3e" />';
    }
    if($this->countModules('bottom-feature-2')){
        $bottomFeatures["bottom-feature2"] = '<jdoc:include type="modules" name="bottom-feature-2" style="shaz3e" />';
    }
    if($this->countModules('bottom-feature-3')){
        $bottomFeatures["bottom-feature3"] = '<jdoc:include type="modules" name="bottom-feature-3" style="shaz3e" />';
    }
    if($this->countModules('bottom-feature-4')){
        $bottomFeatures["bottom-feature4"] = '<jdoc:include type="modules" name="bottom-feature-4" style="shaz3e" />';
    }
    if($this->countModules('bottom-feature-5')){
        $bottomFeatures["bottom-feature5"] = '<jdoc:include type="modules" name="bottom-feature-5" style="shaz3e" />';
    }
    if($this->countModules('bottom-feature-6')){
        $bottomFeatures["bottom-feature6"] = '<jdoc:include type="modules" name="bottom-feature-6" style="shaz3e" />';
    }
    if($this->countModules('bottom-feature-7')){
        $bottomFeatures["bottom-feature1"] = '<jdoc:include type="modules" name="bottom-feature-7" style="shaz3e" />';
    }
    if($this->countModules('bottom-feature-8')){
        $bottomFeatures["bottom-feature2"] = '<jdoc:include type="modules" name="bottom-feature-8" style="shaz3e" />';
    }
    if($this->countModules('bottom-feature-9')){
        $bottomFeatures["bottom-feature3"] = '<jdoc:include type="modules" name="bottom-feature-9" style="shaz3e" />';
    }
    if($this->countModules('bottom-feature-10')){
        $bottomFeatures["bottom-feature4"] = '<jdoc:include type="modules" name="bottom-feature-10" style="shaz3e" />';
    }
    if($this->countModules('bottom-feature-11')){
        $bottomFeatures["bottom-feature5"] = '<jdoc:include type="modules" name="bottom-feature-11" style="shaz3e" />';
    }
    if($this->countModules('bottom-feature-12')){
        $bottomFeatures["bottom-feature6"] = '<jdoc:include type="modules" name="bottom-feature-12" style="shaz3e" />';
    }

if(isset($bottomFeatures)){
    $result = count($bottomFeatures);
    foreach($bottomFeatures as $bottomFeature => $name){

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