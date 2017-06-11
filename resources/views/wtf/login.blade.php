@extends('layouts.qayyumwtf')
@section('content')

<div class="page-header header-filter" style="background-image: url('healthy.jpg'); background-size: cover; background-position: top center;">
		<div class="container">  <!--Container starts here-->
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
					<div class="card card-signup">
						<form class="form" method="" action="">
							<div class="header header-primary text-center">
								<h4 class="card-title">Log in</h4>
							</div>
							<div class="content">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">face</i></span>
									<input type="text" class="form-control" placeholder="Username...">
								</div>
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">lock_outline</i></span>
									<input type="password" placeholder="Password..." class="form-control" />
								</div>
							</div>
							<div class="footer text-center">
								<a href="#pablo" class="btn btn-primary btn-simple btn-wd btn-lg">Get Started</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>  <!--end of container-->
</div> <!--end page header filter-->

@endsection