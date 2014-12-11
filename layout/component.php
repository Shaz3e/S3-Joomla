<?php
    // restricted access
    defined('_JEXEC') or die;
	
function s3Component(){
?>
    <div id="page-content" class="block dc-page-content">
        <article>
            <jdoc:include type="message" />
            <jdoc:include type="component" />
        </article>
    </div>
<?php
} // s3Component() ends
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