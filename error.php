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
if (!isset($this->error)) {
	$this->error = JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
	$this->debug = false;
}
//get language and direction
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;
?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, intial-scale=1, maximum-scale=1, user-scaleable=no">
<meta charset="utf-8">
	<title><?php echo $this->error->getCode(); ?> - <?php echo $this->title; ?></title>
    <link href="<?php echo $this->baseurl.'/templates/'.$this->template; ?>/css/404.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $this->baseurl.'/templates/'.$this->template; ?>/css/style.css" rel="stylesheet" type="text/css">
</head>
<body class="dc-404-layout">
    <div class="dc-404">
        <div class="dc-404-head">
            <h1><span>404</span></h1>
            <h2><span><?php echo $this->error->getCode(); ?> - <?php echo $this->error->getMessage(); ?></span></h2>
        </div>
    </div>
    <div class="dc-404-body">
        <h2><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></h2>
        <ul>
            <li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
            <li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
            <li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
            <li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
            <li><?php echo JText::_('JERROR_LAYOUT_REQUESTED_RESOURCE_WAS_NOT_FOUND'); ?></li>
            <li><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></li>
        </ul>
        <div class="dc-clear"></div>
            <div class="dc-404-error-message-notice"><?php echo $this->error->getMessage(); ?></div>
            <div class="dc-404-error-message-notice"><?php if ($this->debug){echo $this->renderBacktrace();}?></div>
        <div class="dc-404-error-message">
            If difficulties persist, please contact the System Administrator of this site and report the error above.
        </div>
        <a class="dc-404-goto-home" href="<?php echo $this->baseurl; ?>" title="<?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?>"><?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a>
    </div>
</body>
</html>
