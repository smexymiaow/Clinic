<!DOCTYPE html>
<!--newly added starts-->
<html lang="{{ app()->getLocale() }}">
<!--newly added ends-->
<html>
<head>
<!--newly added starts-->
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<!--newly added ends-->
	<title>UTP Clinic E-Services System</title> <!--ni testing je in case nk buang, buang all dlm layouts kecuali app.blade-->

	<!-- Fonts and icons -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	
	<!-- CSS Files -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link href="material-kit.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<!-- Body Start Here -->

	


<!--Top NavBar Starts Here-->
<div class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="newHome.blade.php">Home</a> <!--Instead of home, letak nama clinic tu sbb pakai 'brand'-->
    </div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">
      <ul class="nav navbar-nav">
        <li><a href="newArticles.blade.php">Articles</a></li>
        <li><a href="newEvents.blade.php">Events</a></li> <!--ni dh tukar location utk laravvel but xsure boleh masuk x-->
        <li class="dropdown">
          <a href="bootstrap-elements.php" data-target="#" class="dropdown-toggle" data-toggle="dropdown">UTP Clinic e-Services
          <ul class="dropdown-menu">
            <li><a href="newAppointment.blade.php">Appointment</a></li>
            <li><a href="newMCAlert.blade.php">MC Alert</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Other Services</li>
            <li><a href="newSeeAndAct.blade.php">See and Act</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control col-md-8" placeholder="Search" style="padding-top: 11px">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right"> 
        <li><a href="newAboutUs.blade.php">About Us</a></li>
        <li class="dropdown">
          <a href="bootstrap-elements.php" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Account Management
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="newLogin.blade.php">Log In</a></li> <!--logout only appears when have logged in-->
            <li><a class="dropdown-item" href="newMyProfile.blade.php">My Profile</a></li>
            <li><a class="dropdown-item" href="newSettings.blade.php">Settings</a></li>
            <li class="divider"></li>
            <li><a href="newPasswordRecovery.blade.php">Password Recovery</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<!--end of Top Navbar-->


<div class="container">

<!-- full background card-->

<div class="card card-background" style="background-image: url('lux.jpg')">
	    							<div class="content">
	    								<h6 class="category text-info">Welcome to</h6>
	    								<a href="#pablo">
	    									<h3 class="card-title">UTP Clinic e-Services System</h3>
	    								</a>
	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    								<a href="#pablo" class="btn btn-white btn-simple">
	    									<i class="material-icons">subject</i> Learn More
	    								</a>
	    								
	    							</div>
</div>


<!--Colours Panels Start Here-->
<!--For Quick Links, Make that when they click the link, Login box will popout then quickly take them there-->
<div class="col-md-4">
<div class="card">
	    							<div class="content content-primary">
	    								<h5 class="category-social">
	    									<i class="fa fa-newspaper-o"></i> TechCrunch
	    								</h5>
	    								<h4 class="card-title">
	    									<a href="#pablo">"Focus on Your Employees"</a>
	    								</h4>
	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    								<div class="footer text-center">
	    	                                <a href="#pablo" class="btn btn-white btn-round">Read Article</a>
	    	                            </div>
	    							</div>
	    						</div>
</div>
<div class="col-md-4">
<div class="card">
	    							<div class="content content-success">
	    								<h5 class="category-social">
	    									<i class="fa fa-newspaper-o"></i> TechCrunch
	    								</h5>
	    								<h4 class="card-title">
	    									<a href="#pablo">"Focus on Your Employees"</a>
	    								</h4>
	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    								<div class="footer text-center">
	    	                                <a href="#pablo" class="btn btn-white btn-round">Read Article</a>
	    	                            </div>
	    							</div>
	    						</div>
</div>
<div class="col-md-4">
<div class="card">
	    							<div class="content content-warning">
	    								<h5 class="category-social">
	    									<i class="fa fa-newspaper-o"></i> TechCrunch
	    								</h5>
	    								<h4 class="card-title">
	    									<a href="#pablo">"Focus on Your Employees"</a>
	    								</h4>
	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    								<div class="footer text-center">
	    	                                <a href="#pablo" class="btn btn-white btn-round">Read Article</a>
	    	                            </div>
	    							</div>
	    						</div>
</div>

