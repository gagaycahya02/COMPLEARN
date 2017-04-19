<!doctype html>
<html>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	
	<head>
		<title>COMPLEARN | Login</title>
	</head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/signin.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/config.css'); ?>">
	<style type="text/css">
		@font-face
		{
			font-family:'Lato-Thin';
			src:url(<?php echo base_url('assets/fonts/Lato-Thin.ttf'); ?>);
		}

		@font-face
		{
			font-family:'Montserrat-Bold';
			src:url(<?php echo base_url('assets/fonts/Montserrat-Bold.ttf'); ?>);
		}

		.form-control:focus {
		    border-color: #66afe9;
		    outline: 0;
		    -webkit-box-shadow: none;
		    box-shadow:none;
		}

		.form-control {
		    display: block;
		    width: 100%;
		    height: 34px;
		    padding: 6px 12px;
		    font-size: 14px;
		    line-height: 1.42857143;
		    color: #d1d3d5;
		    background-image: none;
		    border: 1px solid #ccc;
		    border-radius: 2px;
		    -webkit-box-shadow:none;
		    box-shadow:none;
		    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
		    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
		    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
		    margin-top:20px;
		}

		.btn-lg, .btn-group-lg>.btn {
		    padding: 10px 16px;
		    font-size: 18px;
		    line-height: 1.33;
		    border-radius:2px;
		}
	</style>
	<body>
	    <div class="container">
	    	<div id="form-background">
	    		<?php echo form_open('login/checkUserData','class= "form-signin" role="form"'); ?>
		      <form class="form-signin" role="form" accept-charset="UTF-8" method="post">
		      	<div id="logo">
		        	<a href="<?php echo base_url(); ?>" style="text-decoration:none;"><h3 class="form-signin-heading" style="text-align:center;">COMPLEARN</h3></a>
		        </div>
				
				<div id="login-form">
			        <input type="email" autocomplete="off" class="form-control" name="user_email" placeholder="EMAIL ADDRESS" required>
			        <input type="password" autocomplete="off" class="form-control" name="user_password" placeholder="PASSWORD" required>
			        <input class="btn btn-lg btn-block" type="submit" value="LOGIN" name="login">
		        </div>
		      </form>
		      <?php echo form_close(); ?>

		      <div id="or">
		      	OR	
		      </div>

		      <div id="login-with-facebook" class="btn btn-lg btn-block">
		      	<img src="<?php echo base_url('assets/images/facebook-logo.svg'); ?>" width="15px" height="15px" alt="">
		      	<a href="">LOGIN WITH FACEBOOK</a>
		      </div>

		      <div id="login-with-twitter" class="btn btn-lg btn-block">
		      	<img src="<?php echo base_url('assets/images/twitter-logo-silhouette.svg'); ?>" width="20px" height="20px" alt="">
		      	<a href="">LOGIN WITH TWITTER</a>
		      </div>

		      <div id="login-with-google" class="btn btn-lg btn-block">
		      	<img src="<?php echo base_url('assets/images/google-plus.svg'); ?>" width="20px" height="20px" alt="">
		      	<a href="">LOGIN WITH GOOGLE</a>
		      </div>

		      <div id="forgot-password">
		      	<a href="">FORGOT PASSWORD ?</a>
		      </div>

		      <div id="signup">
		      	NEW HERE ?.<a href="">SIGN UP</a>
		      </div>
	      </div>
	    </div>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url(
		'assets/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url(
		'assets/js/config.js'); ?>"></script>
	</body>
</html>