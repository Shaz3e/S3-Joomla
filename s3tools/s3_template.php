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

?>
<!--[if lt IE 9]>
    <div class="dc-broswer-alert">
    <p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/"><strong>upgrade your browser</strong></a> or <a href="http://www.google.com/chromeframe/?redirect=true"><strong>activate Google Chrome Frame</strong></a> to improve your experience.</p>
    </div>
<![endif]-->

<?php if($this->countModules('top-left-panel')) :?>
<div class="top-left-panel"><div id="top-left-panel"><jdoc:include type="modules" name="top-left-panel" style="shaz3e" /></div></div>
<?php endif; ?>

<?php if($this->countModules('top-right-panel')) :?>
<div class="top-right-panel"><div id="top-right-panel"><jdoc:include type="modules" name="top-right-panel" style="shaz3e" /></div></div>
<?php endif; ?>

<?php if($this->countModules('right-panel')) :?>
<div class="right-panel"><div id="right-panel"><jdoc:include type="modules" name="right-panel" style="shaz3e" /></div></div>
<?php endif; ?>

<?php if($this->countModules('bottom-right-panel')) :?>
<div class="bottom-right-panel"><div id="bottom-right-panel"><jdoc:include type="modules" name="bottom-right-panel" style="shaz3e" /></div></div>
<?php endif; ?>

<?php if($this->countModules('bottom-left-panel')) :?>
<div class="bottom-left-panel"><div id="bottom-left-panel"><jdoc:include type="modules" name="bottom-left-panel" style="shaz3e" /></div></div>
<?php endif; ?>

<?php if($this->countModules('left-panel')) :?>
<div class="left-panel"><div id="left-panel"><jdoc:include type="modules" name="left-panel" style="shaz3e" /></div></div>
<?php endif; ?>

<?php if($left_right): ?>
<section class="dc-left-right">
	<div id="dc-left-right">
    	<div class="modules">
        	<div id="modules">
            	<div class="dc-clear"></div>
                	<?php if($this->countModules('top-right')): ?>
                    <div class="dc-modules2">
                        <div class="dc-right">
                            <jdoc:include type="modules" name="top-right" style="shaz3e" />
                        </div>
                    </div>
                    <?php endif; ?>
                	<?php if($this->countModules('top-left')): ?>
                    <div class="dc-modules2">
                        <div class="dc-left">
                            <jdoc:include type="modules" name="top-left" style="shaz3e" />
                        </div>
                    </div>
                    <?php endif; ?>
            	<div class="dc-clear"></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if($topModules || $modTopModules): ?>
<section class="dc-top">
	<div id="dc-top">
    	<div class="dc-modules">
        	<div id="dc-modules">
                <div class="dc-clear"></div>
	                <?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/top.php"); ?>
	                <?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/mod-top.php"); ?>
                <div class="dc-clear"></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<div class="dc-fixed-header">
<section class="dc-header">
	<div id="dc-header">
    	<div class="dc-modules">
        	<div id="dc-modules">
                <div class="dc-clear"></div>
                	<div class="dc-logo"><a href="<?php echo $this->baseurl; ?>"><?php echo $logo; ?></a></div>
                    	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/header.php"); ?>
                    	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/mod-header.php"); ?>
                <div class="dc-clear"></div>
            </div>
        </div>
    </div>
</section>


<?php if($menuModules || $modMenuModules):?>
<section class="dc-menu">
	<div id="dc-menu">
    	<div class="dc-modules">
        	<div id="dc-modules">
                <div class="dc-clear"></div>
					<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/menu.php"); ?>
					<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/mod-menu.php"); ?>
                <div class="dc-clear"></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
</div>

<?php if($breadcrumbModules || $modBreadcrumbModules): ?>
<section class="dc-breadcrumb">
	<div id="dc-breadcrumb">
    	<div class="dc-modules">
        	<div id="dc-modules">
            	<div class="dc-clear"></div>
                	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/breadcrumb.php"); ?>
                	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/mod-breadcrumb.php"); ?>
                <div class="dc-clear"></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if($slideshowModules || $modSlideshowModules): ?>
