<?php
// restricted access
defined('_JEXEC') or die;

/**
 * Search Box in Header
 * @since S3 Framework 4.0
 */
 
if( $this->params->get('s3_calltoaction') != '') {
   	echo '<div class="s3-calltoaction-box">';
		echo $this->params->get('s3_calltoaction');
	echo '</div>';
}
?>