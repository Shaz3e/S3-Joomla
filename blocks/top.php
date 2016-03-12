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
    if($this->countModules('top-1')){
        $tops["top1"] = '<jdoc:include type="modules" name="top-1" style="shaz3e" />';
    }
    if($this->countModules('top-2')){
        $tops["top2"] = '<jdoc:include type="modules" name="top-2" style="shaz3e" />';
    }
    if($this->countModules('top-3')){
        $tops["top3"] = '<jdoc:include type="modules" name="top-3" style="shaz3e" />';
    }
    if($this->countModules('top-4')){
        $tops["top4"] = '<jdoc:include type="modules" name="top-4" style="shaz3e" />';
    }
    if($this->countModules('top-5')){
        $tops["top5"] = '<jdoc:include type="modules" name="top-5" style="shaz3e" />';
    }
    if($this->countModules('top-6')){
        $tops["top6"] = '<jdoc:include type="modules" name="top-6" style="shaz3e" />';
    }
    if($this->countModules('top-7')){
        $tops["top7"] = '<jdoc:include type="modules" name="top-7" style="shaz3e" />';
    }
    if($this->countModules('top-8')){
        $tops["top8"] = '<jdoc:include type="modules" name="top-8" style="shaz3e" />';
    }
    if($this->countModules('top-9')){
        $tops["top9"] = '<jdoc:include type="modules" name="top-9" style="shaz3e" />';
    }
    if($this->countModules('top-10')){
        $tops["top10"] = '<jdoc:include type="modules" name="top-10" style="shaz3e" />';
    }
    if($this->countModules('top-11')){
        $tops["top11"] = '<jdoc:include type="modules" name="top-11" style="shaz3e" />';
    }
    if($this->countModules('top-12')){
        $tops["top12"] = '<jdoc:include type="modules" name="top-12" style="shaz3e" />';
    }
	
if(isset($tops)){
    $result = count($tops);
    foreach($tops as $top => $name){
		/**
		 * Count Modules in a row
		 * 12+ Modules will be displayed according to int other wise depands the number of modules enabled
		 *
		 * @retun int
		 * @since S3 Framework 4.0
		 */			
		if( $this->params->get('topModuleCount') >= 12 ){
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
			echo '<div class="col-'.$this->params->get('topModuleCount').'">';
				echo $name;
			echo '</div>';
		}
    }
}

?>