<section class="dc-slideshow">
	<div id="dc-slideshow">
    	<div class="dc-modules">
        	<div id="dc-modules">
                <div class="dc-clear"></div>
                	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/slideshow.php"); ?>
                	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/mod-slideshow.php"); ?>
                <div class="dc-clear"></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if($showcaseModules || $modShowcaseModules): ?>
<section class="dc-showcase">
	<div id="dc-showcase">
    	<div class="dc-modules">
        	<div id="dc-modules">
                <div class="dc-clear"></div>
                	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/showcase.php"); ?>
                	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/mod-showcase.php"); ?>
                <div class="dc-clear"></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if($featureModules || $modFeatureModules || $bottomFeatureModules || $modBottomFeatureModules): ?>
<section class="dc-feature">
	<div id="dc-feature">
    	<div class="dc-modules">
        	<div id="dc-modules">
                <div class="dc-clear"></div>
                <?php if($featureModules || $modFeatureModules): ?>
                	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/feature.php"); ?>
                	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/mod-feature.php"); ?>
                <div class="dc-clear"></div>
                <?php endif; ?>
                <?php if($bottomFeatureModules || $modBottomFeatureModules): ?>
						<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/bottom-feature.php"); ?>
						<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/mod-bottom-feature.php"); ?>
                    <div class="dc-clear"></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php 
	$app = JFactory::getApplication();
	$menu = $app->getMenu();
	$lang = JFactory::getLanguage();
	if ($menu->getActive() == $menu->getDefault($lang->getTag())) {
		if($this->params->get('showMainBody')){
			include_once(JPATH_ROOT . "/templates/" . $this->template . "/layout/layout.php"); 
		}
	}else{
		include_once(JPATH_ROOT . "/templates/" . $this->template . "/layout/layout.php"); 
	}
?>

<?php if($utilityModules || $modUtilityModules): ?>
<section class="dc-utility">
	<div id="dc-utility">
    	<div class="dc-modules">
        	<div id="dc-modules">
            	<div class="dc-clear"></div>
                	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/utility.php"); ?>
                	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/mod-utility.php"); ?>
                <div class="dc-clear"></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if($scrollerModules || $scrollerModules): ?>
<section class="dc-scroller">
	<div id="dc-scroller">
    	<div class="dc-modules">
        	<div id="dc-modules">
            	<div class="dc-clear"></div>
                	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/scroller.php"); ?>
                	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/mod-scroller.php"); ?>
            	<div class="dc-clear"></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if($extensionModules || $modExtensionModules): ?>
<section class="dc-extension">
	<div id="dc-extension">
    	<div class="dc-modules">
        	<div id="dc-modules">
            	<div class="dc-clear"></div>
                	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/extension.php"); ?>
                	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/mod-extension.php"); ?>
                <div class="dc-clear"></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if($bottomModules || $modBottomModules): ?>
<section class="dc-bottom">
	<div id="dc-bottom">
    	<div class="dc-modules">
        	<div id="dc-modules">
            	<div class="dc-clear"></div>
                	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/bottom.php"); ?>
                	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/mod-bottom.php"); ?>
            	<div class="dc-clear"></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if($footerModules || $modFooterModules || $bottomFooterModules || $modBottomFooterModules): ?>
<footer class="dc-footer">
	<div id="dc-footer">
    	<div class="dc-modules">
        	<div id="dc-modules">
            	<div class="dc-clear"></div>
                <?php if($footerModules || $modFooterModules): ?>
	            	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/footer.php"); ?>
	            	<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/mod-footer.php"); ?>
            	<div class="dc-clear"></div>
                <?php endif; ?>
                <?php if($bottomFooterModules || $modBottomFooterModules): ?>
						<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/bottom-footer.php"); ?>
						<?php include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/mod-bottom-footer.php"); ?>
				<div class="dc-clear"></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
<?php endif; ?>

