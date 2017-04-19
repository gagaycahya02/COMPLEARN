<!doctype html>
<html>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />

	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="icon" href="../../favicon.ico">
		<title>COMPLEARN | Home</title>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/jumbotron.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">
	</head>
	
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

		@font-face
		{
			font-family:'Montserrat-Regular';
			src:url(<?php echo base_url('assets/fonts/Montserrat-Regular.ttf'); ?>);
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

		.navbar-inverse {
		    background-image:none;
		    background-image:none;
		    background-image:none;
		    background-image:none;
		    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3c3c3c', endColorstr='#ff222222', GradientType=0);
		    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
		    background-repeat: repeat-x;
		    background-color:#f8f9f9;
   			border-color:#f8f9f9;
		}

		.navbar-inverse .navbar-brand, .navbar-inverse .navbar-nav>li>a {
		    text-shadow:none;
		}

		.jumbotron {
		    padding: 30px;
		    margin-bottom: 30px;
		    color: inherit;
		    background-color: #f3f3f3;
		}

		.navbar-inverse .navbar-toggle {
		    border-color: #F9FAFA;
		}

		.navbar-toggle {
		    position: relative;
		    float: right;
		    padding: 9px 10px;
		    margin-top: 8px;
		    margin-right: 15px;
		    margin-bottom: 8px;
		    background-color: transparent;
		    background-image: none;
		    border: 1px solid transparent;
		    border-radius: 0px;
		}

		.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
		    border-color: #E0DDDD;
		}
	</style>

	<body>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	      <div class="container-fluid">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" style="background:#58c9fa;">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <div id="website-logo">
	          	<a class="navbar-brand" href="<?php echo base_url(); ?>">COMPLEARN</a>
	          </div>
	        </div>
	        <div class="navbar-collapse collapse" id="navbar-style">
	            <ul class="nav navbar-nav navbar-right" id="nav-web-content">
	              <li><a href="<?php echo base_url(); ?>">Home</a></li>
	              <li><a href="">Learn</a></li>
	              <li><a href="#articles">Articles</a></li>
	              <li><a href="">News</a></li>
	              <li><a href="">Contact</a></li>
	              <li><a href="">About Us</a></li>
	              <li style="margin:0px auto;background:#ff8f8f;border-bottom:#ff8f8f;width:80px;"><a style="color:white;text-align:center;" href="<?php echo site_url('login'); ?>">Login</a></li>
	            </ul>
	        </div><!--/.navbar-collapse -->
	      </div>
	    </div>

	    <!-- Slider -->
	    <section>
	    	<aside>
			    <div class="jumbotron">
			      <div class="container-fluid" id="container-style">
			        <h1 style="font-family:'Montserrat-Bold';text-transform:uppercase;text-align:center;">html5 css3 javascript and more technologies</h1>
			        <p style="text-align:center;font-family:'Montserrat-Regular';font-size:19px;">YOU CAN LEARN IN THIS WEBSITE, THIS IS FREE TO IMPROVE YOUR SKILLS</p>
			      </div>
			    </div>
		    </aside>
		</section>
		<!-- End of Slider -->

		<!-- Body -->
		<section>
			<aside>
				<div class="container-fluid">
					<div class="row" id="articles"> 
						<div class="col-md-9">
							<div class="name-of-category">
								<h3>
									Articles
								</h3>
							</div>
						</div>

						<div class="col-md-3">
							<div id="btn-more-article">
								<a href="">More Articles</a>
							</div>
						</div>
					</div>
					
					<!-- Row 1 -->
					<div class="row">
						<div class="col-md-3 col-sm-3">
							<div class="minipost-item">
								<div class="minipost-thumb">
									<a href="<?php echo site_url('HTML_CSS3_Tutorial_Terbaik'); ?>">
										<img src="<?php echo base_url('assets/images/web-content/creative-css3-tutorials.jpg'); ?>" alt="" width="307px" height="190px">
									</a>

									<div id="post-category-2">
										<a href="<?php echo site_url('HTML_CSS3_Tutorial_Terbaik'); ?>">Articles</a>
									</div>
								</div>
								

								<div class="minipost-desc">
									<div class="post-time">Jul , 11 2016
									</div>

									<div class="post-title">
										<h3>
											<a href="<?php echo site_url('HTML_CSS3_Tutorial_Terbaik'); ?>">10+ HTML CSS3 Tutorial Terbaik</a>
										</h3>
									</div>
								</div>	
	
							</div>
						</div>

						<div class="col-md-3">
							<div class="minipost-item">
								<div class="minipost-thumb">
									<a href="">
										<img src="<?php echo base_url('assets/images/web-content/maxresdefault.jpg'); ?>" alt="" width="307px" height="190px">
									</a>

									<div id="post-category-4">
										<a href="">Articles</a>
									</div>
								</div>

								<div class="minipost-desc">
									<div class="post-time">Jul , 11 2016
									</div>

									<div class="post-title">
										<h3>
											<a href="">Game Engine Terbaik yang Kamu Harus Pakai</a>
										</h3>
									</div>
								</div>		
							</div>
						</div>

						<div class="col-md-3">
							<div class="minipost-item">
								<div class="minipost-thumb">
									<a href="">
										<img src="<?php echo base_url('assets/images/web-content/Templating-Engines-for-JavaScript.png'); ?>" alt="" width="307px" height="190px">
									</a>

									<div id="post-category-5">
										<a href="">Articles</a>
									</div>
								</div>

								<div class="minipost-desc">
									<div class="post-time">Jul , 11 2016
									</div>

									<div class="post-title">
										<h3>
											<a href="">Framework JavaScript yang Kamu Harus Coba</a>
										</h3>
									</div>
								</div>		
							</div>
						</div>

						<div class="col-md-3">
							<div class="minipost-item">
								<div class="minipost-thumb">
									<a href="">
										<img src="<?php echo base_url('assets/images/web-content/0001494_search-engine-powered-by-mongodb.jpeg'); ?>" alt="" width="307px" height="190px">
									</a>

									<div id="post-category-6">
										<a href="">Articles</a>
									</div>
								</div>

								<div class="minipost-desc">
									<div class="post-time">Jul , 11 2016
									</div>

									<div class="post-title">
										<h3>
											<a href="">Kenalan dengan MongoDB	</a>
										</h3>
									</div>
								</div>		
							</div>
						</div>
					</div>
					<!-- End of Row 1-->
					
					<!-- Row 2 -->
					<div class="row">
						<div class="col-md-3">
							<div class="minipost-item">
								<div class="minipost-thumb">
									<a href="">
										<img src="<?php echo base_url('assets/images/web-content/browser-extention-main.jpg'); ?>" alt="" width="307px" height="190px">
									</a>

									<div id="post-category-8">
										<a href="">Articles</a>
									</div>
								</div>

								<div class="minipost-desc">
									<div class="post-time">Jul , 11 2016
									</div>

									<div class="post-title">
										<h3>
											<a href="">Ekstensi Browser untuk Kamu para Developer</a>
										</h3>
									</div>
								</div>		
							</div>
						</div>

						<div class="col-md-3">
							<div class="minipost-item">
								<div class="minipost-thumb">
									<a href="">
										<img src="<?php echo base_url('assets/images/web-content/vulkan_slide01.jpg'); ?>" alt="" width="307px" height="190px">
									</a>

									<div id="post-category-7">
										<a href="">Articles</a>
									</div>
								</div>

								<div class="minipost-desc">
									<div class="post-time">Jul , 11 2016
									</div>

									<div class="post-title">
										<h3>
											<a href="">Kenalan dengan Vulkan</a>
										</h3>
									</div>
								</div>		
							</div>
						</div>

						<div class="col-md-3">
							<div class="minipost-item">
								<div class="minipost-thumb">
									<a href="">
										<img src="<?php echo base_url('assets/images/web-content/php_development_services_india.jpg'); ?>" alt="" width="307px" height="190px">
									</a>

									<div id="post-category-9">
										<a href="">Articles</a>
									</div>
								</div>

								<div class="minipost-desc">
									<div class="post-time">Jul , 11 2016
									</div>

									<div class="post-title">
										<h3>
											<a href="">Framework PHP yang Kamu Harus Coba</a>
										</h3>
									</div>
								</div>		
							</div>
						</div>

						<div class="col-md-3">
							<div class="minipost-item">
								<div class="minipost-thumb">
									<a href="">
										<img src="<?php echo base_url('assets/images/web-content/logo-neo4j.svg'); ?>" alt="" width="307px" height="190px">
									</a>

									<div id="post-category-7">
										<a href="">Articles</a>
									</div>
								</div>

								<div class="minipost-desc">
									<div class="post-time">Jul , 11 2016
									</div>

									<div class="post-title">
										<h3>
											<a href="">Kenalan dengan Neo4j</a>
										</h3>
									</div>
								</div>		
							</div>
						</div>
					</div>
					<!-- End of Row 2-->
				</div>
			</aside>
		</section>
		<!-- End of Slider -->

		<!-- Footer -->
		<footer>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div id="copyright">
							<h6>Copyright &copy; 2016 COMPLEARN.All rights reserved.</h6>
						</div>
					</div>
					
					<!-- <div class="col-md-2">
						<div id="web-logo">
							<h4>COMPLEARN</h4>
						</div>
					</div> -->
				</div>

				<div class="row">
					<div class="col-md-12">
						<div id="web-logo">
							<h4>COMPLEARN</h4>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End of Footer -->

		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url("assets/js/config.js"); ?>"></script>
	</body>
</html>