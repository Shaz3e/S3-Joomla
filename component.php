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
<meta name="viewport" content="width=device-width, intial-scale=1, maximum-scale=1, user-scaleable=no">
<meta charset="utf-8">
<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/s3tools/s3_head.php'); ?>
</head>
<body>
	<jdoc:include type="message" />
	<jdoc:include type="component" />
</body>
</html>
