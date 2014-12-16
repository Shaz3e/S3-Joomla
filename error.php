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


$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

if (!isset($this->error)) {
    $this->error = JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
    $this->debug = false;
}

$dcTemplatePath = $this->baseurl.'/templates/'.$this->template;

?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, intial-scale=1, maximum-scale=1, user-scaleable=no">
<meta charset="utf-8">

<title><?php echo $this->title; ?> <?php echo htmlspecialchars($this->error->getMessage()); ?></title>
<script type="text/javascript" src="<?php echo $dcTemplatePath; ?>/js/jquery.min.js"></script>


<link href="<?php echo $dcTemplatePath; ?>/css/pace.css" rel="stylesheet" type="text/css">
<link href="<?php echo $dcTemplatePath; ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $dcTemplatePath; ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo $dcTemplatePath; ?>/css/404.css">
<link rel="stylesheet" type="text/css" href="<?php echo $dcTemplatePath; ?>/fonts/fonts.css">
<script type="text/javascript" src="<?php echo $dcTemplatePath; ?>/js/bootstrap.min.js"></script>


<link rel="stylesheet/less" type="text/css" href="<?php echo $dcTemplatePath; ?>/themes/style1/style.less">
<script type="text/javascript" src="<?php echo $dcTemplatePath; ?>/js/less.js"></script>
<link rel="shortcut icon" href="<?php echo $dcTemplatePath; ?>/images/favicon/favicon.ico">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $dcTemplatePath; ?>/images/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $dcTemplatePath; ?>/images/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $dcTemplatePath; ?>/images/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $dcTemplatePath; ?>/images/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $dcTemplatePath; ?>/images/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $dcTemplatePath; ?>/images/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $dcTemplatePath; ?>/images/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $dcTemplatePath; ?>/images/favicon/apple-touch-icon-152x152.png">
<link rel="icon" type="image/png" href="<?php echo $dcTemplatePath; ?>/images/favicon/favicon-196x196.png" sizes="196x196">
<link rel="icon" type="image/png" href="<?php echo $dcTemplatePath; ?>/images/favicon/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="<?php echo $dcTemplatePath; ?>/images/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo $dcTemplatePath; ?>/images/favicon/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="<?php echo $dcTemplatePath; ?>/images/favicon/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo $dcTemplatePath; ?>/images/favicon/mstile-144x144.png">
<meta name="msapplication-config" content="<?php echo $dcTemplatePath; ?>/images/favicon/browserconfig.xml">

<!--[if lt IE 9]>
    <link href="<?php echo $dcTemplatePath; ?>/css/ie.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo $dcTemplatePath; ?>/js/html5.js"></script>
    <script type="text/javascript" src="<?php echo $dcTemplatePath; ?>/js/respond.js"></script>
<![endif]-->

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
        <a class="dc-404-goto-home" href="<?php echo $this->baseurl;?>/index.php" title="<?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?>"><?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a>
    </div>
</body>
</html>
