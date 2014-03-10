<style type="text/css">

<?php if($this->params->get('badge1') || $this->params->get('badge1Image')): ?>
	.dc-block.s3-badge-<?php echo $this->params->get('badge1'); ?>:before{
		content:url(<?php echo $this->params->get('badge1Image'); ?>);
	}
<?php endif; ?>

<?php if($this->params->get('badge2') || $this->params->get('badge2Image')): ?>
	.dc-block.s3-badge-<?php echo $this->params->get('badge2'); ?>:before{
		content:url(<?php echo $this->params->get('badge2Image'); ?>);
	}
<?php endif; ?>

<?php if($this->params->get('badge3') || $this->params->get('badge3Image')): ?>
	.dc-block.s3-badge-<?php echo $this->params->get('badge3'); ?>:before{
		content:url(<?php echo $this->params->get('badge3Image'); ?>);
	}
<?php endif; ?>

<?php if($this->params->get('badge4') || $this->params->get('badge4Image')): ?>
	.dc-block.s3-badge-<?php echo $this->params->get('badge4'); ?>:before{
		content:url(<?php echo $this->params->get('badge4Image'); ?>);
	}
<?php endif; ?>

<?php if($this->params->get('badge5') || $this->params->get('badge5Image')): ?>
	.dc-block.s3-badge-<?php echo $this->params->get('badge5'); ?>:before{
		content:url(<?php echo $this->params->get('badge5Image'); ?>);
	}
<?php endif; ?>

<?php if(
	$this->params->get('BadgePositions1') || 
	$this->params->get('BadgePositions2') || 
	$this->params->get('BadgePositionsVar1') || 
	$this->params->get('BadgePositionsVar2') 
): ?>
.dc-block.s3-badge-<?php echo $this->params->get('badge1'); ?>:before,
.dc-block.s3-badge-<?php echo $this->params->get('badge2'); ?>:before,
.dc-block.s3-badge-<?php echo $this->params->get('badge3'); ?>:before,
.dc-block.s3-badge-<?php echo $this->params->get('badge4'); ?>:before,
.dc-block.s3-badge-<?php echo $this->params->get('badge5'); ?>:before{
	position:absolute;
	<?php echo $this->params->get('BadgePositions1'); ?>:<?php echo $this->params->get('BadgePositionsVar1'); ?>;
	<?php echo $this->params->get('BadgePositions2'); ?>:<?php echo $this->params->get('BadgePositionsVar2'); ?>;
	z-index:1;
}
<?php endif; ?>

.dc-block.s3-badge-notavailable:before,
.dc-block.s3-badge-comingsoon:before,
.dc-block.s3-badge-hot:before,
.dc-block.s3-badge-free:before,
.dc-block.s3-badge-cool:before,
.dc-block.s3-badge-special:before,
.dc-block.s3-badge-updated:before,
.dc-block.s3-badge-new:before,
.dc-block.s3-badge-latest:before{
	position:absolute;
	top:0;
	right:0;
	z-index:1;
}
.dc-block.s3-badge-notavailable:before {
	content:url(<?php echo $this->baseurl.'/templates/'.$this->template; ?>/images/badges/badge-notavailable.png);
}
.dc-block.s3-badge-comingsoon:before {
	content:url(<?php echo $this->baseurl.'/templates/'.$this->template; ?>/images/badges/badge-comingsoon.png);
}
.dc-block.s3-badge-hot:before {
	content:url(<?php echo $this->baseurl.'/templates/'.$this->template; ?>/images/badges/badge-hot.png);
}
.dc-block.s3-badge-free:before {
	content:url(<?php echo $this->baseurl.'/templates/'.$this->template; ?>/images/badges/badge-free.png);
}
.dc-block.s3-badge-cool:before {
	content:url(<?php echo $this->baseurl.'/templates/'.$this->template; ?>/images/badges/badge-cool.png);
}
.dc-block.s3-badge-special:before {
	content:url(<?php echo $this->baseurl.'/templates/'.$this->template; ?>/images/badges/badge-special.png);
}
.dc-block.s3-badge-updated:before {
	content:url(<?php echo $this->baseurl.'/templates/'.$this->template; ?>/images/badges/badge-updated.png);
}
.dc-block.s3-badge-new:before {
	content:url(<?php echo $this->baseurl.'/templates/'.$this->template; ?>/images/badges/badge-new.png);
}

</style>