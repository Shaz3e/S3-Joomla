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
    if($this->countModules('showcase-1')){
        $showcases["showcase1"] = '<jdoc:include type="modules" name="showcase-1" style="shaz3e" />';
    }
    if($this->countModules('showcase-2')){
        $showcases["showcase2"] = '<jdoc:include type="modules" name="showcase-2" style="shaz3e" />';
    }
    if($this->countModules('showcase-3')){
        $showcases["showcase3"] = '<jdoc:include type="modules" name="showcase-3" style="shaz3e" />';
    }
    if($this->countModules('showcase-4')){
        $showcases["showcase4"] = '<jdoc:include type="modules" name="showcase-4" style="shaz3e" />';
    }
    if($this->countModules('showcase-5')){
        $showcases["showcase5"] = '<jdoc:include type="modules" name="showcase-5" style="shaz3e" />';
    }
    if($this->countModules('showcase-6')){
        $showcases["showcase6"] = '<jdoc:include type="modules" name="showcase-6" style="shaz3e" />';
    }
    if($this->countModules('showcase-7')){
        $showcases["showcase7"] = '<jdoc:include type="modules" name="showcase-7" style="shaz3e" />';
    }
    if($this->countModules('showcase-8')){
        $showcases["showcase8"] = '<jdoc:include type="modules" name="showcase-8" style="shaz3e" />';
    }
    if($this->countModules('showcase-9')){
        $showcases["showcase9"] = '<jdoc:include type="modules" name="showcase-9" style="shaz3e" />';
    }
    if($this->countModules('showcase-10')){
        $showcases["showcase10"] = '<jdoc:include type="modules" name="showcase-10" style="shaz3e" />';
    }
    if($this->countModules('showcase-11')){
        $showcases["showcase11"] = '<jdoc:include type="modules" name="showcase-11" style="shaz3e" />';
    }
    if($this->countModules('showcase-12')){
        $showcases["showcase12"] = '<jdoc:include type="modules" name="showcase-12" style="shaz3e" />';
    }
	
if(isset($showcases)){
    $result = count($showcases);
    foreach($showcases as $showcase => $name){


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