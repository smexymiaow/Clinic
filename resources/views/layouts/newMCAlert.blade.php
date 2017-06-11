<!DOCTYPE html>
<html>
<head>
	<title>UTP Clinic E-Services System</title>

	<!-- Fonts and icons -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	
	<!-- CSS Files -->
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
      <a class="navbar-brand" href="../newHome/index.php">Home</a> <!--Instead of home, letak nama clinic tu sbb pakai 'brand'-->
    </div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">
      <ul class="nav navbar-nav">
        <li><a href="../newArticles/index.php">Articles</a></li>
        <li><a href="../newEvents/index.php">Events</a></li>
        <li class="dropdown">
          <a href="bootstrap-elements.php" data-target="#" class="dropdown-toggle" data-toggle="dropdown">UTP Clinic e-Services
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="../newAppointment/index.php">Appointment</a></li>
            <li><a href="../newMCAlert/index.php">MC Alert</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Other Services</li>
            <li><a href="../newSeeAndAct/index.php">See and Act</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control col-md-8" placeholder="Search" style="padding-top: 11px">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right"> 
        <li><a href="../newAboutUs/index.php">About Us</a></li>
        <li class="dropdown">
          <a href="bootstrap-elements.php" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Account Management
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../newLogin/index.php">Log In</a></li> <!--logout only appears when have logged in-->
            <li><a class="dropdown-item" href="../newMyProfile/index.php">My Profile</a></li>
            <li><a class="dropdown-item" href="../newSettings/index.php">Settings</a></li>
            <li class="divider"></li>
            <li><a href="../newPasswordRecovery/index.php">Password Recovery</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<!--end of Top Navbar-->



<!--landing page starts here-->
<body class="landing-page">
    

    <div class="page-header header-filter" data-parallax="active" style="background-image: url('utp ch.jpg');">
        <div class="container">
            <div class="row">
				<div class="col-md-6">
					<h1 class="title">UTP Clinic e-Services</h1>
                    <h4>We aim to provide you with the best of convenience at UTP Klinik Redza. These services are exclusively for UTP Students and Staffs.</h4>
                    <h4>Our e-services include:</h4>
                    <ul></ul>
                    	<li style="padding-left: 30px">Appointment Booking</li>
                    	<li style="padding-left: 30px">MC Alert</li>
                    	<li style="padding-left: 30px">See and Act</li>
                    <br />
                    <a href="#" class="btn btn-danger btn-raised btn-lg">
						<i class="glyphicon-chevron-right"></i> Learn More
					</a>
				</div>
            </div>
        </div>
    </div>

	<div class="main main-raised">
		<div class="container">
	    	<div class="section text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">MC Alert</h2>
                        <h5 class="description">explain on digital MC. tell user to go to 'my profile' to check MC status.</h5>
                    </div>
                </div>
            </div>


        	<div class="section section-contacts">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-center title">Having A Problem With Your Digital MC?</h2>
						<h4 class="text-center description">Kindly fill in the form below:</h4>
                        <form class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
									<div class="form-group label-floating">
										<label class="control-label">MC ID</label>
										<input type="email" class="form-control">
									</div>
                                </div>
                                <div class="col-md-6">
									<div class="form-group label-floating">
										<label class="control-label">Issuance Date</label>
										<input type="email" class="form-control">
									</div>
                                </div>
                            </div>

							<div class="form-group label-floating">
								<label class="control-label">Your Problem</label>
								<input type="email" class="form-control">
							</div>

                            <div class="form-group label-floating">
                                <label class="control-label">Corrective Action</label>
                                <input type="email" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-center">
                                    <button class="btn btn-primary btn-raised">
										Send Message
									</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

	</div>


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
</body>
</html>