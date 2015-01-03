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
<?php if($this->countModules('content-bottom') || 
		 $this->countModules('content-bottom-1') || 
		 $this->countModules('content-bottom-2') || 
		 $this->countModules('content-bottom-3') ||
		 $this->countModules('content-bottom-bottom')
		 ): ?>
<section class="dc-content-bottom" id="dc-content-bottom">

	<?php if($this->countModules('content-bottom')): ?>
	    <jdoc:include type="modules" name="content-bottom" style="shaz3e" />
    	<div class="dc-clear"></div>
    <?php endif; ?>
				<?php
                    if($this->countModules('content-bottom-1')){
                        $contentbottoms["content-bottom1"] = '<jdoc:include type="modules" name="content-bottom-1" style="shaz3e" />';
                    }
                    if($this->countModules('content-bottom-2')){
                        $contentbottoms["content-bottom2"] = '<jdoc:include type="modules" name="content-bottom-2" style="shaz3e" />';
                    }
                    if($this->countModules('content-bottom-3')){
                        $contentbottoms["content-bottom3"] = '<jdoc:include type="modules" name="content-bottom-3" style="shaz3e" />';
                    }
                if(isset($contentbottoms)){
                    $result = count($contentbottoms);
                    foreach($contentbottoms as $contentbottom => $name){
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
                    }
					// clearfix
					echo '<div class="dc-clear"></div>';
                }
                ?>
                

	<?php if($this->countModules('content-bottom-bottom')): ?>
    	<jdoc:include type="modules" name="content-bottom-bottom" style="shaz3e" />
    	<div class="dc-clear"></div>
	<?php endif; ?>

</section>
<?php endif; ?>