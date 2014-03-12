<?php
// SET COOKIE FOR 1 HOURE
if(isset($_REQUEST["SETSTYLE"])){
	if(setcookie("testcookie",true)){
		setcookie("STYLE",$_REQUEST["SETSTYLE"],time()+3600,"/");
		// setcookie("STYLE",$_REQUEST["SETSTYLE"],time()+31622400,"/"); for one year
	} else {
		$_SESSION["STYLE"]=$_REQUEST["SETSTYLE"];
	}
}
// RETURN TO CURRENT PAGE
header("Location: ".$_SERVER["HTTP_REFERER"]);
?>