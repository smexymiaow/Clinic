@extends('layouts.qayyumwtf')
@section('content')

<body class="landing-page"><!--landing page starts here-->
    <div class="page-header header-filter" data-parallax="active" style="background-image: url('utp ch.jpg');">
        <div class="container"><!--Container starts-->
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
						<i class="glyphicon-chevron-right"></i> Learn More</a>
				</div>
            </div><!--row ends-->
        </div><!--Container ends-->
    </div><!--Page header filter ends-->
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
            </div><!--Row ends-->
        </div>
    </div>
@endsection