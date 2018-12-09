<html>

<head>
  <title>Bekalin</title>
  <link rel="stylesheet" href="order/css/bootstrap.min.css">
  <!-- Meta tag Keywords -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
  function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!--// Meta tag Keywords -->
  <!-- css files -->
  <link href="detail/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
  <link href="detail/css/style.css" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS --> 
  <link rel="stylesheet" href="detail/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
  <link rel="stylesheet" href="detail/css/flexslider.css" type="text/css" media="screen" property="" /> <!-- Flexslider-CSS -->
  <link rel="stylesheet" href="detail/css/team.css" type="text/css" media="screen" property="" /> <!-- Team-CSS -->
  <link rel="stylesheet" href="detail/css/smoothbox.css" type='text/css' media="all" /> <!-- Smoothbox-CSS -->
  <link href="detail/css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" /> <!-- Time-script-CSS -->
  <!-- //css files -->
  <!-- online-fonts -->
  <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Oleo+Script:400,700&amp;subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- //online-fonts -->
  <style>
  .badge-notify{
    background:red;
    position:relative;
    top: 0;
    right: 10px;
  }
  .my-cart-icon-affix {
    position: fixed;
    z-index: 999;
  }
  </style>
</head>

<body>
<div class="container">
@include('order.nav') 
  <!-- services -->
  <div class="services" id="services" >
    <div class="container">
      <div class="agile-heading">
        <h3 class="w3l-title">Daftar Menu</h3>
      </div>
      <div class="wthree-services-grids col-md-12" style="" >
        <!-- kotak -->
      
        @foreach($paket as $listpaket)
        
        <div class="col-sm-3 wthree-services" >
          <div class="wthree-services-grid">
            <div class="wthree-services-info" >
               <img class="profile-user-img img-responsive img-circle" src="{{asset('fotoupload/'. $listpaket->foto_paket)}}" alt="User profile picture" style="border-color: #eb422a; border-width: 3px;">
              <h4>{{$listpaket->nama_paket}}</h4>
              <strong>Rp {{$listpaket->harga_paket}}</strong>
              <div class="w3ls-border"> </div>
            </div>
            <div class="wthree-services-captn" >

                <form action="{{ url('/cart') }}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{ $listpaket->id }}">
                    <input type="hidden" name="name" value="{{ $listpaket->nama_paket }}">
                    <input type="hidden" name="price" value="{{ $listpaket->harga_paket }}">
                    <input type="submit" class="btn btn-outlined btn-white btn-sm my-cart-btn" value="Add to Cart">
                </form>
             {{--  <a href="/keranjang/{{ $listpaket->id }}" class="btn btn-outlined btn-white btn-sm my-cart-btn" ></i> Akses</a> --}}
            {{--   <button class="btn btn-outlined btn-white btn-sm my-cart-btn" data-id="{{$listpaket->id}}" data-name="{{$listpaket->nama_paket}}" data-summary="summary 1" data-price="{{$listpaket->harga_paket}}" data-quantity="1"  data data-image="{{asset('fotoupload/'. $listpaket->foto_paket)}}" style="margin-top: 10%;">Add to Cart</button> --}}
              <br>
              <a href="{{ url('/detail/'.$listpaket->id) }}" class="agileits-submit btn btn-outlined btn-white btn-sm" style="margin-top: 20px;">View Details</a> <br>
              <a href="{{-- {{ url('/detail/'.$listpaket->id) }} --}}" class="agileits-submit btn btn-outlined btn-white btn-sm" style="margin-top: 20px;">Stock : {{$listpaket->available}}</a>
            </div>
          </div>
          
        </div>
        
        @endforeach
        
        <!-- //kotak -->
      </div>
    </div>
  </div>
  <!-- //services -->
</div>


  @include('order.footer')
  <script src="order/js/jquery-2.2.3.min.js"></script>
  <script type='text/javascript' src="order/js/bootstrap.min.js"></script>
  <script type='text/javascript' src="order/js/jquery.mycart.js"></script>
  <script type="text/javascript">

  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      currencySymbol: 'Rp',
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      classProductQuantity: 'my-product-quantity',
      classProductRemove: 'my-product-remove',
      classCheckoutCart: 'my-cart-checkout',
      affixCartIcon: true,
      showCheckoutModal: true,
      numberOfDecimals: 2,
      cartItems: [
        // {id: 1, name: 'product 1', summary: 'summary 1', price: 10, quantity: 1, image: 'images/img_1.png'},
        // {id: 2, name: 'product 2', summary: 'summary 2', price: 20, quantity: 2, image: 'images/img_2.png'},
        // {id: 3, name: 'product 3', summary: 'summary 3', price: 30, quantity: 1, image: 'images/img_3.png'}
      ],
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      afterAddOnCart: function(products, totalPrice, totalQuantity) {
        console.log("afterAddOnCart", products, totalPrice, totalQuantity);
      },
      clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
        console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
      },
      checkoutCart: function(products, totalPrice, totalQuantity) {
        var checkoutString = "Detail Pemesanan \nTotal Harga: " + totalPrice + "\nTotal Paket: " + totalQuantity;
        checkoutString += "\n\n Nama Paket \t Harga \t Qty";
        $.each(products, function(){
          checkoutString += ("\n " + this.name + " \t\t\t " + this.price + " \t " + this.quantity);
        });
        checkoutString += "\n\n No Pembayaran: EX45F9 \n\nTransfer BCA: a.n Astrid 5115100162 \nTransfer BNI: a.n Sirria 5115100017"
        alert(checkoutString)
        console.log("checking out", products, totalPrice, totalQuantity);
      },
      // getDiscountPrice: function(products, totalPrice, totalQuantity) {
      //   console.log("calculating discount", products, totalPrice, totalQuantity);
      //   return totalPrice * 0.5;
      // }
    });

    // $("#addNewProduct").click(function(event) {
    //   var currentElementNo = $(".row").children().length + 1;
    //   $(".row").append('<div class="col-md-3 text-center"><img src="images/img_empty.png" width="150px" height="150px"><br>product ' + currentElementNo + ' - <strong>$' + currentElementNo + '</strong><br><button class="btn btn-danger my-cart-btn" data-id="' + currentElementNo + '" data-name="product ' + currentElementNo + '" data-summary="summary ' + currentElementNo + '" data-price="' + currentElementNo + '" data-quantity="1" data-image="images/img_empty.png">Add to Cart</button><a href="#" class="btn btn-info">Details</a></div>')
    // });
  });
  </script>

</body>

</html>
