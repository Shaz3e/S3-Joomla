<?php
    // restricted access
    defined('_JEXEC') or die;
?>

<?php
	$app = JFactory::getApplication();
	$menu = $app->getMenu();
	$lang = JFactory::getLanguage();
	if ($menu->getActive() == $menu->getDefault($lang->getTag())) {
		if($this->params->get('showFrontPage')){
			s3Component();
		}
	}else{
		s3Component();
	}

?>