@extends('layouts.master')

@section('bodyTitle')
Inicia sesión en Caniex™
@endsection
@section('bodyContent')
<div class="container-fluid panel-formulario" >
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading headTextForm">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label form-texto"><span class="form-texto">E-Mail Address</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label form-texto"><span class="form-texto">Password</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <span class="form-texto form-texto-cb">Remember Me</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                      
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Login</button>  
                                <!--<a class="btn btn-block btn-social btn-facebook" href="{{ route('fblogin') }}"><span class="fa fa-facebook"></span> Login in with Facebook</a>-->
                                <a class="btn btn-facebook" href="{{ route('fblogin') }}"><span class="fa fa-facebook"> </span> Login with Facebook</a>
                            </div>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
