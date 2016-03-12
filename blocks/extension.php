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
		/**
		 * Count Modules in a row
		 * 12+ Modules will be displayed according to int other wise depands the number of modules enabled
		 *
		 * @retun int
		 * @since S3 Framework 4.0
		 */			
		if( $this->params->get('extensionModuleCount') >= 12 ){
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
			echo '<div class="col-'.$this->params->get('extensionModuleCount').'">';
				echo $name;
			echo '</div>';
		}
    }
}

?>