<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title ?></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<?php echo $styles;?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/admin/custom.min.css">
</head>
<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<?php $this->load->view("layouts/font_end/admin/left") ?>
			<?php $this->load->view($header) ?>
			<div class="right_col" role="main">
				<?php echo $contents;?>
			</div>
			<?php $this->load->view("layouts/font_end/admin/footer") ?>
		</div>
	</div>
</div>
<script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<?php echo $scripts_header;?>

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url(); ?>assets/js/admin/custom.js"></script>
</body>
</html>