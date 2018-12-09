@extends('cart.master')

@section('content')

<div class="row">
  <div class="col-75">
    <div class="container">
      <p><a href="{{ url('menu') }}">Home</a></p>
      <form action="{{ url('/setPesanan') }}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        {!! csrf_field() !!}
        <div class="row">
          <div class="col-50">
            <h3>Pengiriman</h3>
            <label for="fname"><i class="fa fa-user"></i>Nama Penerima</label>
            <input type="text" id="fname" name="penerima" >
            <label for="email"><i class="fa fa-envelope"></i>Nomor HP</label>
            <input type="text" id="email" name="noHP">
            <label for="adr"><i class="fa fa-address-card-o"></i> Alamat</label>
            <input type="text" id="adr" name="alamat" >
            
            
            {{-- <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York"> --}}

            <div class="row">
              <div class="col-50">
                {{-- <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY"> --}}
              </div>
              <div class="col-50">
                {{-- <label for="zip">Zip</label> --}}
                {{-- <input type="text" id="zip" name="zip" placeholder="10001"> --}}
              </div>
            </div>
          </div>
          
          <div class="col-50">
            <h3>Pembayaran</h3>
            {{-- <label for="fname">Accepted Cards</label> --}}
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Nama Rekening</label>
            <input type="text" id="cname" name="cardname" >
            <label for="ccnum">Nomor Rekening</label>
            <input type="text" id="ccnum" name="cardnumber" >
            <label for="expmonth">Jadwal Pengiriman</label>
            <input type="date" name="tanggal"> <select name="pukul">
             
                <option value="05.30" <?php if ($lempar == '8'){ ?> disabled <?php   } ?> >05.30</option> 
              
                
                <option value="06.00">06.00</option>
                <option value="07.00">07.00</option>
                <option value="09.00">09.00</option>
              </select>
            <input type="hidden" name="ket_pesanan" value="@foreach (Cart::content() as $item) {{ $item->name }} {{ $item->qty }} @endforeach" >


            <div class="row">
              <div class="col-50">
                {{-- <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018"> --}}
              </div>
              <div class="col-50">
                {{-- <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352"> --}}
              </div>
            </div>
          </div>

        </div>
        <label>
          <text style="color: red; font-style: italic; " > LAKUKAN PEMBAYARAN KE BNI </text> <br>
          <p style="color: red; font-style: italic" > 12324143 A.N Adib Wahyu Kuncoro </p>
        {{-- <input type="submit" value="Bayar" class="btn"> --}}
                <button type="submit" class="btn">Bayar</button>
         
      </form>
    </div>
  </div>

  <div class="col-25">
    <div class="container">
     {{--  <h4>Keranjang 
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i> 
          
        </span>
      </h4> --}}
      @foreach (Cart::content() as $item)

      <p><p>{{ $item->name }}</p> <span class="price">{{ $item->qty }}</span> <span class="price">RP {{ $item->price }} x</span></p>
      @endforeach
      
      <hr>
      <p>Total <span class="price" style="color:black"><b>RP {{ Cart::instance('default')->subtotal() }}</b></span></p>



    </div>
  </div>
</div>


<style type="text/css">
  
 .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
@endsection