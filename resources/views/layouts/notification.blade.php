@if($errors->any())
<div class="alert alert-danger">
    <div class="container-fluid">
	  <div class="alert-icon">
	    <i class="material-icons">error_outline</i>
	  </div>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true"><i class="material-icons">clear</i></span>
	  </button>
      <b>Error Alert:</b> {{$errors->first()}}
    </div>
</div>
@endif