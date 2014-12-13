<?php
    // restricted access
    defined('_JEXEC') or die;
	
?>
<?php
    if($this->countModules('feature-1')){
        $features["feature1"] = '<jdoc:include type="modules" name="feature-1" style="shaz3e" />';
    }
    if($this->countModules('feature-2')){
        $features["feature2"] = '<jdoc:include type="modules" name="feature-2" style="shaz3e" />';
    }
    if($this->countModules('feature-3')){
        $features["feature3"] = '<jdoc:include type="modules" name="feature-3" style="shaz3e" />';
    }
    if($this->countModules('feature-4')){
        $features["feature4"] = '<jdoc:include type="modules" name="feature-4" style="shaz3e" />';
    }
    if($this->countModules('feature-5')){
        $features["feature5"] = '<jdoc:include type="modules" name="feature-5" style="shaz3e" />';
    }
    if($this->countModules('feature-6')){
        $features["feature6"] = '<jdoc:include type="modules" name="feature-6" style="shaz3e" />';
    }
    if($this->countModules('feature-7')){
        $features["feature7"] = '<jdoc:include type="modules" name="feature-7" style="shaz3e" />';
    }
    if($this->countModules('feature-8')){
        $features["feature8"] = '<jdoc:include type="modules" name="feature-8" style="shaz3e" />';
    }
    if($this->countModules('feature-9')){
        $features["feature9"] = '<jdoc:include type="modules" name="feature-9" style="shaz3e" />';
    }
    if($this->countModules('feature-10')){
        $features["feature10"] = '<jdoc:include type="modules" name="feature-10" style="shaz3e" />';
    }
    if($this->countModules('feature-11')){
        $features["feature11"] = '<jdoc:include type="modules" name="feature-11" style="shaz3e" />';
    }
    if($this->countModules('feature-12')){
        $features["feature12"] = '<jdoc:include type="modules" name="feature-12" style="shaz3e" />';
    }
	
if(isset($features)){
    $result = count($features);
    foreach($features as $feature => $name){


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