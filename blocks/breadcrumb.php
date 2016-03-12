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
    if($this->countModules('breadcrumb-1')){
        $breadcrumbs["breadcrumb1"] = '<jdoc:include type="modules" name="breadcrumb-1" style="shaz3e" />';
    }
    if($this->countModules('breadcrumb-2')){
        $breadcrumbs["breadcrumb2"] = '<jdoc:include type="modules" name="breadcrumb-2" style="shaz3e" />';
    }
    if($this->countModules('breadcrumb-3')){
        $breadcrumbs["breadcrumb3"] = '<jdoc:include type="modules" name="breadcrumb-3" style="shaz3e" />';
    }
    if($this->countModules('breadcrumb-4')){
        $breadcrumbs["breadcrumb4"] = '<jdoc:include type="modules" name="breadcrumb-4" style="shaz3e" />';
    }
    if($this->countModules('breadcrumb-5')){
        $breadcrumbs["breadcrumb5"] = '<jdoc:include type="modules" name="breadcrumb-5" style="shaz3e" />';
    }
    if($this->countModules('breadcrumb-6')){
        $breadcrumbs["breadcrumb6"] = '<jdoc:include type="modules" name="breadcrumb-6" style="shaz3e" />';
    }
    if($this->countModules('breadcrumb-7')){
        $breadcrumbs["breadcrumb7"] = '<jdoc:include type="modules" name="breadcrumb-7" style="shaz3e" />';
    }
    if($this->countModules('breadcrumb-8')){
        $breadcrumbs["breadcrumb8"] = '<jdoc:include type="modules" name="breadcrumb-8" style="shaz3e" />';
    }
    if($this->countModules('breadcrumb-9')){
        $breadcrumbs["breadcrumb9"] = '<jdoc:include type="modules" name="breadcrumb-9" style="shaz3e" />';
    }
    if($this->countModules('breadcrumb-10')){
        $breadcrumbs["breadcrumb10"] = '<jdoc:include type="modules" name="breadcrumb-10" style="shaz3e" />';
    }
    if($this->countModules('breadcrumb-11')){
        $breadcrumbs["breadcrumb11"] = '<jdoc:include type="modules" name="breadcrumb-11" style="shaz3e" />';
    }
    if($this->countModules('breadcrumb-12')){
        $breadcrumbs["breadcrumb12"] = '<jdoc:include type="modules" name="breadcrumb-12" style="shaz3e" />';
    }
	
if(isset($breadcrumbs)){
    $result = count($breadcrumbs);
    foreach($breadcrumbs as $breadcrumb => $name){
		/**
		 * Count Modules in a row
		 * 12+ Modules will be displayed according to int other wise depands the number of modules enabled
		 *
		 * @retun int
		 * @since S3 Framework 4.0
		 */			
		if( $this->params->get('moduleCount') >= 12 ){
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
			echo '<div class="col-'.$this->params->get('moduleCount').'">';
				echo $name;
			echo '</div>';
		}
    }
}

?>