<!--Healthy tips Starts Here-->

	<!--         carousel  -->
	    <div class="section" id="carousel">
			<div class="container">
				<div class="row">\
					<div class="col-md-10 col-md-offset-1">

						<!-- Carousel Card -->
						<div class="card card-raised card-carousel">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<div class="carousel slide" data-ride="carousel">

									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
										<li data-target="#carousel-example-generic" data-slide-to="1"></li>
										<li data-target="#carousel-example-generic" data-slide-to="2"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<img src="morgana.jpg" alt="Awesome Image">
											<div class="carousel-caption">
												<h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4>
											</div>
										</div>
										<div class="item">
											<img src="karma.jpg" alt="Awesome Image">
											<div class="carousel-caption">
												<h4><i class="material-icons">location_on</i> Somewhere Beyond, United States</h4>
											</div>
										</div>
										<div class="item">
											<img src="leona.jpg" alt="Awesome Image">
											<div class="carousel-caption">
												<h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4>
											</div>
										</div>
									</div>

									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
										<i class="material-icons">keyboard_arrow_left</i>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
										<i class="material-icons">keyboard_arrow_right</i>
									</a>
								</div>
							</div>
						</div>
						<!-- End Carousel Card -->

					</div>
				</div>
			</div>
		</div>
<!--         end carousel -->




<!--Thumbnails Start Here-->
<div class="row">
  <div class="col-sm-6 col-md-4" >
    <div class="card card-blog card-plain">
	    							<div class="card-image">
	    								<a href="#pablo">
	    									<img class="img" src="car.jpg" />
	    									<div class="card-title">
	    										This Summer Will be Awesome
	    									</div>
	    								</a>
	    							</div>

	    							<div class="content">
	    								<h6 class="category text-info">Fashion</h6>

	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    							</div>
	    						</div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="card card-blog card-plain">
	    							<div class="card-image">
	    								<a href="#pablo">
	    									<img class="img" src="car.jpg" />
	    									<div class="card-title">
	    										This Summer Will be Awesome
	    									</div>
	    								</a>
	    							</div>

	    							<div class="content">
	    								<h6 class="category text-info">Fashion</h6>

	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    							</div>
	    						</div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="card card-blog card-plain">
	    							<div class="card-image">
	    								<a href="#pablo">
	    									<img class="img" src="car.jpg" />
	    									<div class="card-title">
	    										This Summer Will be Awesome
	    									</div>
	    								</a>
	    							</div>

	    							<div class="content">
	    								<h6 class="category text-info">Fashion</h6>

	    								<p class="card-description">
	    									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
	    								</p>
	    							</div>
	    						</div>
  </div>
</div>
</div> <!--Container ends here-->

</div>

<!--Footer Starts Here-->
<footer class="footer footer-black">
	            		<div class="container">
	            			<p class="footer-brand">Klinik Redza UTP</a>


	            			<ul class="pull-center">
	            				<li>
	            					<a href="#pablo">
	            					   Read Our Privacy Policy
	            					</a>
	            				</li>
	            				<li>
	            					<a href="#pablo">
	            						Contact Us
	            					</a>
	            				</li>
	            				<li>
	            					<a href="#pablo">
	            						Supports and Feedbacks
	            					</a>
	            				</li>
	            			</ul>

	            			<ul class="social-buttons pull-right">
	            				<li>
	            					<a href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-just-icon btn-simple">
	            						<i class="fa fa-twitter"></i>
	            					</a>
	            				</li>
	            				<li>
	            					<a href="https://www.facebook.com/klinikredza24jam/" target="_blank" class="btn btn-just-icon btn-simple">
	            						<i class="fa fa-facebook-square"></i>
	            					</a>
	            				</li>
	            				<li>
	            					<a href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-just-icon btn-simple">
	            						<i class="fa fa-instagram"></i>
	            					</a>
	            				</li>
	            			</ul>

	            		</div>
	            	</footer> <!--Footer ends here-->
</div>
</div>





	<!-- Body Ends Here -->

	<!--   Core JS Files   -->
	<script src="jquery.min.js" type="text/javascript"></script>
	<script src="bootstrap.min.js" type="text/javascript"></script>
	<script src="material.min.js"></script>

	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="nouislider.min.js" type="text/javascript"></script>

	<!--	Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="bootstrap-datepicker.js" type="text/javascript"></script>

	<!--	Plugin for Select Form control, full documentation here: https://github.com/FezVrasta/dropdown.js -->
	<script src="jquery.dropdown.js" type="text/javascript"></script>

	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
	<script src="jquery.tagsinput.js"></script>

	<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
	<script src="jasny-bootstrap.min.js"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="material-kit.js" type="text/javascript"></script>

	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>