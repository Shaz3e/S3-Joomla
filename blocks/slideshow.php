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
    if($this->countModules('slideshow-1')){
        $slideshows["slideshow1"] = '<jdoc:include type="modules" name="slideshow-1" style="shaz3e" />';
    }
    if($this->countModules('slideshow-2')){
        $slideshows["slideshow2"] = '<jdoc:include type="modules" name="slideshow-2" style="shaz3e" />';
    }
    if($this->countModules('slideshow-3')){
        $slideshows["slideshow3"] = '<jdoc:include type="modules" name="slideshow-3" style="shaz3e" />';
    }
    if($this->countModules('slideshow-4')){
        $slideshows["slideshow4"] = '<jdoc:include type="modules" name="slideshow-4" style="shaz3e" />';
    }
    if($this->countModules('slideshow-5')){
        $slideshows["slideshow5"] = '<jdoc:include type="modules" name="slideshow-5" style="shaz3e" />';
    }
    if($this->countModules('slideshow-6')){
        $slideshows["slideshow6"] = '<jdoc:include type="modules" name="slideshow-6" style="shaz3e" />';
    }
    if($this->countModules('slideshow-7')){
        $slideshows["slideshow7"] = '<jdoc:include type="modules" name="slideshow-7" style="shaz3e" />';
    }
    if($this->countModules('slideshow-8')){
        $slideshows["slideshow8"] = '<jdoc:include type="modules" name="slideshow-8" style="shaz3e" />';
    }
    if($this->countModules('slideshow-9')){
        $slideshows["slideshow9"] = '<jdoc:include type="modules" name="slideshow-9" style="shaz3e" />';
    }
    if($this->countModules('slideshow-10')){
        $slideshows["slideshow10"] = '<jdoc:include type="modules" name="slideshow-10" style="shaz3e" />';
    }
    if($this->countModules('slideshow-11')){
        $slideshows["slideshow11"] = '<jdoc:include type="modules" name="slideshow-11" style="shaz3e" />';
    }
    if($this->countModules('slideshow-12')){
        $slideshows["slideshow12"] = '<jdoc:include type="modules" name="slideshow-12" style="shaz3e" />';
    }
	
if(isset($slideshows)){
    $result = count($slideshows);
    foreach($slideshows as $slideshow => $name){


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