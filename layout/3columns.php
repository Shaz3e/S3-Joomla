<section class="dc-container">
<div class="dc-clear"></div>
	<div id="dc-container">
    <div class="dc-clear"></div>
    	
        <?php if($this->countModules('left')): ?>
    	<aside class="dc-left-sidebar">
        	<div id="dc-left-sidebar">
                <div class="dc-modules">
                    <div id="dc-modules">
                    	<div class="dc-clear"></div>
	                        <?php require_once("left.php"); ?>
                        <div class="dc-clear"></div>
                    </div>
                </div>
            </div>
        </aside>
        <?php endif; ?>
        
        <section class="dc-componentLeftRight">
			<?php if($this->countModules('content-top-1') || $this->countModules('content-top-2') || $this->countModules('content-top-3')) : ?>
                <section class="dc-content-top">
                    <div id="dc-content-top">
                        <div id="dc-modules">
                            <div class="dc-clear"></div>
                                <?php require_once("contentTop.php"); ?>
                            <div class="dc-clear"></div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

        	<div id="dc-component">
                <article>
                	<?php s3Component(); ?>
                </article>
			</div>
            
			<?php if($this->countModules('content-bottom-1') || $this->countModules('content-bottom-2') || $this->countModules('content-bottom-3')) : ?>
                <section class="dc-content-bottom">
                    <div id="dc-content-bottom">
                        <div id="dc-modules">
                            <div class="dc-clear"></div>
                                <?php require_once("contentBottom.php"); ?>
                            <div class="dc-clear"></div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            
        </section>
        
        <?php if($this->countModules('right')) :?>
    	<aside class="dc-right-sidebar">
        	<div id="dc-right-sidebar">
                <div class="dc-modules">
                    <div id="dc-modules">
                    	<div class="dc-clear"></div>
	                        <?php require_once("right.php"); ?>
                        <div class="dc-clear"></div>
                    </div>
                </div>
            </div>
        </aside>
		<?php endif; ?>
   	<div class="dc-clear"></div>
    </div>
<div class="dc-clear"></div>
</section>
<div class="dc-clear"></div><!--clearfix -->