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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/s3tools/s3_head.php'); ?>
</head>
<body class="<?php echo $DCBodyPageClasses; ?>">
<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/s3tools/s3_template.php'); ?>
<jdoc:include type="modules" name="debug" />
</body>
</html>