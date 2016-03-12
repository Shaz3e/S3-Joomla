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
    if($this->countModules('bottom-1')){
        $bottoms["bottom1"] = '<jdoc:include type="modules" name="bottom-1" style="shaz3e" />';
    }
    if($this->countModules('bottom-2')){
        $bottoms["bottom2"] = '<jdoc:include type="modules" name="bottom-2" style="shaz3e" />';
    }
    if($this->countModules('bottom-3')){
        $bottoms["bottom3"] = '<jdoc:include type="modules" name="bottom-3" style="shaz3e" />';
    }
    if($this->countModules('bottom-4')){
        $bottoms["bottom4"] = '<jdoc:include type="modules" name="bottom-4" style="shaz3e" />';
    }
    if($this->countModules('bottom-5')){
        $bottoms["bottom5"] = '<jdoc:include type="modules" name="bottom-5" style="shaz3e" />';
    }
    if($this->countModules('bottom-6')){
        $bottoms["bottom6"] = '<jdoc:include type="modules" name="bottom-6" style="shaz3e" />';
    }
    if($this->countModules('bottom-7')){
        $bottoms["bottom7"] = '<jdoc:include type="modules" name="bottom-7" style="shaz3e" />';
    }
    if($this->countModules('bottom-8')){
        $bottoms["bottom8"] = '<jdoc:include type="modules" name="bottom-8" style="shaz3e" />';
    }
    if($this->countModules('bottom-9')){
        $bottoms["bottom9"] = '<jdoc:include type="modules" name="bottom-9" style="shaz3e" />';
    }
    if($this->countModules('bottom-10')){
        $bottoms["bottom10"] = '<jdoc:include type="modules" name="bottom-10" style="shaz3e" />';
    }
    if($this->countModules('bottom-11')){
        $bottoms["bottom11"] = '<jdoc:include type="modules" name="bottom-11" style="shaz3e" />';
    }
    if($this->countModules('bottom-12')){
        $bottoms["bottom12"] = '<jdoc:include type="modules" name="bottom-12" style="shaz3e" />';
    }
	
if(isset($bottoms)){
    $result = count($bottoms);
    foreach($bottoms as $bottom => $name){

		/**
		 * Count Modules in a row
		 * 12+ Modules will be displayed according to int other wise depands the number of modules enabled
		 *
		 * @retun int
		 * @since S3 Framework 4.0
		 */			
		if( $this->params->get('bottomModuleCount') >= 12 ){
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
		}else{
			echo '<div class="col-'.$this->params->get('bottomModuleCount').'">';
				echo $name;
			echo '</div>';
		}
    }
}

?>