@extends('layouts.qayyumwtf')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <div class="card card-signup">
                <form class="form" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="header header-primary text-center">
                        <h4 class="card-title">Sign Up</h4>
                    </div>
                    <div class="content">
                        {{-- name --}}
                        <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="material-icons">account_box</i></span>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        {{-- email --}}
                        <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="material-icons">face</i></span>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  placeholder="Email Address qayyum@qayyum.qayyum" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        {{-- matric --}}
                        <div class="input-group{{ $errors->has('matric_id') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="material-icons">account_box</i></span>
                            <input id="matric_id" type="text" class="form-control" name="matric_id" value="{{ old('matric_id') }}" placeholder="Matric ID 19999" required autofocus>
                            @if ($errors->has('matric_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('matric_id') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        {{-- password --}}
                        <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="material-icons">lock_outline</i></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        {{-- confirm password --}}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="material-icons">lock</i></span>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password one more time" required>
                        </div>
                    </div>
                    
                    <div class="input-group qayyum-suke-max">
                        <div class="col-md-12"><button type="submit" class="btn btn-primary btn-block">Register</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
