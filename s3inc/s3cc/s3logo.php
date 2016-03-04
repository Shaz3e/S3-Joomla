<?php
/**
 * Framework Logo
 * @param string
 * @since S3 Framework 4.0
 */
?>
<a href="<?php echo ($this->params->get('footer_custom_link') == '' ? 'http://www.shaz3e.com' : $this->params->get('footer_custom_link') );?>" class="Shaz3e" id="Shaz3e" target="<?php echo $this->params->get('footer_link_target'); ?>" title="<?php echo ($this->params->get('footer_custom_title') == '' ? 'Shaz3e - S3Framework' : $this->params->get('footer_custom_title') ); ?>">
<img src="<?php echo( $this->params->get('footer_logo') == '' ? $dcTemplatePath.'/images/Shaz3e.png' : $this->params->get('footer_logo') ); ?>" alt="<?php echo ($this->params->get('footer_custom_title') == '' ? 'Shaz3e - S3Framework' : $this->params->get('footer_custom_title') ); ?>">
</a>