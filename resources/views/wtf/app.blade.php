@extends('layouts.qayyumwtf')
@section('content')
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
                    <a href="#" class="btn btn-danger btn-raised btn-lg"><i class="glyphicon-chevron-right"></i> Learn More</a>
				</div>
            </div>
        </div>
    </div>
	<div class="main main-raised">
		<div class="container">
	    	<div class="section text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">Appointment Booking</h2>
                        <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
                    </div>
                </div>
            </div>
            @if($doneappointment)
        	<div class="section section-contacts">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-center title">Set Your Appointment Details</h2>
						<h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>
                        {!! Form::open(['route' => 'appointment.store', 'id' => 'mcpunyeform','class'=>'contact-form']) !!}
                            
                            <div class="row">
                                <div class="col-md-6">
									<div class="form-group label-floating">
                                        <label class="control-label"></label><!-- markup -->
                                        {{ Form::label('booking_date', 'Select date', ['class' => 'control-label']) }}
                                        {{ Form::date('booking_date', Null,['class' => 'form-control pbookingdate']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
									<div class="form-group label-floating">
                                        <label class="control-label">Select time</label>
                                        <select class="selectpicker" name="booking_time" id="bookingtimeselect">
                                        </select>
                                    </div>
                                </div>
                            </div>
							<div class="form-group label-floating"><label class="control-label">Describe briefly your symptoms</label><textarea class="form-control" rows="4" name="booking_symptom"></textarea></div>
                            <div class="row"> <!--Button Starts-->
                                <div class="col-md-4 col-md-offset-4 text-center">
                                    <button class="btn btn-primary btn-raised" type="Submit">Submit</button>
                                </div>
                            </div><!--Button Ends-->
                        </form>
                    </div>
                </div>
            </div>
            @endif
        </div>
	</div>
@endsection