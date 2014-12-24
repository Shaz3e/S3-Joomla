<?php
    // restricted access
    defined('_JEXEC') or die;
?>

<?php if($this->countModules('component') || $this->countModules('component-top')): ?>

	<jdoc:include type="modules" name="component" style="shaz3e" />
	<jdoc:include type="modules" name="component-top" style="shaz3e" />
    
<?php endif;

    if($this->countModules('component-1')){
        $components["component1"] = '<jdoc:include type="modules" name="component-1" style="shaz3e" />';
    }
    if($this->countModules('component-2')){
        $components["component2"] = '<jdoc:include type="modules" name="component-2" style="shaz3e" />';
    }
    if($this->countModules('component-3')){
        $components["component3"] = '<jdoc:include type="modules" name="component-3" style="shaz3e" />';
    }
    if($this->countModules('component-4')){
        $components["component4"] = '<jdoc:include type="modules" name="component-4" style="shaz3e" />';
    }
    if($this->countModules('component-5')){
        $components["component5"] = '<jdoc:include type="modules" name="component-5" style="shaz3e" />';
    }
    if($this->countModules('component-6')){
        $components["component6"] = '<jdoc:include type="modules" name="component-6" style="shaz3e" />';
    }
    if($this->countModules('component-7')){
        $components["component7"] = '<jdoc:include type="modules" name="component-7" style="shaz3e" />';
    }
    if($this->countModules('component-8')){
        $components["component8"] = '<jdoc:include type="modules" name="component-8" style="shaz3e" />';
    }
    if($this->countModules('component-9')){
        $components["component9"] = '<jdoc:include type="modules" name="component-9" style="shaz3e" />';
    }
    if($this->countModules('component-10')){
        $components["component10"] = '<jdoc:include type="modules" name="component-10" style="shaz3e" />';
    }
    if($this->countModules('component-11')){
        $components["component11"] = '<jdoc:include type="modules" name="component-11" style="shaz3e" />';
    }
    if($this->countModules('component-12')){
        $components["component12"] = '<jdoc:include type="modules" name="component-12" style="shaz3e" />';
    }
	
if(isset($components)){
    $result = count($components);
    foreach($components as $component => $name){


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


if($this->countModules('component-bottom')): ?>

	<jdoc:include type="modules" name="component-bottom" style="shaz3e" />

<?php endif; ?>