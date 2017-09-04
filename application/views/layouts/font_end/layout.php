<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test CI Application - <?php echo $title;?></title>
</head>
<body>
	<?php echo $contents;?>
	<!-- basic scripts -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<?php echo $scripts_header;?>
</body>
</html>