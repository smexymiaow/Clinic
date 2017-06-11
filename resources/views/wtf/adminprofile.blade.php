@extends('layouts.qayyumwtf')
@section('content')
<!--landing page starts here-->
<body class="profile-page">
	<div class="page-header header-filter" data-parallax="active" style="background-image: url('klinikredzalogo.jpg');"></div>
	<div class="main main-raised">
		<div class="profile-content">
            <div class="container">
                <div class="row">
	                <div class="col-xs-6 col-xs-offset-3">
        	           <div class="profile">
	                        <div class="avatar">
	                            <img src="meow.jpg" alt="Circle Image" class="img-circle img-responsive img-raised">
	                        </div>
	                        <div class="name">
	                            <h3>You are currently logged in as:</h3>
								<h6 class="title">Clinic Admin</h6>
								<hr>
	                        </div>
	                    </div>
    	            </div>
                    <div class="col-xs-2 follow">
	                   <button class="btn btn-fab btn-primary" rel="tooltip" title="Edit Your Profile">
                            <i class="material-icons">create</i> </button>
	                </div>
                </div>
                <!--Profile Description Starts-->
                <div class="description text-center">
                    <p>Kindly click on the tabs below to manage them:</p>
                </div><!--Profile Description Ends-->
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="profile-tabs">
		                    <div class="nav-align-center">
								<ul class="nav nav-pills nav-pills-icons" role="tablist">
									<li class="active">
			                            <a href="#appointment" role="tab" data-toggle="tab">
											<i class="material-icons">assignment</i>
											Appointment <br>Mgmt.
			                            </a>
			                        </li>
			                        <li>
			                            <a href="#mcstatus" role="tab" data-toggle="tab">
											<i class="material-icons">camera</i>
			                                MC </br>Mgmt.
			                            </a>
			                        </li>
                                    <li>
										<a href="#seeandactstatus" role="tab" data-toggle="tab">
											<i class="material-icons">people</i>
											See and Act </br>Mgmt.
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
@endsection
