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



<div class="container"> <!--Container starts here-->


<div class="subscribe-line subscribe-line-image" style="background-image: url('books.jpg');">
	        		<div class="container">
	        			<div class="row">
	        				<div class="col-md-6 col-md-offset-3">
	        					<div class="text-center">
	        						<h3 class="title">Searching for an article?</h3>
	        						<p class="description">
	        							Let us assist to find you the article by typing the keyword in the space provided below:
	        						</p>
	        					</div>

	        					<div class="card card-raised card-form-horizontal">
	        						<div class="content">
	        							<form method="" action="">
	        								<div class="row">
	        									<div class="col-sm-8">

	        										<div class="input-group">
	        											<span class="input-group-addon">
	        												<i class="material-icons">search</i>
	        											</span>
	        											<input type="email" value="" placeholder="Enter a keyword here" class="form-control" />
	        										</div>
	        									</div>
	        									<div class="col-sm-4">
	        										<button type="button" class="btn btn-primary btn-block">Search</button>
	        									</div>
	        								</div>
	        							</form>
	        						</div>
	        					</div>

	        				</div>
	        			</div>
	        		</div>
	        	</div>

<!--Thumbnails Start Here-->
<div class="row">
  <h2 class='text-center'>Recent Articles</h2>
  <div class="col-sm-6 col-md-4">
    <div class="card card-blog card-plain" style="background-color: white">
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
    <div class="card card-blog card-plain"  style="background-color: white">
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
    <div class="card card-blog card-plain"  style="background-color: white">
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

<div class="container" style="background-color: white">
<table class="table table-striped table-hover">
  <thead>
  <tr>
    <th>NO.</th>
    <th>TITLE</th>
    <th>AUTHOR(S)</th>
    <th>PUBLISHED DATE</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>1</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
  </tr>
  <tr class="info">
    <td>3</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
  </tr>
  <tr class="success">
    <td>4</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
  </tr>
  <tr class="danger">
    <td>5</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
  </tr>
  <tr class="warning">
    <td>6</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
  </tr>
  <tr class="active">
    <td>7</td>
    <td>Column content</td>
    <td>Column content</td>
    <td>Column content</td>
  </tr>
  </tbody>
</table>

<br>
</div> 
<div class="row">
	<div class="col-md-9">
	</div>
	<div class="col-md-3" style="padding-left: 90px">
	   <td colspan="4"> <button type="button" class="btn btn-success btn-round">View Archived Events <i class="material-icons">keyboard_arrow_right</i></button></td>
	 </div>
</div>

</div><!--end of container-->


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