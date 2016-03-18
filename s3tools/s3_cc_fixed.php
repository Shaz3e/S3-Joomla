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

/* Fixed Copyright & Credit Area */
if( $this->params->get('s3cc_fixed') == 1 || $this->params->get('s3cc_text_color') || $this->params->get('s3cc_background_color') ){?>
<style type="text/css">
@media(min-width:980px){
	.s3cc-fixed{
	<?php
	echo ( $this->params->get('s3cc_fixed') == 0 ? '' : 'position:fixed;bottom:0;width:100%;z-index:100;' );
	echo ( $this->params->get('s3cc_text_color') == '' ? '' : 'color:'.$this->params->get('s3cc_text_color').';' );
	echo ( $this->params->get('s3cc_background_color') == '' ? '' : 'background-color:'.$this->params->get('s3cc_background_color').';' );
	?>
	}
}
</style>
<?php } ?>