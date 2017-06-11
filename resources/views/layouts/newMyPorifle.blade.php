<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

<!--landing page starts here-->
<body class="profile-page">
	


	<div class="page-header header-filter" data-parallax="active" style="background-image: url('meow.jpg');"></div>
	<div class="main main-raised">
		<div class="profile-content">
            <div class="container">
                <div class="row">
	                <div class="col-xs-6 col-xs-offset-3">
        	           <div class="profile">
	                        <div class="avatar">
	                            <img src="qayyum.jpg" alt="Circle Image" class="img-circle img-responsive img-raised">
	                        </div>
	                        <div class="name">
	                            <h3 class="title">Qayyum Marzalan</h3>
								<h6>Musician, Businessman, Student</h6>
								<hr>
	                        </div>
	                    </div>
    	            </div>
                    <div class="col-xs-2 follow">
	                   <button class="btn btn-fab btn-primary" rel="tooltip" title="Edit Your Profile">
                            <i class="material-icons">create</i>
                        </button>
	                </div>
                </div>

                <!--Profile Description Starts-->
                <div class="description text-center">
                    <p>form: username</p>
                    <p>form: password</p>
                    <p>form: next-of-kin details? maybe</p>
                </div><!--Profile Description Ends-->

				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="profile-tabs">
		                    <div class="nav-align-center">
								<ul class="nav nav-pills nav-pills-icons" role="tablist">
									<li class="active">
			                            <a href="#appointment" role="tab" data-toggle="tab">
											<i class="material-icons">assignment</i>
											Appointment <br>Status
			                            </a>
			                        </li>
			                        <li>
			                            <a href="#mcstatus" role="tab" data-toggle="tab">
											<i class="material-icons">camera</i>
			                                MC </br>Status
			                            </a>
			                        </li>
                                    <li>
										<a href="#seeandactstatus" role="tab" data-toggle="tab">
											<i class="material-icons">people</i>
											See and Act </br>Status
										</a>
									</li>

			                    </ul>


							</div>
						</div>
						<!-- End Profile Tabs -->
					</div>
                </div>

                <!--Tab Content Starts here-->
                <div class="tab-content">

			        <div class="tab-pane active work" id="appointment">
				        <!--Content for id appointment starts here-->

				        			<p style="text-align: center;">You have no upcoming appointment/ you have a doctor appointment in (time)</p>
				        			<p style="text-align: center;">your appointment booking is being reviewed/has been approved</p>
				        			<p style="text-align: center;">buat option utk reschedule, but then kena tunggu approval again from the doc</p>

				        <!--Content for id appointment ends here-->
			        </div>
			    



                    <div class="tab-pane connections" id="mcstatus">
                       <div class="row">
            				<div class="row">
		                    <div class="col-md-8 col-md-offset-2">
		                        <div class="table-responsive">
		                        <table class="table">
		                            <thead>
		                                <tr>
		                                    <th class="text-center">MC ID</th>
		                                    <th>Illness</th>
		                                    <th>Issuance Date</th>
		                                  	<th class="text-right">Actions</th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                <tr>
		                                    <td class="text-center">0001</td>
		                                    <td>Fever</td>
		                                    <td>dd/mm/yy</td>
		                                    <td class="td-actions text-right">
		                                    	<button type="button" rel="tooltip" class="btn btn-warning btn-round" title="Preview">
		                                            <i class="material-icons">visibility</i>
		                                        </button>
		                                        <button type="button" rel="tooltip" class="btn btn-info btn-round" title="download">
		                                            <i class="material-icons">file_download</i>
		                                        </button>
		                                        <button type="button" rel="tooltip" class="btn btn-success btn-round" title="share">
		                                            <i class="material-icons">share</i>
		                                        </button>
		                                        <button type="button" rel="tooltip" class="btn btn-danger btn-round" title="remove">
		                                            <i class="material-icons">close</i>
		                                        </button>
		                                    </td>
		                                </tr>
		                                <tr>

		                                    <td class="text-center">0002</td>
		                                    <td>Gum Injury</td>
		                                    <td>dd/mm/yy</td>
		                                    <td class="td-actions text-right">
		                                    	<button type="button" rel="tooltip" class="btn btn-warning btn-round" title="Preview">
		                                            <i class="material-icons">visibility</i>
		                                        </button>
		                                        <button type="button" rel="tooltip" class="btn btn-info btn-round" title="download">
		                                            <i class="material-icons">file_download</i>
		                                        </button>
		                                        <button type="button" rel="tooltip" class="btn btn-success btn-round" title="share">
		                                            <i class="material-icons">share</i>
		                                        </button>
		                                        <button type="button" rel="tooltip" class="btn btn-danger btn-round" title="remove">
		                                            <i class="material-icons">close</i>
		                                        </button>
		                                    </td>
		                                </tr>
		                                <tr>
		                                    <td class="text-center">0003</td>
		                                    <td>Chicken Pox</td>
		                                    <td>dd/mm/yy</td>
		                                    <td class="td-actions text-right">
		                                   		<button type="button" rel="tooltip" class="btn btn-warning btn-round" title="Preview">
		                                            <i class="material-icons">visibility</i>
		                                        </button>
		                                        <button type="button" rel="tooltip" class="btn btn-info btn-round" title="download">
		                                            <i class="material-icons">file_download</i>
		                                        </button>
		                                        <button type="button" rel="tooltip" class="btn btn-success btn-round" title="share">
		                                            <i class="material-icons">share</i>
		                                        </button>
		                                        <button type="button" rel="tooltip" class="btn btn-danger btn-round" title="remove">
		                                            <i class="material-icons">close</i>
		                                        </button><!--content for id mcstatus ends here-->
		                                    </td>
		                                </tr>		                               
		                            </tbody>
		                        </table>
		                        </div>
								</div>
								</div>
								</div>
								</div>



			    	<!--seeandactstatus starts-->
			        <div class="tab-pane connections" id="seeandactstatus">

			        			<p style="text-align: center">test</p>

            		</div><!--seeandactstatus ends-->
            		</div><!--tab content ends-->
                   


							</div>
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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>