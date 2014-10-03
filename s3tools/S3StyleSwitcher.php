<?php

// restricted access
defined('_JEXEC') or die;

// SET COOKIE FOR 1 YEAR
if(isset($_REQUEST["SETSTYLE"])){
	if(setcookie("testcookie",true)){
		setcookie("STYLE",$_REQUEST["SETSTYLE"],time()+31622400,"/");
		// setcookie("STYLE",$_REQUEST["SETSTYLE"],time()+3600,"/"); // SET COOKIE FOR 1 HOUR
	} else {
		$_SESSION["STYLE"]=$_REQUEST["SETSTYLE"];
	}
}
// RETURN TO CURRENT PAGE
header("Location: ".$_SERVER["HTTP_REFERER"]);
?>