<!DOCTYPE html>
<html lang="en">
<head>
<title>Bekalin</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glorious Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link href="../detail/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
<link href="../glorious/css/style.css" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="../detail/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="../detail/css/flexslider.css" type="text/css" media="screen" property="" /> <!-- Flexslider-CSS -->
<link rel="stylesheet" href="../detail/css/team.css" type="text/css" media="screen" property="" /> <!-- Team-CSS -->
<link rel="stylesheet" href="../detail/css/smoothbox.css" type='text/css' media="all" /> <!-- Smoothbox-CSS -->
<link href="../detail/css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" /> <!-- Time-script-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Oleo+Script:400,700&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>

<!-- menu-section -->
<div class="menu-w3l" id="menu">
@foreach($detail_paket as $listdetail_paket)
  <h3 class="w3l-title">{{$listdetail_paket->nama_paket}}</h3>
  <ul id="flexiselDemo1"> 
    <li>
      <div class="w3layouts_banner_bottom_left">
        <img src="{{asset('fotoupload/'. $listdetail_paket->foto_nasi)}}" alt=" " class="img-responsive" />
        <h4>{{$listdetail_paket->nasi}}</h4>
        <p>Morbi eu justo suscipit.</p>
      </div>
    </li>
    <li>
      <div class="w3layouts_banner_bottom_left">
        <img src="{{asset('fotoupload/'. $listdetail_paket->foto_sayur)}}" alt=" " class="img-responsive" />
        <h4>{{$listdetail_paket->sayur}}</h4>
        <p>Morbi eu justo suscipit.</p>
      </div>
    </li>
    <li>
      <div class="w3layouts_banner_bottom_left">
        <img src="{{asset('fotoupload/'. $listdetail_paket->foto_lauk)}}" alt=" " class="img-responsive" />
        <h4>{{$listdetail_paket->lauk}}</h4>
        <p>Morbi eu justo suscipit.</p>
      </div>
    </li>
    <li>
      <div class="w3layouts_banner_bottom_left">
        <img src="{{asset('fotoupload/'. $listdetail_paket->foto_buah)}}" alt=" " class="img-responsive" />
        <h4>{{$listdetail_paket->buah}}</h4>
        <p>Morbi eu justo suscipit.</p>
      </div>
    </li>
    <li>
      <div class="w3layouts_banner_bottom_left">
        <img src="{{asset('fotoupload/'. $listdetail_paket->foto_minum)}}" alt=" " class="img-responsive" />
        <h4>{{$listdetail_paket->minum}}</h4>
        <p>Morbi eu justo suscipit.</p>
      </div>
    </li>
  </ul>
  @endforeach

</div>
<div class="cuisine-names">
    <div class="w3ls_cuisine_names_center">
        <div class="read-form" style="margin:0 auto; position: relative; float: none; display: table;">
            <form action="{{url('/menu')}}" method="get">
              <div>
                  <input style="margin: 0 auto;" type="submit" value="Pesan Sekarang">
              </div>
            </form>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>

@include('order.footer')

<!-- js-scripts -->   
    
  <!-- js -->
  <script type="text/javascript" src="../detail/js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="../detail/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
  <!-- //js -->
  <!-- responsiveslider -->
  <script src="../detail/js/responsiveslides.min.js"></script>
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
    <script defer src="js/jquery.flexslider.js"></script>
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
        animationSpeed: 2000,
        autoPlay: true,
        autoPlaySpeed: 1000,        
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
  <script type="text/javascript" src="../detail/js/jquery.flexisel.js"></script>
  <!-- //flexSlider-for-menu-section -->
  <!-- start-smoth-scrolling -->
  <script type="text/javascript" src="../detail/js/move-top.js"></script>
  <script type="text/javascript" src="../detail/js/easing.js"></script>
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
  <link rel="stylesheet" href="css/jquery-ui.css" />
  <script src="../detail/js/jquery-ui.js"></script>
    <script>
      $(function() {
      $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
      });
    </script>
  <!-- //Calendar -->
  <!-- video-js -->
  <script src="../detail/js/jquery.vide.min.js"></script>
  <!-- //video-js --> 
  <!-- smoothbox -->
  <script type="text/javascript" src="../detail/js/smoothbox.jquery2.js"></script>
  <!-- //smoothbox -->
  <!-- Time -->
  <script type="text/javascript" src="../detail/js/wickedpicker.js"></script>
    <script type="text/javascript">
      $('.timepicker').wickedpicker({twentyFour: false});
    </script>
  <!-- //Time -->

<!-- //js-scripts -->
</body>
</html>