@extends('layouts.app')

@section('content')
<div style="background-image: url('glorious/images/bg.jpg');margin-top: -20px; padding-bottom: 350px;">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                 <div class="mobile-nav-button">
        <div class="mobile-nav-button__line"></div>
        <div class="mobile-nav-button__line"></div>
        <div class="mobile-nav-button__line"></div>
    </div>
    @include('layouts.nav')
                    <div class="login-top sign-top">
                            <div class="agileits-login">
                            <h5>Login Here</h5>
                            <form action="{{ route('login') }}" method="POST">
                                 <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                                   {{ csrf_field() }}
                                 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <input id="password" type="password" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <div class="wthree-text"> 
                                    <ul> 
                                        <li>
                                            <label class="anim">
                                                 <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <span> Remember me ?</span> 
                                            </label> 
                                        </li>
                                    </ul>
                                    <div class="clearfix"> </div>
                                </div>  
                                <div class="w3ls-submit"> 
                                    <input type="submit" value="LOGIN">     
                                </div> 
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a> 
                            </form>

                            </div>  
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
