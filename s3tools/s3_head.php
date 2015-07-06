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

// restricted access
defined('_JEXEC') or die;
?>

<?php if($this->params->get('LocalCDN')){ ?>
	<?php if($this->params->get('loadjQuery') == 0): ?>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <?php endif; ?>
<?php }else{ ?>
	<?php if($this->params->get('loadjQuery') == 0): ?>
		<script type="text/javascript" src="<?php echo $dcTemplatePath; ?>/js/jquery.min.js"></script>
    <?php endif; ?>
<?php } ?>

<jdoc:include type="head" />

<?php 
/**
 * Fixed header on scroll up/down slide up/down
 * hide/show Header and Menu on scroll up/down
 * 
 * @var string
 * @since S3Framework 3.3
 */

if($this->params->get('fixedHeader')):
	
	/**
	 * Enable Height i.e. 100 (Fixed header will be hide after scrolling down 100px) at Joomla back-end/
	 * 
	 * $var int
	 * @since S3Framework 3.3
	 */
	$sizeHeight = $this->params->get('fixedHeaderSize');
	
	/**
	 * Define header ease slideUp/slideDown speed in ms default 400 in templateDetails.xml
	 * 
	 * $var int
	 * @since S3Framework 3.3
	 */
	$duration = $this->params->get('fixedHeaderSpeed');
	
	/**
	 * Break point fixed header will show on larger than break point devices as defined at Joomla back-end.
	 * 
	 * $var int
	 * @since S3Framework 3.3
	 */
	$breakPoint = $this->params->get('breakPoint');
	
	/**
	 * Text Colors for fixed header as defined at Joomla back-end.
	 * 
	 * $var string
	 * @since S3Framework 3.4.1
	 */
	$headerTextColor = $this->params->get('headerTextColor');
	
	/**
	 * Background Colors for fixed header as defined at Joomla back-end.
	 * 
	 * $var string
	 * @since S3Framework 3.4.1
	 */
	$headerBackgroundColor = $this->params->get('headerBackgroundColor');
	
?>

<style type="text/css">
@media(min-width:<?php echo $breakPoint; ?>px){
	body{padding-top:<?php echo $sizeHeight; ?>;}
	.dc-fixed {
		position: fixed;
		top: 0px;
		width:100%;
		z-index:99;
		<?php if($this->params->get('headerTextColor')){echo 'color:'. $headerTextColor .';';} ?>
		<?php if($this->params->get('headerBackgroundColor')){echo 'background-color:'. $headerBackgroundColor .';';} ?>
	}
}
</style>

<script type="text/javascript">
if (document.documentElement.clientWidth >= <?php echo $breakPoint; ?> || screen.width >= <?php echo $breakPoint; ?>){
	$(function(){
		var prevScroll = 0,
		curDir = 'down',
		prevDir = 'up';
		
		$(window).scroll(function(){
			if($(this).scrollTop() >= prevScroll){
				curDir = 'down';
				if(curDir != prevDir){
					$('.dc-fixed').stop();
					$('.dc-fixed').animate({ top: '-100%' }, <?php echo $duration; ?>);
					prevDir = curDir;
				}
			} else {
				curDir = 'up';
				
				if(curDir != prevDir){
					$('.dc-fixed').stop();
					$('.dc-fixed').animate({ top: '0px' }, <?php echo $duration; ?>);
					prevDir = curDir;
				}
			}
			
			prevScroll = $(this).scrollTop();
		});
	})
}
</script>

<?php endif; ?>

<?php // Less Development Mode
if($this->params->get('developmentMode')): ?>
	<link rel="stylesheet/less" type="text/css" href="<?php echo $dcTemplatePath; ?>/themes/style<?php echo $this->params->get('style'); ?>/style.less">
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
	<?php if($this->params->get('LocalCDN')): ?>
		<script type="text/javascript" src="<?php echo $dcTemplatePath; ?>/js/less.js"></script>
	<?php else: ?>
	<?php endif; ?>
    
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo $this->params->get('analytics');?>', 'auto');
  ga('send', 'pageview');

</script>
<?php endif; ?>



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
<?php if($this->params->get('LocalCDN')): ?>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<?php else: ?>
	<script type="text/javascript" src="<?php echo $dcTemplatePath; ?>/js/html5.js"></script>
	<script type="text/javascript" src="<?php echo $dcTemplatePath; ?>/js/respond.js"></script>
<?php endif; ?>
<![endif]-->
