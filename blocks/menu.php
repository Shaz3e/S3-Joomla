<?php
    // restricted access
    defined('_JEXEC') or die;
	
?>
<?php
    if($this->countModules('menu-1')){
        $menus["menu1"] = '<jdoc:include type="modules" name="menu-1" style="shaz3e" />';
    }
    if($this->countModules('menu-2')){
        $menus["menu2"] = '<jdoc:include type="modules" name="menu-2" style="shaz3e" />';
    }
    if($this->countModules('menu-3')){
        $menus["menu3"] = '<jdoc:include type="modules" name="menu-3" style="shaz3e" />';
    }
    if($this->countModules('menu-4')){
        $menus["menu4"] = '<jdoc:include type="modules" name="menu-4" style="shaz3e" />';
    }
    if($this->countModules('menu-5')){
        $menus["menu5"] = '<jdoc:include type="modules" name="menu-5" style="shaz3e" />';
    }
    if($this->countModules('menu-6')){
        $menus["menu6"] = '<jdoc:include type="modules" name="menu-6" style="shaz3e" />';
    }
    if($this->countModules('menu-7')){
        $menus["menu7"] = '<jdoc:include type="modules" name="menu-7" style="shaz3e" />';
    }
    if($this->countModules('menu-8')){
        $menus["menu8"] = '<jdoc:include type="modules" name="menu-8" style="shaz3e" />';
    }
    if($this->countModules('menu-9')){
        $menus["menu9"] = '<jdoc:include type="modules" name="menu-9" style="shaz3e" />';
    }
    if($this->countModules('menu-10')){
        $menus["menu10"] = '<jdoc:include type="modules" name="menu-10" style="shaz3e" />';
    }
    if($this->countModules('menu-11')){
        $menus["menu11"] = '<jdoc:include type="modules" name="menu-11" style="shaz3e" />';
    }
    if($this->countModules('menu-12')){
        $menus["menu12"] = '<jdoc:include type="modules" name="menu-12" style="shaz3e" />';
    }
	
if(isset($menus)){
    $result = count($menus);
    foreach($menus as $menu => $name){


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