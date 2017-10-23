<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>SMART BOOTSTRAP THEME by creativeLabs</title> 
	<meta name="description" content="Smart Bootstrap Theme"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
	<meta name="author" content="Łukasz Holeczek from creativeLabs"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/style.min.css" rel="stylesheet">
		
	<link href="assets/css/parallax-slider.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="assets/js/respond.min.js"></script>
		
	<![endif]-->

</head>
<body>
	
	<!--start: Navbar -->
	<nav class="navbar navbar-default" role="navigation">		
		<!--start: Container -->
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
	    	<div class="navbar-header">
	      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
	        		<span class="sr-only">Toggle navigation</span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	      		</button>
	      		<a class="navbar-brand" href="index.html"><i class="fa fa-code"></i> Sma<span>rt</span>.</a>
	    	</div>

	    	<!-- Collect the nav links, forms, and other content for toggling -->
	    	<div class="collapse navbar-collapse" id="main-navigation">
	      		<ul class="nav navbar-right navbar-nav">
					<li class="dropdown">
            			<a href="login.blade.php#" class="dropdown-toggle" data-toggle="dropdown">Home<b class="caret"></b></a>
            			<ul class="dropdown-menu">
							<li><a href="index.html">Home standard</a></li>
              				<li><a href="index2.html">Home alternative</a></li>
							<li><a href="index3.html">Home alternative 2</a></li>
							<li><a href="index4.html">Home alternative 3</a></li>
            			</ul>
          			</li>
          			<li ><a href="about.blade.php">About</a></li>
					<li class="active dropdown">
            			<a href="login.blade.php#" class="dropdown-toggle" data-toggle="dropdown">Features<b class="caret"></b></a>
            			<ul class="dropdown-menu">
              				<li><a href="social-icons.html">Social Icons</a></li>
							<li><a href="fontawesome.html">Font Awesome</a></li>
							<li><a href="halflings.html">Halflings</a></li>
							<li><a href="glyphicons.html">Glyphicons PRO</a></li>
							<li><a href="sliders.html">Sliders</a></li>
							<li><a href="typography.html">Typography</a></li>
							<li><a href="shortcodes.html">Shortcodes</a></li>
							<li><a href="list-styles.html">List Styles</a></li>
							<li><a href="charts.html">Charts</a></li>
							<li><a href="login.blade.php">Login</a></li>
							<li><a href="register.blade.php">Register</a></li>
            			</ul>
          			</li>
					<li class="dropdown">
            			<a href="login.blade.php#" class="dropdown-toggle" data-toggle="dropdown">Portfolio<b class="caret"></b></a>
            			<ul class="dropdown-menu">
              				<li><a href="portfolio3.html">3 Columns</a></li>
							<li><a href="portfolio4.html">4 Columns</a></li>
            			</ul>
          			</li>									
					<li ><a href="services.html">Services</a></li>
					<li ><a href="pricing.html">Pricing</a></li>
					<li ><a href="blog.html">Blog</a></li>
          			<li ><a href="contact.blade.php">Contact</a></li>
        		</ul>
	    	</div><!-- /.navbar-collapse -->		
		</div>
		<!--/.container-->			
	</nav>
	<!--end: Navbar -->
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2 style="text-align:center; width: 100%; padding: 10px 0px 5px 0px">Log in to your account</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Container -->
	<div class="container">
		
		<!-- start: Login Box-->
		<div class="row-fluid">
		
			<div class="lr-page span4 offset4">

				<div id="login-box">

					<!-- start: Row -->
					<div class="row-fluid">

						<div id="login-form" class="col-sm-12">

							<div class="page-title-small">

								<h3>use your account</h3>

							</div>

							<a href="" class="facebook_connect">
								<div class="img"><i class="fa fa-facebook"></i></div>
								<div class="text">Login with Facebook</div>
							</a>
							<a href="" class="twitter_connect">
								<div class="img"><i class="fa fa-twitter"></i></div>
								<div class="text">Login with Twitter</div>
							</a>

							<div class="page-title-small">

								<h3>or</h3>

							</div>

							<form method="post" action="">

								<div class="form-group">
									<input type="text" id="user" name="user" type="text" class="form-control" value="" placeholder="username"/>
								</div>
									
								<div class="form-group">
									<input type="password" id="pass" name="pass" type="text" class="form-control" value="" placeholder="password"/>
								</div>

								<div class="row-fluid">

									<div class="remember">
										<input id="remember" name="remember" type="checkbox" value="1"/> Remember me!
									</div>

									<div class="forgot">
										<a href="login.blade.php#">Forgot password?</a>
									</div>

								</div>	

								<div class="actions">

									<button type="submit" class="btn btn-primary col-sm-12">Login!</button>

								</div>

							</form>

						</div>

					</div>
					<!-- end: Row -->	

				</div>
				<!-- end: Login Box  -->
				
			</div>	
			
      	</div>
		
	</div>
	<!--end: Container-->
						
	<!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-sm hidden-xs">

		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Logo -->
				<div class="col-sm-2">
					<div id="footer-menu-logo">
						<a class="brand" href="login.blade.php#">Sma<span>rt</span>.</a>
					</div>
				</div>
				<!-- end: Footer Menu Logo -->

				<!-- start: Footer Menu Links-->
				<div class="col-sm-9">
					
					<div id="footer-menu-links">

						<ul id="footer-nav">

							<li><a href="index.html">Start</a></li>

							<li><a href="about.blade.php">About</a></li>

							<li><a href="services.html">Services</a></li>

							<li><a href="pricing.html">Pricing</a></li>
							
							<li><a href="contact.blade.php">Contact</a></li>

						</ul>

					</div>
					
				</div>
				<!-- end: Footer Menu Links-->

				<!-- start: Footer Menu Back To Top -->
				<div class="col-sm-1">
						
					<div id="footer-menu-back-to-top">
						<a href="login.blade.php#"></a>
					</div>
				
				</div>
				<!-- end: Footer Menu Back To Top -->
			
			</div>
			<!-- end: Row -->
			
		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->

	<!-- start: Footer -->
	<div id="footer">
		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				<div class="col-sm-3">
					
					<h3>About Us</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
					</p>
						
				</div>
				<!-- end: About -->

				<!-- start: Photo Stream -->
				<div class="col-sm-3">
					
					<h3>Photo Stream</h3>
					<div class="flickr-widget">
							<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&display=latest&size=s&layout=x&source=user&user=29609591@N08"></script>
						<div class="clear"></div>
					</div>
					
				</div>
				<!-- end: Photo Stream -->

				<div class="col-sm-6">
				
					<!-- start: Follow Us -->
					<h3>Follow Us!</h3>
					<ul class="social-grid">
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-twitter">
											<a href="http://twitter.com/BootstrapMaster"><i class="fa fa-twitter"></i></a>
										</div>
										<div class="social-info-back social-twitter-hover">
											<a href="http://twitter.com/BootstrapMaster"><i class="fa fa-twitter"></i></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-facebook">
											<a href="http://facebook.com/BootstrapMaster"><i class="fa fa-facebook"></i></a>
										</div>
										<div class="social-info-back social-facebook-hover">
											<a href="http://facebook.com/BootstrapMaster"><i class="fa fa-facebook"></i></a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-dribbble">
											<a href="http://dribbble.com"><i class="fa fa-dribbble"></i></a>
										</div>
										<div class="social-info-back social-dribbble-hover">
											<a href="http://dribbble.com"><i class="fa fa-dribbble"></i></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-flickr">
											<a href="http://flickr.com"><i class="fa fa-flickr"></i></a>
										</div>
										<div class="social-info-back social-flickr-hover">
											<a href="http://flickr.com"><i class="fa fa-flickr"></i></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
					</ul>
					<!-- end: Follow Us -->
				
					<!-- start: Newsletter -->
					<h3>Newsletter</h3>
					<form id="newsletter">
						
						<p>Please leave us your email</p>
						<div class="row">
							<div class="col-lg-12">
								<label>@:</label>
						    	<div class="input-group">
						      		<input type="text" class="form-control">
						      		<span class="input-group-btn">
						        		<button class="btn btn-default" type="button">Submit!</button>
						      		</span>
						    	</div><!-- /input-group -->
						  	</div><!-- /.col-->
						</div>
					</form>
					<!-- end: Newsletter -->
				
				</div>
				
			</div>
			<!-- end: Row -->	
			
		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Footer -->

	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
			<div class="col-sm-12">
				
				<p>
					&copy; 2014, <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">creativeLabs</a>. <a href="http://bootstrapmaster.com">Bootstrap Themes</a> by BootstrapMaster. Made in Poland <img src="assets/img/poland2.png" alt="Poland" style="margin-top:-4px"> Prototyped with brix.io <a href="http://brix.io">Interface Builder</a> 
				</p>
				
			</div>
	
		</div>
		<!-- end: Container  -->
		
	</div>	
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery-1.9.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.isotope.min.js"></script>
<script src="assets/js/jquery.imagesloaded.js"></script>
<script src="assets/js/flexslider.js"></script>
<script src="assets/js/carousel.js"></script>
<script src="assets/js/jquery.cslider.js"></script>
<script src="assets/js/slider.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>

<script src="assets/js/excanvas.js"></script>
<script src="assets/js/jquery.flot.js"></script>
<script src="assets/js/jquery.flot.pie.min.js"></script>
<script src="assets/js/jquery.flot.stack.js"></script>
<script src="assets/js/jquery.flot.resize.min.js"></script>

<script src="assets/js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>