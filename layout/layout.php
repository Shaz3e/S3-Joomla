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
	
	$app = JFactory::getApplication();
	
	if ($app->isAdmin()) return;
	
		//Added support to hide component based on selected menu in template manager
        if (version_compare(JVERSION, '1.6.0', 'ge')) {
            $hideComponent = $this->params->get('hideComponent',array());

            $Itemid = JRequest::getVar('Itemid');
            if(in_array($Itemid,$hideComponent)){
                return;
            }else{ ?>
                <section class="dc-container dc-clear" id="container">
                	<div class="<?php echo( $this->params->get('fluidContainer') == 1 ? 'container-fluid' : 'row' ); ?>">
					<?php
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
                    ?>
                	</div>
                </section>
            <?php } // if(in_array($Itemid,$hideComponent)){
        } // if (version_compare(JVERSION, '1.6.0', 'ge')) {
?>

