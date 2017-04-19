<!doctype html>
<html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <!-- <link rel="icon" href="../../favicon.ico"> -->
		<title>CompLearn | Home</title>
	</head>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>">
	<body>
		<?php
			if($this->session->userdata('logged_in') == TRUE)
			{
				echo "";
			}else
			{
				echo "<a href=site_url('login');>Login</a>";
			}
		?>
		<a href="<?php echo site_url('dashboard/logout'); ?>">Logout</a>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	</body>
</html>