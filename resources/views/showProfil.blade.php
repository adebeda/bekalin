<!DOCTYPE html>
<html lang="en">
<head>
<title>Glorious a Restaurants Category Bootstrap Responsive website Template | Home :: w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glorious Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link href="bootstrap/css/overwrite.css" rel="stylesheet"/>
  <link rel="stylesheet" href="lte/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
<!--// Meta tag Keywords -->
<!-- css files -->
<link href="glorious/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
<link href="glorious/css/style.css" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="glorious/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="glorious/css/flexslider.css" type="text/css" media="screen" property="" /> <!-- Flexslider-CSS -->
<link rel="stylesheet" href="glorious/css/team.css" type="text/css" media="screen" property="" /> <!-- Team-CSS -->
<link rel="stylesheet" href="glorious/css/smoothbox.css" type='text/css' media="all" /> <!-- Smoothbox-CSS -->
<link href="glorious/css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" /> <!-- Time-script-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Oleo+Script:400,700&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>
<!-- banner -->

<div class="testimonials">
    <div class="container">
     @if (Auth::guest())

                        <div class="col-md-6 col-sm-5 col-xs-5 top-nav-text">
                            <a class="page-scroll" href="{{ route('login') }}" data-toggle="modal" data-hover="LOGIN">LOGIN</a>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-4 top-nav-text">
                            <a class="page-scroll" href="{{ route('register') }}" data-toggle="modal" data-hover="LOGIN">REGISTER</a>
                        </div>
                        
                        @else
                        <div class="col-md-3 col-sm-4 col-xs-4 top-nav-text">
                            <a class="page-scroll" href="{{ url('/showProfil') }}" data-toggle="modal" data-hover="LOGIN">PROFIL PEMESAN</a>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-4 top-nav-text">
                            <a class="page-scroll" href="{{ url('/settingProfil') }}" data-toggle="modal" data-hover="LOGIN">PENGATURAN PROFIL PEMESAN</a>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-4 top-nav-text">
                            <a class="page-scroll" href="{{ url('/showProfilAnak') }}" data-toggle="modal" data-hover="LOGIN">PROFIL ANAK</a>
                        </div>
                       {{--  <div class="col-md-3 col-sm-4 col-xs-4 top-nav-text">
                            <a class="page-scroll" href="{{ url('/settingProfilAnak') }}" data-toggle="modal" data-hover="LOGIN">PENGATURAN PROFIL ANAK</a>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-4 top-nav-text">
                            <a class="page-scroll" href="{{ url('/showProfilAnak') }}" data-toggle="modal" data-hover="LOGIN">PROFIL ANAK</a>
                        </div> --}}
                      
                            @foreach($anak as $an) 
                        {{--  <div class="col-md-3 col-sm-4 col-xs-4 top-nav-text">
                            <a style="color:#eb422a;" class="page-scroll" href="{{ url('/showProfilAnak') }}" data-toggle="modal" data-hover="LOGIN">{{$an->nama_anak}}</a>
                        </div> --}}
                            @endforeach

                         <div class="col-md-3 callbacks_container form-w3l-agil3">
                           <div class="read-form">
                                <form action="{{url('/tambahAnak')}}" method="get">
                                    <div class="form-left-agileits-submit">
                                        <input type="submit" value="+ Tambah Anak">
                                    </div>
                                </form>                      
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 top-nav-text">
                            <a class="page-scroll" href="{{ route('logout') }}" data-toggle="modal" data-hover="LOGIN" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span style="color:#eb422a;">{{ Auth::user()->name }}</span>  LOGOUT </a>

                        </div>
                        <div class="clearfix"> </div>
                         <div class="col-md-3 col-sm-4 col-xs-4 top-nav-text">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                            </form>                            
                        </div>
                        @endif
     <div class="mobile-nav-button">
        <div class="mobile-nav-button__line"></div>
        <div class="mobile-nav-button__line"></div>
        <div class="mobile-nav-button__line"></div>
    </div>
    @include('layouts.nav')
        <div class="w3_testimonials_grids">
        <br>
        <br>
        @foreach($user as $listuser)
            <div class="col-md-12 callbacks_container form-w3l-agil3">
             <div class="box box-primary" style="border-color: #eb422a; border-width: 5px;">
            <div class="box-body box-profile" >
              <img class="profile-user-img img-responsive img-circle" src="{{asset('fotoupload/'. Auth::user()->foto)}}" alt="User profile picture" style="border-color: #eb422a; border-width: 3px;">

              <h3 class="profile-username text-center">{{$listuser->name}}</h3>

              <p class="text-muted text-center">{{$listuser->pekerjaan}}</p>

              <ul class="list-group list-group-unbordered" style="color: white;">
                <li class="list-group-item" style="background-color:#353434;border-top-color: #eb422a; border-width: 3px;">
                  <b>No KTP</b> <a class="pull-right" style="color: white;">{{$listuser->no_ktp}}</a>
                </li>
                <li class="list-group-item" style="background-color:#353434;border-top-color: #eb422a; border-width: 3px;">
                  <b>No Rekening</b> <a class="pull-right"style="color: white;">{{$listuser->no_rek}}</a>
                </li>
                <li class="list-group-item" style="background-color:#353434;border-top-color: #eb422a; border-width: 3px;">
                  <b>Alamat</b> <a class="pull-right" style="color: white;">{{$listuser->alamat}}</a>
                </li>
                <li class="list-group-item" style="background-color:#353434;border-top-color: #eb422a; border-width: 3px;">
                  <b>Email</b> <a class="pull-right" style="color: white;">{{$listuser->email}}</a>
                </li>
              </ul>
            </div>
            </div>
                </div> 
                @endforeach
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- js-scripts -->     
        
    <!-- js -->
    <script type="text/javascript" src="glorious/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="glorious/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
    <!-- //js -->
    <!-- responsiveslider -->
    <script src="glorious/js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
              // Slideshow 4
              $("#slider3").responsiveSlides({
                auto: true,
                pager:true,
                nav:false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                  $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                  $('.events').append("<li>after event fired.</li>");
                }
              });
        
            });
         </script>
    <!-- //responsiveslider -->
    <!-- menu -->
    <script>
        $(document).ready(function () {
          $('.mobile-nav-button').on('click', function() {
          $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(1)" ).toggleClass( "mobile-nav-button__line--1");
          $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(2)" ).toggleClass( "mobile-nav-button__line--2");  
          $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(3)" ).toggleClass( "mobile-nav-button__line--3");  
          
          $('.mobile-menu').toggleClass('mobile-menu--open');
          return false;
        }); 
        });
    </script>
    <!-- //menu -->
    <!-- flexSlider-for-grids-section -->
        <script defer src="glorious/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
              $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                  $('body').removeClass('loading');
                }
              });
            });
      </script>
    <!-- //flexSlider-for-grids-section -->
    <!-- flexSlider-for-menu-section -->
    <script type="text/javascript">
        $(window).load(function() {
            $("#flexiselDemo1").flexisel({
                visibleItems: 4,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 2
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems:3
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 4
                    }
                }
            });
            
        });
    </script>
    <script type="text/javascript" src="glorious/js/jquery.flexisel.js"></script>
    <!-- //flexSlider-for-menu-section -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="glorious/js/move-top.js"></script>
    <script type="text/javascript" src="glorious/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- for-bottom-to-top smooth scrolling -->
    <script type="text/javascript">
        $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
            };
        */                              
        $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!-- //for-bottom-to-top smooth scrolling -->
    <!-- Calendar -->
    <link rel="stylesheet" href="glorious/css/jquery-ui.css" />
    <script src="glorious/js/jquery-ui.js"></script>
        <script>
            $(function() {
            $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
            });
        </script>
    <!-- //Calendar -->
    <!-- video-js -->
    <script src="glorious/js/jquery.vide.min.js"></script>
    <!-- //video-js --> 
    <!-- smoothbox -->
    <script type="text/javascript" src="glorious/js/smoothbox.jquery2.js"></script>
    <!-- //smoothbox -->
    <!-- Time -->
    <script type="text/javascript" src="glorious/js/wickedpicker.js"></script>
        <script type="text/javascript">
            $('.timepicker').wickedpicker({twentyFour: false});
        </script>
    <!-- //Time -->

<!-- //js-scripts -->
</body>
</html>