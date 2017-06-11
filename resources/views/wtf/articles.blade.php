@extends('layouts.qayyumwtf')

@section('content')
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
@endsection
