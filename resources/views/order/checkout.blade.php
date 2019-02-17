@extends('cart.master')

@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="row">
  <div class="col-75">
    <div class="container">
      <p><a href="{{ url('/') }}">Home</a> <a href="{{ url('menu') }}">Menu</a></p>
      <p></p>
       <h3>PENGIRIMAN </h3> 
       <button onclick="document.getElementById('id01').style.display='block'" style="font-size: 14px;" >Lihat Jadwal</button>
      
      <form action="{{ url('/setPesanan') }}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        {!! csrf_field() !!}
        <div class="row">
          <div class="col-50">

           
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
            <h3>PEMBAYARAN</h3>
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
            <input type="date" name="tanggal"> 
            <select name="pukul"> 
                <option value="05.00" <?php if ($lempar == '8'){ ?> disabled <?php   } ?> >05.00</option> 
                <option value="05.30" <?php if ($lempar == '8'){ ?> disabled <?php   } ?> >05.30</option>
                <option value="06.00">06.00</option>
                <option value="06.30">06.30</option>
                <option value="07.00">07.00</option>
              </select>



            <input type="hidden" name="ket_pesanan" value="@foreach (Cart::content() as $item) {{ $item->name }} {{ $item->qty }} | @endforeach" >
             <input type="hidden" name="total" value="{{ Cart::instance('default')->subtotal() }}" >
          </div>

        </div>
     
          <text style="color: red;" ><strong>PEMBAYARAN</strong> </text> <br>
          <text style="color: red;" >0358181212 BNI</text> <br>
          <p style="color: red; " > a.n Adib Wahyu Kuncoro </p>
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
<div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h1>Bekal.<strong>in</strong></h1>
      </header>
      <div class="w3-container">
        <h2 style="font-size: 25px;">Jadwal Pengantaran</h2>
        <p align="center">

          <table class="table table-bordered ">
            <thead align="center" style="background-color: #CACAFF;">
              <tr>
                <th>HARI</th>
                <th>WAKTU PENGANTARAN</th>
                <th>SISA</th>
                
                
                
              </tr>
            </thead>
            <tbody>
              
                <tr>
                  <td>Senin</td>
                  <td>05.00</td>
                  <td>10</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >05.30</td>
                  <td >9</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >06.00</td>
                  <td >10</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >06.30</td>
                  <td >11</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >07.00</td>
                  <td >20</td>
                </tr>
                <tr>
                  <td >Selasa</td>
                  <td >05.00</td>
                  <td >13</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >05.30</td>
                  <td >15</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >06.00</td>
                  <td >12</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >06.30</td>
                  <td >16</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >07.00</td>
                  <td >19</td>
                </tr>
                <tr>
                  <td >Rabu</td>
                  <td >05.00</td>
                  <td >14</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >05.30</td>
                  <td >18</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >06.00</td>
                  <td >12</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >06.30</td>
                  <td >9</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >07.00</td>
                  <td >13</td>
                </tr>
                <tr>
                  <td >Kamis</td>
                  <td >05.00</td>
                  <td >12</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >05.30</td>
                  <td >15</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >06.00</td>
                  <td >19</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >06.30</td>
                  <td >13</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >07.00</td>
                  <td >14</td>
                </tr>
                <tr>
                  <td >Jumat</td>
                  <td >05.00</td>
                  <td >8</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >05.30</td>
                  <td >9</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >06.00</td>
                  <td >12</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >06.30</td>
                  <td >12</td>
                </tr>
                <tr>
                  <td ></td>
                  <td >07.00</td>
                  <td >18</td>
                </tr>
              
            </tbody>
          </table>

        </p>
      </div>
     {{--  <footer class="w3-container w3-teal">
        <p>Modal Footer</p>
      </footer> --}}
    </div>
  </div>
  ​<style>
table {
  border-collapse: collapse;
  width: 100%;
}
h2 {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}
th, td {
  text-align: center;
  /*padding: 8px;*/
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
  tr:hover{
        background-color: yellow;
      }
</style>
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