<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="background-color: rgba(12, 12, 12, 0.68); border-bottom-width: 5px; border-bottom-color: #eb422a;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
 <!-- js -->
    
    <script type="text/javascript" src="glorious/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

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
