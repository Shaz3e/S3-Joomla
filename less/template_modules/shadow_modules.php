<?php
	if(
		$this->params->get('shadow1') || 
		$this->params->get('shadow2') || 
		$this->params->get('shadow3') || 
		$this->params->get('shadow4') || 
		$this->params->get('shadow5')
	):
?>
<style type="text/css">


div.dc-block.s3-box-shadow1{<?php echo $this->params->get('shadow1'); ?>}
div.dc-block.s3-box-shadow2{<?php echo $this->params->get('shadow2'); ?>}
div.dc-block.s3-box-shadow3{<?php echo $this->params->get('shadow3'); ?>}
div.dc-block.s3-box-shadow4{<?php echo $this->params->get('shadow4'); ?>}
div.dc-block.s3-box-shadow5{<?php echo $this->params->get('shadow5'); ?>}

</style>
<?php endif; ?>