@extends('layouts.qayyumwtf')
@section('content')

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
	                            <img src="{{ asset('images/leona.jpg') }}" alt="Circle Image" class="img-responsive img-raised" style="border-radius:15px">
	                        </div>
	                        <div class="name">
	                        	<br>
	                            <h3 class="title">{{ Auth::user()->name }}</h3>
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

               {{--  <!--Profile Description Starts-->
                <div class="description text-center">
                    <p>form: username</p>
                    <p>form: password</p>
                    <p>form: next-of-kin details? maybe</p>
                </div><!--Profile Description Ends--> --}}

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
				        @if($isadmin == true)
							<div class="row">
	            				<div class="row">
			                    	<div class="col-md-8 col-md-offset-2">
			                    	    <div class="table-responsive">
			                    	    <table class="table">
			                            <thead>
			                                <tr>
			                                    <th class="text-center">Student Name</th>
			                                    <th>Symptom</th>
			                                    <th>Date</th>
			                                    <th>Time</th>
			                                  	<th class="text-center">Actions</th>
			                                </tr>
			                            </thead>
			                            <tbody>
			                            	@foreach($unapprovedapp as $pending_appointment)
			                                <tr>
			                                    <td class="text-center">{{ \App\User::where('id',$pending_appointment->user_id)->value('name') }}</td>
			                                    <td>{{ $pending_appointment->booking_symptom }}</td>
			                                    <td>{{ $pending_appointment->booking_date }}</td>
			                                    <td>{{ $pending_appointment->booking_time }}</td>
			                                    <td class="td-actions">

			                                    	@if(!$pending_appointment->sesi_app)
			                                    	{!! Form::model($pending_appointment, ['route' => ['appointment.destroy', $pending_appointment->id], 'method' => 'DELETE','class'=>'col-md-6']) !!} 
			                                    	<button type="submit" rel="tooltip" class="btn btn-warning" title="Hate It">
			                                            Reject
			                                        </button>
			                                        {!! Form::close() !!}
			                                        {!! Form::model($pending_appointment, ['route' => ['session.update', $pending_appointment->sesi_id], 'method' => 'put','class'=>'col-md-6']) !!} 
				                                        <button type="submit" rel="tooltip" class="btn btn-info" title="Approve It">
				                                            Approve
				                                        </button>
			                                        {!! Form::close() !!}
			                                        @else
			                                        Approved
			                                        @endif
			                                    </td>
			                                </tr>	
			                                @endforeach                               
			                            </tbody>
			                    	    </table>
			                    	    </div>
									</div>
								</div>
							</div>
				        @else
								@if($has_appointment==NULL)
				        			<p style="text-align: center;">You have no upcoming appointment you have a doctor appointment in (time)</p>
				        		@else
				        			@if(!$has_approved)
				        				<p style="text-align: center;">Your appointment booking is being reviewed</p>
				        			@else
				        				<p style="text-align: center;">Your appointment has been approved</p>
				        				<p style="text-align: center;">
				        					Date : <span style="color: red">{{$client_app_det['Date']}}</span>
				        					
				        				</p>
				        				<p style="text-align: center;">
				        					Time : <span style="color: red">{{$client_app_det['Time']}}</span>
				        				</p>


				        			@endif
				        		@endif
						@endif
				        <!--Content for id appointment ends here-->
			        </div>
			    



                    <div class="tab-pane connections" id="mcstatus">
                    	@if($isadmin == true)
                    	<div class="row">
            				<div class="row">
		                    	<div class="col-md-8 col-md-offset-2">
		                    		<!-- Button trigger modal -->
                    				<button type="button" rel="tooltip" class="btn btn-info" title="Sent new MC" data-toggle="modal" data-target="#mcformmodal">Send MC </button>
								</div>
							</div>
						</div>

						{{-- list of all mc --}}
						{{-- {{ $listofmc->links() }} --}}
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
		                            	@foreach($listofmc as $mc)
			                                <tr>
			                                    <td class="text-center">{{$mc->id}}</td>
			                                    <td>{{$mc->illness}}</td>
			                                    <td>{{$mc->created_at}}</td>
			                                    <td class="td-actions text-right">
			                                   		{{-- <button type="button" rel="tooltip" class="btn btn-warning btn-round" title="Preview">
			                                            <i class="material-icons">visibility</i>
			                                        </button> --}}
			                                        <a href="/pdf/{{$mc->id}}.pdf" target="_blank" type="button" rel="tooltip" class="btn btn-info btn-round" title="download">
			                                            <i class="material-icons">file_download</i>
			                                        </a>
			                                        <a type="button" rel="tooltip" class="btn btn-success btn-round" title="share">
			                                            <i class="material-icons">share</i>
			                                        </a>
			                                        {{-- <button type="button" rel="tooltip" class="btn btn-danger btn-round" title="remove">
			                                            <i class="material-icons">close</i>
			                                        </button>--}}<!--content for id mcstatus ends here-->
			                                    </td>
			                                </tr>	
		                               	@endforeach	                               
		                            </tbody>
		                    	    </table>
		                    	    </div>
								</div>
							</div>
						</div>

                    	@else
                    	
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
		                                @foreach($listofmc as $mc)
			                                <tr>
			                                    <td class="text-center">{{$mc->id}}</td>
			                                    <td>{{$mc->illness}}</td>
			                                    <td>{{$mc->created_at}}</td>
			                                    <td class="td-actions text-right">
			                                   		{{-- <button type="button" rel="tooltip" class="btn btn-warning btn-round" title="Preview">
			                                            <i class="material-icons">visibility</i>
			                                        </button> --}}
			                                        <a href="/pdf/{{$mc->id}}.pdf" target="_blank" type="button" rel="tooltip" class="btn btn-info btn-round" title="download">
			                                            <i class="material-icons">file_download</i>
			                                        </a>
			                                        <a type="button" rel="tooltip" class="btn btn-success btn-round" title="share">
			                                            <i class="material-icons">share</i>
			                                        </a>
			                                        {{-- <button type="button" rel="tooltip" class="btn btn-danger btn-round" title="remove">
			                                            <i class="material-icons">close</i>
			                                        </button>--}}<!--content for id mcstatus ends here-->
			                                    </td>
			                                </tr>	
		                               	@endforeach	         		                               
		                            </tbody>
		                    	    </table>
		                    	    </div>
								</div>
							</div>
						</div>

						@endif
					</div>



			    	<!--seeandactstatus starts-->
			        <div class="tab-pane connections" id="seeandactstatus">

			        			<p style="text-align: center"></p>

            		</div><!--seeandactstatus ends-->
            		</div><!--tab content ends-->
							</div>
						</div>
                    </div>
			    </div>
            </div>
        </div>
	</div>
@endsection