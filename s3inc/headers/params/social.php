<?php

// restricted access
defined('_JEXEC') or die;

/**
 * Support Phone number is header
 */
if( $this->params->get('s3_social_icon') != ''){
	echo '<div class="s3-social-box">';
		echo $this->params->get('s3_social_icon');
	echo '</div>';
}
?>