<?php if($this->params->get('credit') || $this->params->get('copyright') || $this->params->get('shaz3e')): ?>
<section class="DiligentCreators">
	<div id="DiligentCreators">
		<?php if($this->params->get('credit') || $this->params->get('copyright')): ?>
            <div class="dc-clear"></div>
            <?php if($this->params->get('credit')): ?>
            <div class="dc-credits">
                <div id="dc-credits">
                    <div class="dc-modules">
                        <div id="dc-modules">
                            <div class="dc-clear"></div>
                                <div class="dc-block">
                                <?php if($this->countModules('credits')): ?>
                                    <jdoc:include type="modules" name="credits" style="s3_none" />                                
                                <?php else: ?>
                                    <p>Designed &amp; Developed by <a href="http://www.diligentcreators.com" title="DiligentCreators" target="_blank">DiligentCreators</a></p>
                                <?php endif; ?>
                                </div>
                            <div class="dc-clear"></div>
                        </div>
                    </div>      	
                </div>
            </div>
            <?php endif; ?>
            <?php if($this->params->get('copyright')): ?>
            <div class="dc-copyright">
                <div id="dc-copyright">
                    <div class="dc-modules">
                        <div id="dc-modules">
                            <div class="dc-clear"></div>
                                <div class="dc-block">
                                <?php if($this->countModules('copyright')): ?>
                                    <jdoc:include type="modules" name="copyright" style="s3_none" />
                                <?php else: ?>
                                    <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo $this->baseurl; ?>" title="<?php echo $sitetitle; ?>"> <?php echo $sitename; ?></a> | All Rights Reserved.</p>
                                <?php endif; ?>
                                </div>
                            <div class="dc-clear"></div>
                        </div>
                    </div> 
                </div>
            </div>
            <?php endif; ?>
		<?php endif; ?>
		<div class="dc-clear"></div>
        	<?php if($this->params->get('shaz3e')): ?>
			<a href="http://www.shaz3e.com" class="shaz3e" target="_blank" title="Shaz3e"></a>
            <?php endif; ?>
			<?php if($this->params->get('StyleSwitcher')){ ?>
            <div class="dc-StyleSwitcher">
				<div id="dc-StyleSwitcher">
				<?php
					while(list($key, $value) = each($styleSheets)){ 
						echo "<a class='dc-style-".$key."' href='".$dcTemplatePath."/s3tools/S3StyleSwitcher.php?SETSTYLE=".$key."' title='".$value["title"]."'><span>".$value["text"]."</span></a>";
					} // endwhile
				?>
				</div>
            </div>
			<?php } // endif;?>
		<div class="dc-clear"></div>
    </div>
</section>
<?php endif; ?>

<?php if($this->params->get('fixedHeader')): ?>
	<style type="text/css">
    	@media (min-width: 980px) {
    		.dc-fixed{position:fixed;}
    		.dc-fixed-header{
    			margin:0 !important;
    			top:0;
    			display:block;
    			width:100%;
    			z-index:9999;
    		}
    	}
	</style>
	<script type="text/javascript">
		var dcHeader = $(window);
		var dcHeaderPosition = dcHeader.scrollTop();
		var up = false;
		var newscroll;
		dcHeader.scroll(function () {
			newscroll = dcHeader.scrollTop();
			if (newscroll > dcHeaderPosition && !up && newscroll > <?php if($this->params->get('fixedHeaderSize')){echo $this->params->get('fixedHeaderSize');}else{echo 100;} ?>) {
				$('.dc-fixed-header').stop().slideUp({duration:<?php if($this->params->get('fixedHeaderSpeed')){echo $this->params->get('fixedHeaderSpeed');}else{echo 400;} ?>});
				up = !up;
				console.log(up);				
			} else if(newscroll < dcHeaderPosition && up) {
				$('.dc-fixed-header').stop().slideDown({duration:<?php if($this->params->get('fixedHeaderSpeed')){echo $this->params->get('fixedHeaderSpeed');}else{echo 400;} ?>});
				up = !up;
			}
			dcHeaderPosition = newscroll;
		});
		
		var  dcFixedHeader = $('.dc-fixed-header');
			dcFixed = "dc-fixed";

		$(window).scroll(function() {
			if( $(this).scrollTop()) {
				dcFixedHeader.addClass(dcFixed);
			}else{
				dcFixedHeader.removeClass(dcFixed);
			}
		});

	</script>
<?php endif; ?>