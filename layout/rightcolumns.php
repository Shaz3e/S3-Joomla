<?php
    // restricted access
    defined('_JEXEC') or die;
	
	echo '<div class="grid-9">';
	
	// content top modules
	require_once("contentTop.php");
	
	// main component area
	require_once("component.php");
	
	// content bottom modules
	require_once("contentBottom.php");
	
	echo '</div>';
	
	// right sidebar modules
	require_once("right.php");

?>