<?php
// restricted access
defined('_JEXEC') or die;

/**
 * All Header Styles
 * @since S3 Framework 4.0
 */
if( $this->params->get('header_style') == $this->params->get('header_style') ){
	include_once(JPATH_ROOT . "/templates/" . $this->template . '/s3inc/headers/header-'.$this->params->get('header_style').'.php');
}
?>