@extends('layouts.qayyumwtf')
@section('content')
<div class="container"><!--Container starts here-->	
    <div class="section" id="carousel"><!--carousel-->
		<div class="container"><h2 class='text-center'>Events Highlight</h2>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="card card-raised card-carousel"><!-- Carousel Card -->
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<div class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators"><!-- Indicators -->
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner"><!-- Wrapper for slides -->
									<div class="item active">
										<img src="morgana.jpg" alt="Awesome Image">
										<div class="carousel-caption">
											<h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4>
										</div>
									</div>
									<div class="item">
										<img src="karma.jpg" alt="Awesome Image">
										<div class="carousel-caption">
											<h4><i class="material-icons">location_on</i> Somewhere Beyond, United States</h4>
										</div>
									</div>
									<div class="item">
										<img src="leona.jpg" alt="Awesome Image">
										<div class="carousel-caption">
											<h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4>
										</div>
									</div>
								</div>
								<!-- Controls -->
								<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
									<i class="material-icons">keyboard_arrow_left</i></a>
								<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
									<i class="material-icons">keyboard_arrow_right</i></a>
							</div>
						</div>
					</div><!-- End Carousel Card -->
				</div>
			</div>
		</div>
	</div><!--end carousel-->


	<div class="row">
		<div class="col-md-4">
			<div class="card card-background" style="background-image: url('karma.jpg')">
				<div class="content">
					<h6 class="category text-info">Materials</h6>
					<h3 class="card-title">The Sculpture Where Details Matter</h3>
					<p class="card-description">
						Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...</p>
					<a href="#pablo" class="btn btn-danger btn-round">
						<i class="material-icons">subject</i> Read Article</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card card-background" style="background-image: url('leona.jpg')">
				<div class="content">
					<h6 class="category text-info">Materials</h6>
					<h3 class="card-title">The Sculpture Where Details Matter</h3>
					<p class="card-description">
						Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
					</p>
					<a href="#pablo" class="btn btn-danger btn-round">
						<i class="material-icons">subject</i> Read Article</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card card-background" style="background-image: url('morgana.jpg')">
				<div class="content">
					<h6 class="category text-info">Materials</h6>
					<h3 class="card-title">The Sculpture Where Details Matter</h3>
					<p class="card-description">
						Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
					</p>
					<a href="#pablo" class="btn btn-danger btn-round">
						<i class="material-icons">subject</i> Read Article</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-4 col-md-8">
				<td colspan="4"> <button type="button" class="btn btn-success btn-round">View Archived Events <i class="material-icons">keyboard_arrow_right</i></button></td>
				</div>
			</div>
		</div>
	</div> <!--end of row-->
</div><!--end container-->
@endsection