<style type="text/css">

<?php if($this->params->get('S3ColorBoxes')): ?>
	div.dc-block.s3-box-white,
	div.dc-block.s3-box-black,
	div.dc-block.s3-box-light,
	div.dc-block.s3-box-dark,
	div.dc-block.s3-box-blue,
	div.dc-block.s3-box-orange,
	div.dc-block.s3-box-red,
	div.dc-block.s3-box-green{
		<?php echo $this->params->get('S3ColorBoxes'); ?>;
	}
<?php endif; ?>

<?php if($this->params->get('S3ColorBoxesLinks')): ?>
	div.dc-block.s3-box-white a,
	div.dc-block.s3-box-black ,
	div.dc-block.s3-box-light a,
	div.dc-block.s3-box-dark a,
	div.dc-block.s3-box-blue a,
	div.dc-block.s3-box-orange a,
	div.dc-block.s3-box-red a,
	div.dc-block.s3-box-green a{
		<?php echo $this->params->get('S3ColorBoxesLinks'); ?>
	}
<?php endif; ?>

<?php if($this->params->get('S3ColorBoxWhiteText') || $this->params->get('S3ColorBoxWhiteBG')) : ?>
	div.dc-block.s3-box-white{
		color:<?php echo $this->params->get('S3ColorBoxWhiteText'); ?>;
		background:<?php echo $this->params->get('S3ColorBoxWhiteBG'); ?>;
	}

	<?php if($this->params->get('S3ColorBoxWhiteLink') || $this->params->get('S3ColorBoxWhiteHover')) : ?>
		div.dc-block.s3-box-white a{
			color:<?php echo $this->params->get('S3ColorBoxWhiteLink'); ?> !important;
		}
		div.dc-block.s3-box-white a:hover{
			background:<?php echo $this->params->get('S3ColorBoxWhiteHover'); ?> !important;
		}
	<?php endif; ?>
<?php endif; ?>

<?php if($this->params->get('S3ColorBoxBlackText') || $this->params->get('S3ColorBoxBlackBG')) : ?>
	div.dc-block.s3-box-black{
		color:<?php echo $this->params->get('S3ColorBoxBlackText'); ?>;
		background:<?php echo $this->params->get('S3ColorBoxBlackBG'); ?>;
	}
	<?php if($this->params->get('S3ColorBoxBlackLink') || $this->params->get('S3ColorBoxBlackHover')) : ?>
		div.dc-block.s3-box-black a{
			color:<?php echo $this->params->get('S3ColorBoxBlackLink'); ?> !important;
		}
		div.dc-block.s3-box-black a:hover{
			background:<?php echo $this->params->get('S3ColorBoxBlackHover'); ?> !important;
		}
	<?php endif; ?>
<?php endif; ?>

<?php if($this->params->get('S3ColorBoxDarkText') || $this->params->get('S3ColorBoxDarkBG')): ?>
	div.dc-block.s3-box-dark{
		color:<?php echo $this->params->get('S3ColorBoxDarkText'); ?>;
		background:<?php echo $this->params->get('S3ColorBoxDarkBG'); ?>;
	}
	<?php if($this->params->get('S3ColorBoxDarkLink') || $this->params->get('S3ColorBoxDarkHover')) : ?>
		div.dc-block.s3-box-dark a{
			color:<?php echo $this->params->get('S3ColorBoxDarkLink'); ?> !important;
		}
		div.dc-block.s3-box-dark a:hover{
			background:<?php echo $this->params->get('S3ColorBoxDarkHover'); ?> !important;
		}
	<?php endif; ?>
<?php endif; ?>

