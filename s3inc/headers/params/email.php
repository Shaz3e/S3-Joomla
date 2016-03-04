<?php
// restricted access
defined('_JEXEC') or die;

/**
 * Support Email in header
 * @since S3 Framework 4.0
 */
if( $this->params->get('s3_email_box') != '') {
   	echo '<div class="s3-email-box">';
		echo '<a href="mailto:'.$this->params->get('s3_email_box').'">';
			echo '<i class="fa fa-envelope"></i> '.$this->params->get('s3_email_box');
		echo '</a>';
	echo '</div>';
}
?>