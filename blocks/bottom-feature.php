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

		/**
		 * Count Modules in a row
		 * 12+ Modules will be displayed according to int other wise depands the number of modules enabled
		 *
		 * @retun int
		 * @since S3 Framework 4.0
		 */			
		if( $this->params->get('bottomFeatureModuleCount') >= 12 ){
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
			echo '<div class="col-'.$this->params->get('bottomFeatureModuleCount').'">';
				echo $name;
			echo '</div>';
		}
    }
}

?>