<?php if($this->params->get('S3ColorBoxLightText') || $this->params->get('S3ColorBoxLightBG')): ?>
	div.dc-block.s3-box-light{
		color:<?php echo $this->params->get('S3ColorBoxLightText'); ?>;
		background:<?php echo $this->params->get('S3ColorBoxLightBG'); ?>;
	}
	<?php if($this->params->get('S3ColorBoxLightLink') || $this->params->get('S3ColorBoxLightHover')) : ?>
		div.dc-block.s3-box-light a{
			color:<?php echo $this->params->get('S3ColorBoxLightLink'); ?> !important;
		}
		div.dc-block.s3-box-light a:hover{
			background:<?php echo $this->params->get('S3ColorBoxLightHover'); ?> !important;
		}
	<?php endif; ?>
<?php endif; ?>

<?php if($this->params->get('S3ColorBoxBlueText') || $this->params->get('S3ColorBoxBlueBG')): ?>
	div.dc-block.s3-box-blue{
		color:<?php echo $this->params->get('S3ColorBoxBlueText'); ?>;
		background:<?php echo $this->params->get('S3ColorBoxBlueBG'); ?>;
	}
	<?php if($this->params->get('S3ColorBoxBlueLink') || $this->params->get('S3ColorBoxBlueHover')) : ?>
		div.dc-block.s3-box-blue a{
			color:<?php echo $this->params->get('S3ColorBoxBlueLink'); ?> !important;
		}
		div.dc-block.s3-box-blue a:hover{
			background:<?php echo $this->params->get('S3ColorBoxBlueHover'); ?> !important;
		}
	<?php endif; ?>
<?php endif; ?>

<?php if($this->params->get('S3ColorBoxOrangeText') || $this->params->get('S3ColorBoxOrangeBG')): ?>
	div.dc-block.s3-box-orange{
		color:<?php echo $this->params->get('S3ColorBoxOrangeText'); ?>;
		background:<?php echo $this->params->get('S3ColorBoxOrangeBG'); ?>;
	}
	<?php if($this->params->get('S3ColorBoxOrangeLink') || $this->params->get('S3ColorBoxOrangeHover')) : ?>
		div.dc-block.s3-box-orange a{
			color:<?php echo $this->params->get('S3ColorBoxOrangeLink'); ?> !important;
		}
		div.dc-block.s3-box-orange a:hover{
			background:<?php echo $this->params->get('S3ColorBoxOrangeHover'); ?> !important;
		}
	<?php endif; ?>
<?php endif; ?>

<?php if($this->params->get('S3ColorBoxRedText') || $this->params->get('S3ColorBoxRedBG')): ?>
	div.dc-block.s3-box-red{
		color:<?php echo $this->params->get('S3ColorBoxRedText'); ?>;
		background:<?php echo $this->params->get('S3ColorBoxRedBG'); ?>;
	}
	<?php if($this->params->get('S3ColorBoxRedLink') || $this->params->get('S3ColorBoxRedHover')) : ?>
		div.dc-block.s3-box-red a{
			color:<?php echo $this->params->get('S3ColorBoxRedLink'); ?> !important;
		}
		div.dc-block.s3-box-red a:hover{
			background:<?php echo $this->params->get('S3ColorBoxRedHover'); ?> !important;
		}
	<?php endif; ?>
<?php endif; ?>

<?php if($this->params->get('S3ColorBoxGreenText') || $this->params->get('S3ColorBoxGreenBG')): ?>
	div.dc-block.s3-box-green{
		color:<?php echo $this->params->get('S3ColorBoxGreenText'); ?>;
		background:<?php echo $this->params->get('S3ColorBoxGreenBG'); ?>;
	}
	<?php if($this->params->get('S3ColorBoxGreenLink') || $this->params->get('S3ColorBoxGreenHover')) : ?>
		div.dc-block.s3-box-green a{
			color:<?php echo $this->params->get('S3ColorBoxGreenLink'); ?> !important;
		}
		div.dc-block.s3-box-green a:hover{
			background:<?php echo $this->params->get('S3ColorBoxGreenHover'); ?> !important;
		}
	<?php endif; ?>
<?php endif; ?>
</style>