<!DOCTYPE html>
<html>
<head>
	<title>UTP Clinic E-Services System</title>

	<!-- Fonts and icons -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	
	<!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material-kit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
	
</head>
<body> <!-- Body Start Here -->
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
	        	<li><a href="../newArticles/index.php">Articles</a>
	        	</li>
	        	<li><a href="../newEvents/index.php">Events</a>
	        	</li>
	        	<li class="dropdown">
	        		<a href="bootstrap-elements.php" data-target="#" class="dropdown-toggle" data-toggle="dropdown">UTP Clinic e-Services<b class="caret"></b></a>
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
	        		<a href="bootstrap-elements.php" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Account Management<b class="caret"></b></a>
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
</div> <!--end of Top Navbar-->

@yield('content')

	<!-- Body Ends Here -->
	<!--Footer Starts Here-->
	<footer class="footer footer-black">
		<div class="container">
			<p class="footer-brand">Klinik Redza UTP</p>
	        <ul class="pull-center">
	            <li><a href="#pablo">Read Our Privacy Policy</a></li>
	            <li><a href="#pablo">Contact Us</a></li>
	            <li><a href="#pablo">Supports and Feedbacks</a></li>
	        </ul>
	        <ul class="social-buttons pull-right">
	        	<li><a href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-just-icon btn-simple"><i class="fa fa-twitter"></i></a></li>
	            <li><a href="https://www.facebook.com/klinikredza24jam/" target="_blank" class="btn btn-just-icon btn-simple"><i class="fa fa-facebook-square"></i></a></li>
	            <li><a href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-just-icon btn-simple"><i class="fa fa-instagram"></i></a></li>
	        </ul>
		</div>
	</footer> <!--Footer ends here-->

	<!--   Core JS Files   -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/material.min.js') }}"></script>
	<script src="{{ asset('js/nouislider.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('js/jquery.dropdown.js') }}"></script>
	<script src="{{ asset('js/jquery.tagsinput.js') }}"></script>
	<script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/material-kit.js') }}"></script>
</body>
</html>