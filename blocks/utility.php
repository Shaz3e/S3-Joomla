<?php
/*======================================================================*\
|| #################################################################### ||
|| # Package - Joomla Template based on Shaz3e S3 Framework             ||
|| # Copyright (C) 2010  shaz3e.com. All Rights Reserved.               ||
|| # Authors - Shahrukh A. Khan (Shaz3e) and DiligentCreators           ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of shaz3e.com                         ||
|| # for more information visit http://www.shaz3e.com/                  ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses websites - http://www.shaz3e.com        ||
|| # A project of DiligentCreators - Construcing Ideas...               ||
|| #################################################################### ||
\*======================================================================*/

// restricted access
defined('_JEXEC') or die;
?>
<?php
    if($this->countModules('utility-1')){
        $utilitys["utility1"] = '<jdoc:include type="modules" name="utility-1" style="shaz3e" />';
    }
    if($this->countModules('utility-2')){
        $utilitys["utility2"] = '<jdoc:include type="modules" name="utility-2" style="shaz3e" />';
    }
    if($this->countModules('utility-3')){
        $utilitys["utility3"] = '<jdoc:include type="modules" name="utility-3" style="shaz3e" />';
    }
    if($this->countModules('utility-4')){
        $utilitys["utility4"] = '<jdoc:include type="modules" name="utility-4" style="shaz3e" />';
    }
    if($this->countModules('utility-5')){
        $utilitys["utility5"] = '<jdoc:include type="modules" name="utility-5" style="shaz3e" />';
    }
    if($this->countModules('utility-6')){
        $utilitys["utility6"] = '<jdoc:include type="modules" name="utility-6" style="shaz3e" />';
    }
    if($this->countModules('utility-7')){
        $utilitys["utility7"] = '<jdoc:include type="modules" name="utility-7" style="shaz3e" />';
    }
    if($this->countModules('utility-8')){
        $utilitys["utility8"] = '<jdoc:include type="modules" name="utility-8" style="shaz3e" />';
    }
    if($this->countModules('utility-9')){
        $utilitys["utility9"] = '<jdoc:include type="modules" name="utility-9" style="shaz3e" />';
    }
    if($this->countModules('utility-10')){
        $utilitys["utility10"] = '<jdoc:include type="modules" name="utility-10" style="shaz3e" />';
    }
    if($this->countModules('utility-11')){
        $utilitys["utility11"] = '<jdoc:include type="modules" name="utility-11" style="shaz3e" />';
    }
    if($this->countModules('utility-12')){
        $utilitys["utility12"] = '<jdoc:include type="modules" name="utility-12" style="shaz3e" />';
    }
	
if(isset($utilitys)){
    $result = count($utilitys);
    foreach($utilitys as $utility => $name){


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