<?php
// restricted access
defined('_JEXEC') or die;

/**
 * Credits
 * @since S3 Framework 4.0
 */
 
if($this->countModules('credits')): ?>
	<jdoc:include type="modules" name="credits" style="s3_none" />

<?php elseif( $this->params->get('credit_text') ): ?>

	<p><?php echo $this->params->get('credit_text'); ?><p>

<?php else: ?>
	<p>Designed &amp; Developed by 
    	<a href="http://www.diligentcreators.com" 
        title="DiligentCreators" 
        target="_blank">DiligentCreators</a>
    </p>
<?php endif; ?>