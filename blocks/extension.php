<?php
    // restricted access
    defined('_JEXEC') or die;
	
?>
<?php
    if($this->countModules('extension-1')){
        $extensions["extension1"] = '<jdoc:include type="modules" name="extension-1" style="shaz3e" />';
    }
    if($this->countModules('extension-2')){
        $extensions["extension2"] = '<jdoc:include type="modules" name="extension-2" style="shaz3e" />';
    }
    if($this->countModules('extension-3')){
        $extensions["extension3"] = '<jdoc:include type="modules" name="extension-3" style="shaz3e" />';
    }
    if($this->countModules('extension-4')){
        $extensions["extension4"] = '<jdoc:include type="modules" name="extension-4" style="shaz3e" />';
    }
    if($this->countModules('extension-5')){
        $extensions["extension5"] = '<jdoc:include type="modules" name="extension-5" style="shaz3e" />';
    }
    if($this->countModules('extension-6')){
        $extensions["extension6"] = '<jdoc:include type="modules" name="extension-6" style="shaz3e" />';
    }
    if($this->countModules('extension-7')){
        $extensions["extension7"] = '<jdoc:include type="modules" name="extension-7" style="shaz3e" />';
    }
    if($this->countModules('extension-8')){
        $extensions["extension8"] = '<jdoc:include type="modules" name="extension-8" style="shaz3e" />';
    }
    if($this->countModules('extension-9')){
        $extensions["extension9"] = '<jdoc:include type="modules" name="extension-9" style="shaz3e" />';
    }
    if($this->countModules('extension-10')){
        $extensions["extension10"] = '<jdoc:include type="modules" name="extension-10" style="shaz3e" />';
    }
    if($this->countModules('extension-11')){
        $extensions["extension11"] = '<jdoc:include type="modules" name="extension-11" style="shaz3e" />';
    }
    if($this->countModules('extension-12')){
        $extensions["extension12"] = '<jdoc:include type="modules" name="extension-12" style="shaz3e" />';
    }
	
if(isset($extensions)){
    $result = count($extensions);
    foreach($extensions as $extension => $name){


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