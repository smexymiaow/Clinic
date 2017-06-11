@extends('layouts.qayyumwtf')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <div class="card card-signup">
                <form class="form" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="header header-primary text-center">
                        <h4 class="card-title">Log in</h4>
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
                        <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="material-icons">lock_outline</i></span>
                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me        
                                </label>
                                
                            </div>
                        
                    </div>
                    <div class="footer text-center">
                        <button class="btn btn-primary btn-simple btn-wd btn-lg" type="submit">Get Started</button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
