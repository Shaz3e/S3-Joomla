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
    if($this->countModules('footer-1')){
        $footers["footer1"] = '<jdoc:include type="modules" name="footer-1" style="shaz3e" />';
    }
    if($this->countModules('footer-2')){
        $footers["footer2"] = '<jdoc:include type="modules" name="footer-2" style="shaz3e" />';
    }
    if($this->countModules('footer-3')){
        $footers["footer3"] = '<jdoc:include type="modules" name="footer-3" style="shaz3e" />';
    }
    if($this->countModules('footer-4')){
        $footers["footer4"] = '<jdoc:include type="modules" name="footer-4" style="shaz3e" />';
    }
    if($this->countModules('footer-5')){
        $footers["footer5"] = '<jdoc:include type="modules" name="footer-5" style="shaz3e" />';
    }
    if($this->countModules('footer-6')){
        $footers["footer6"] = '<jdoc:include type="modules" name="footer-6" style="shaz3e" />';
    }
    if($this->countModules('footer-7')){
        $footers["footer7"] = '<jdoc:include type="modules" name="footer-7" style="shaz3e" />';
    }
    if($this->countModules('footer-8')){
        $footers["footer8"] = '<jdoc:include type="modules" name="footer-8" style="shaz3e" />';
    }
    if($this->countModules('footer-9')){
        $footers["footer9"] = '<jdoc:include type="modules" name="footer-9" style="shaz3e" />';
    }
    if($this->countModules('footer-10')){
        $footers["footer10"] = '<jdoc:include type="modules" name="footer-10" style="shaz3e" />';
    }
    if($this->countModules('footer-11')){
        $footers["footer11"] = '<jdoc:include type="modules" name="footer-11" style="shaz3e" />';
    }
    if($this->countModules('footer-12')){
        $footers["footer12"] = '<jdoc:include type="modules" name="footer-12" style="shaz3e" />';
    }
	
if(isset($footers)){
    $result = count($footers);
    foreach($footers as $footer => $name){


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