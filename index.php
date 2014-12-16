<?php

/*======================================================================*\
|| #################################################################### ||
|| # Package - Joomla Template based on Shaz3e S3 Framework             ||
|| # Copyright (C) 2010  shaz3e.com. All Rights Reserved.               ||
|| # Authors - Shahrukh A. Khan (Shaz3e) and DiligentCreators           ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of shaz3e.com                         ||
|| # for more information visit http://www.shaz3e.com/                  ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses websites - http://www.shaz3e.com        ||
|| # A project of DiligentCreators - Construcing Ideas...               ||
|| #################################################################### ||
\*======================================================================*/

defined('_JEXEC') or die;
include_once(JPATH_ROOT . "/templates/" . $this->template . '/s3tools/s3_tool.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, intial-scale=1, maximum-scale=1, user-scaleable=no">
<meta charset="utf-8">
<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/s3tools/s3_head.php'); ?>
</head>
<body class="<?php echo $DCBodyPageClasses; ?>">

	<div id="livezilla_tracking" style="display:none"></div>
	<script type="text/javascript">
	var script = document.createElement("script");
	script.async=true;
	script.type="text/javascript";
	var src = "http://diligentcreators.com/livechat/server.php?a=6728a&request=track&output=jcrpt&ovlp=MjI_&ovlc=I2U0NGEyNw__&ovlct=I2ZmZmZmZg__&ovlapo=MQ__&eca=MQ__&ecw=Mjg1&ech=OTU_&ecmb=Mjk_&echt=UXVlc3Rpb25zPw__&echst=Q2hhdCB3aXRoIHVzIGxpdmU_&ecoht=UXVlc3Rpb25zPw__&ecohst=UGxlYXNlIGxlYXZlIGEgbWVzc2FnZQ__&ecfs=I0Y4NkQ0RQ__&ecfe=I0U0NEEyNw__&echc=I0ZGRkZGRg__&ecslw=Mg__&ecsgs=I0U0NEEyNw__&ecsge=I0U0NEEyNw__&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);
	</script>
	<noscript>
	<h1>
		<img src="http://diligentcreators.com/livechat/server.php?a=6728a&amp;request=track&amp;output=nojcrpt" width="0" height="0" style="visibility:hidden;" alt="">
	</h1>
	</noscript>

<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/s3tools/s3_template.php'); ?>
<jdoc:include type="modules" name="debug" />
</body>
</html>