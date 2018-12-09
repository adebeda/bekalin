@extends('layouts.app')

@section('content')

<div style="background-image: url('glorious/images/bg.jpg');">
<div class="mobile-nav-button">
        <div class="mobile-nav-button__line"></div>
        <div class="mobile-nav-button__line"></div>
        <div class="mobile-nav-button__line"></div>
    </div>
    @include('layouts.nav')
    <div class="center-container" style="margin-top: -20px;">
        <div class="banner wthree">
            <div class="container">
             <div class="banner_top">
                    <div class="col-md-6 col-sm-4 col-xs-4 logo">
                        <h1><a href="index.html">Bekal.in<span>Restaurant</span></a></h1>
                    </div>
                </div>
                <div class="col-md-5 callbacks_container form-w3l-agil3">
                    <div class="modal-body login-page">
                        <div class="login-top sign-top">
                            <div class="agileits-login" style="background-color: #ffffff">
                                <h5 style="color:#000000; font-family: Times;">Registrasi Orang Tua</h5>
                                <form class="form-horizontal" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}


                              <fieldset>
                                <input id= "name" type="text" name="name" placeholder="Nama Orang Tua" value="{{ old('name') }}" required autofocus>
                                 @if ($errors->has('name'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                                <input id="no_ktp" type="text" name="no_ktp" placeholder="Nomer KTP" required="" />
                                <input id="no_rek" type="text" name="no_rek" placeholder="Nomer Rekening" required="" />
                                <input id="alamat" type="text" name="alamat" placeholder="Alamat" required="" />
                                <input id="pekerjaan"  type="text" name="pekerjaan" placeholder="Pekerjaan" required="" />
                                <input id="email" type="email"  name="email" placeholder="Email" value="{{ old('email') }}" required=""/>
                                 @if ($errors->has('email'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                                <input id="password" type="password" name="password" placeholder="Password" />
                                @if ($errors->has('password'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                                <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" />
                                @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                                @endif
                                <div class="w3ls-submit">
                                    <input type="submit" value="Register">
                                </div>
                              </fieldset>
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
