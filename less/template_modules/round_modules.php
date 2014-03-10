<?php
	if(
		$this->params->get('round1') || 
		$this->params->get('round2') || 
		$this->params->get('round3') || 
		$this->params->get('round4') || 
		$this->params->get('round5')
	):
?>
<style type="text/css">


div.dc-block.s3-box-round1{<?php echo $this->params->get('round1'); ?>}
div.dc-block.s3-box-round2{<?php echo $this->params->get('round2'); ?>}
div.dc-block.s3-box-round3{<?php echo $this->params->get('round3'); ?>}
div.dc-block.s3-box-round4{<?php echo $this->params->get('round4'); ?>}
div.dc-block.s3-box-round5{<?php echo $this->params->get('round5'); ?>}

</style>
<?php endif; ?>