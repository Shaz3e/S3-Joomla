<?php
    // restricted access
    defined('_JEXEC') or die;
	
	echo '<div class="grid-12">';
	
	// content top modules
	require_once("contentTop.php");
	
	// main component area
	require_once("component.php");
	
	// content bottom modules
	require_once("contentBottom.php");
	
	echo '</div>';

?>