<?php
// restricted access
defined('_JEXEC') or die;

/**
 * All Header Styles
 * @since S3 Framework 4.0
 */
if( $this->params->get('s3_ccstyle') == $this->params->get('s3_ccstyle') ){
	include_once(JPATH_ROOT . "/templates/" . $this->template . '/s3inc/s3cc/s3cc-'.$this->params->get('s3_ccstyle').'.php');
}
?>