<!DOCTYPE html>
<html>
<head>
	<title>UTP Clinic E-Services System</title>

	<!-- Fonts and icons -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

	
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
			<a class="navbar-brand" href="{{ route('home') }}">Home</a> <!--Instead of home, letak nama clinic tu sbb pakai 'brand'-->
	    </div>
	    <div class="navbar-collapse collapse navbar-inverse-collapse">
	      	<ul class="nav navbar-nav">
	        	<li><a href="{{ route('articles') }}">Articles</a></li>
	        	<li><a href="{{ route('events') }}">Events</a></li>
	        	<li class="dropdown">
	        		<a href="bootstrap-elements.php" data-target="#" class="dropdown-toggle" data-toggle="dropdown">UTP Clinic e-Services<b class="caret"></b></a>
		          	<ul class="dropdown-menu">
		            	<li><a href="{{ route('app') }}">Appointment</a></li>
		            	<li><a href="{{ route('mcalert') }}">MC Alert</a></li>
		            	<li class="divider"></li>
		            	<li class="dropdown-header">Other Services</li>
		            	<li><a href="{{ route('seenact') }}">See and Act</a></li>
		          	</ul>
	        	</li>
	      	</ul>
				<form class="navbar-form navbar-left">
					<div class="form-group">
						<input type="text" class="form-control col-md-8" placeholder="Search" style="padding-top: 11px">
					</div>
				</form>
	      	<ul class="nav navbar-nav navbar-right"> 
	        	<li><a href="{{ route('aboutus') }}">About Us</a></li>
        		@if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                	<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                            	<a href="{{ route('profile') }}">
                                    <i class="material-icons">accessibility</i> Profile
                                </a>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="material-icons">input</i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
          		@endif
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
	<script>
		$('.datepicker').datepicker({
			weekStart:1
		});
	</script>
</body>
</html>