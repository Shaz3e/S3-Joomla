<?php
// restricted access
defined('_JEXEC') or die;

/**
 * Site Logo
 * @param string
 * @since S3 Framework 1.0
 */
$logoName = $this->params->get('logo');
if($logoName){
	echo '<div class="dc-logo">';
		echo '<a href="'.$this->baseurl.'" title="'.$sitetitle.'">';
			echo '<img src="'. JURI::root() . $logoName .'" alt="'. $sitetitle .'">';
		echo '</a>';
	echo '</div>';
}else{
	echo '<div class="dc-logo">';
		echo '<a href="'.$this->baseurl.'" title="'.$sitetitle.'">';
			echo '<img src="'.$dcTemplatePath.'/themes/images/logo.png'.'" alt="'.$sitetitle.'">';
		echo '</a>';
	echo '</div>';
}
?>