<?php

// restricted access
defined('_JEXEC') or die;

/**
 * Support Phone number is header
 */
if( $this->params->get('s3_phone_box') != ''){
	echo '<div class="s3-phone-box">';
		echo $this->params->get('s3_phone_box');
	echo '</div>';
}
?>