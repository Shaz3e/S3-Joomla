<?php
    // restricted access
    defined('_JEXEC') or die;
?>
<?php
        $app = JFactory::getApplication();

        if ($app->isAdmin()) return;

        //Added support to show slnotificationbar based on menu items for joomla version more than 1.6
        if (version_compare(JVERSION, '1.6.0', 'ge')) {
            $hideComponent = $this->params->get('hideComponent',array());

            $Itemid = JRequest::getVar('Itemid');
            if(in_array($Itemid,$hideComponent)){
                return;
            }else{
				// Left Sidebar
				$left = ($this->countModules('left'));

				// Right Sidebar
				$right = ($this->countModules('right'));

				// 3columns
				if($left && $right):
					require_once("3columns.php");

				// left and component 2 columns
				elseif($left && !$right):
					require_once("leftcolumns.php");   

				// right and component 2 columns
				elseif($right && !$left):
					require_once("rightcolumns.php");

				// component 1 columns
				else:
					require_once("fullpage.php");
				endif;
            }
        }

?>