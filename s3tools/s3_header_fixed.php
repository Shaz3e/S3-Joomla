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

/**
 * Less Development Mode
 * append url with #!watch
 * @since S3 Framework 4.0
 */ 
if($this->params->get('developmentMode')): ?>
<script type="text/javascript">
	var querystring = '!watch';
	$('a').each(function(){
		var href = $(this).attr('href');
		href += (href.match(/\?/) ? '&' : '#') + querystring;
		$(this).attr('href', href);
	});
</script>
<?php endif; ?>

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
	.dc-fixed {
		position:fixed;
		margin:0 !important;
		top:0;
		display:block;
		width:100%;
		z-index:99;
		<?php if($this->params->get('headerTextColor')){echo 'color:'. $headerTextColor .';';} ?>
		<?php if($this->params->get('headerBackgroundColor')){echo 'background-color:'. $headerBackgroundColor .';';} ?>
	}
}
</style>

<script type="text/javascript">
if (document.documentElement.clientWidth >= <?php echo $breakPoint; ?> || screen.width >= <?php echo $breakPoint; ?>){
	var S3Header = $(window);
	var S3HeaderPosition = S3Header.scrollTop();
	var up = false;
	var newscroll;
	
	S3Header.scroll(function () {
		newscroll = S3Header.scrollTop();
		if (newscroll > S3HeaderPosition && !up && newscroll > <?php echo $sizeHeight; ?>) {
			$('.dc-fixed-header').stop();
			$('.dc-fixed-header').animate({top: '-100%'}, <?php echo $duration; ?>);
			up = !up;
			console.log(up);
		} else if(newscroll < S3HeaderPosition && up) {
			$('.dc-fixed-header').stop();
			$('.dc-fixed-header').animate({top: '0px'}, <?php echo $duration; ?>);
			up = !up;
		}
		
		S3HeaderPosition = newscroll;
	});
		
	var s3FixedHeader = $('.dc-fixed-header');
	s3Fixed = "dc-fixed";
	$(window).scroll(function() {
		if( $(this).scrollTop()) {
			s3FixedHeader.addClass(s3Fixed);
		}else{
			s3FixedHeader.removeClass(s3Fixed);
		}
	});
}
</script>

<?php endif; ?>