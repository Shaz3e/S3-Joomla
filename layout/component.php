<?php
    // restricted access
    defined('_JEXEC') or die;
	
function s3Component(){ ?>

    <div id="page-content" class="block dc-page-content">
        <article>
            <jdoc:include type="message" />
            <jdoc:include type="component" />
        </article>
    </div>
<?php
} // s3Component() ends

/**
 * hide component area but show left/right sidebar when component modules are enabled
 * showFrontPage = 0 for front page modules still be enabled!
 * 
 * @params int
 * @since S3 Framework 3.3
 */
if($componentModules || $gridcomponentModules):
	// column
	include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/component.php");
	
	// grid
	include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/grid-component.php");

else:

	/**
	 * Show or Hide Front Page Article on Main Page if Yes is Selected please Show main Body
	 *
	 * @params int (showFrontPage)
	 * @since S3 Framework 1.0
	 */
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
endif;
?>