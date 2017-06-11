@extends('layouts.qayyumwtf')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">

            <div class="card card-signup">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                
                <form class="form" role="form" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

                    <div class="header header-primary text-center">
                        <h4 class="card-title">Forgot my password</h4>
                    </div>

                    <div class="content">
                        <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="material-icons">face</i></span>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="input-group qayyum-suke-max">
                        <div class="col-md-12"><button type="submit" class="btn btn-primary btn-block">Send Password Reset Link</button></div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
