<?php

// Left Sidebar
$left = ($this->countModules('left'));

// Right Sidebar
$right = ($this->countModules('right'));

// 3columns
if($left && $right):
	require_once("3columns.php");

// left and component 2 columns
elseif($left && !$right):
	require_once("leftcolumns.php");   

// right and component 2 columns
elseif($right && !$left):
	require_once("rightcolumns.php");

// component 1 columns
else:
	require_once("fullpage.php");
endif;
?>