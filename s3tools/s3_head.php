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
?>
<?php if($this->params->get('LocalCDN')): ?>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php else: ?>
	<script type="text/javascript" src="<?php echo $dcTemplatePath; ?>/js/jquery.min.js"></script>
<?php endif; ?>

<jdoc:include type="head" />


<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/s3tools/s3_styles.php'); ?>
<?php if($this->params->get('LocalCDN')): ?>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.3/less.min.js"></script>
<?php else: ?>
	<script type="text/javascript" src="<?php echo $dcTemplatePath; ?>/js/less.js"></script>
<?php endif; ?>

<?php
// Less Development Mode
if($this->params->get('developmentMode')): ?>
	<script type="text/javascript">
         less.env = "development";
         less.watch();
    </script>
<?php endif; ?>

<?php
// Responsive Video
if($this->params->get('ResponsiveVideo')): ?>
<script>
  $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
	$(".s3-video").fitVids();
  });
</script>
<?php endif; ?>


<?php
// Google Analytics
if($this->params->get('analytics')): ?>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', '<?php echo $this->params->get('analytics');?>']);
	_gaq.push(['_trackPageview']);
	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; 

	ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
<?php endif; ?>



<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $dcTemplatePath; ?>/images/favicon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $dcTemplatePath; ?>/images/favicon/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $dcTemplatePath; ?>/images/favicon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo $dcTemplatePath; ?>/images/favicon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?php echo $dcTemplatePath; ?>/images/favicon/favicon.png">

<!--[if lt IE 9]>
	<link href="<?php echo $dcTemplatePath; ?>/css/ie.css" type="text/css" rel="stylesheet">
<?php if($this->params->get('LocalCDN')): ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
<?php else: ?>
	<script type="text/javascript" src="<?php echo $dcTemplatePath; ?>/js/html5.js"></script>
	<script type="text/javascript" src="<?php echo $dcTemplatePath; ?>/js/respond.js"></script>
<?php endif; ?>
<![endif]-->
