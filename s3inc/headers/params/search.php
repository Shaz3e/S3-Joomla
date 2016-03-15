<?php
// restricted access
defined('_JEXEC') or die;

/**
 * Search Box in Header
 * @since S3 Framework 4.0
 */

if( $this->params->get('s3_search_box') == 1): ?>
	<div class="s3-search-box">
    	<?php if( $this->params->get('s3_search_type') == 1) : ?>
        
            <a href="#" id="search-open"><i class="fa fa-search"></i> Search</a>
            <div class="s3-popup" id="s3search">
                <form id="searchform" method="post" action="<?php echo JRoute::_('index.php');?>" role="search">
                    <div class="form-group">
                    <input type="search" name="searchword" id="mod-search-searchword" class="s3-search-input" placeholder="Search & Enter..." autocomplete="off">
                    </div>
                <input type="hidden" name="task" value="search" />
                <input type="hidden" name="option" value="com_search" />
                </form>
                <a class="s3-search-close" href="#" id="search-close"><img src="<?php echo $dcTemplatePath; ?>/images/search-close.png"></a>
            </div>
        
        <?php else: ?>
            <div class="s3-search-normal">
                <form id="searchform" method="post" action="<?php echo JRoute::_('index.php');?>" role="search">
                    <div class="input-group add-on">
                        <input type="search" name="searchword" id="mod-search-searchword" class="form-control s3-search-input-normal" placeholder="Search & Enter..." autocomplete="off">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                    <input type="hidden" name="task" value="search" />
                    <input type="hidden" name="option" value="com_search" />
                </form>
            </div>
        
        <?php endif; ?>
	</div>
<?php endif; ?>