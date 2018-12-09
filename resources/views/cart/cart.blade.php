@extends('cart.master')

@section('content')

    <div class="container">
        {{-- <p><a href="{{ url('menu') }}">Menu</a> / Cart</p> --}}
        <h1>Keranjang</h1>

        <hr>

        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif

        @if (sizeof(Cart::content()) > 0)


            <table class="table">
                <thead>
                    <tr>
                        <th class="table-image"></th>
                        <th>Nama Paket</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th class="column-spacer"></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>

                    @foreach (Cart::content() as $item)
                    <tr>
                        <td class="table-image"><a href="{{-- {{ url('shop', [$item->model->nama_paket]) }} --}}"><img src="{{ asset('fotoupload/' . $item->model->foto_paket) }}" alt="product" class="img-responsive cart-image"></a></td>
                        <td><p href="{{-- {{ url('shop', [$item->model->name]) }} --}}">{{ $item->name }}</p></td>
                        
                        <td>
                            <select class="quantity" data-id="{{ $item->rowId }}">
                                <option {{ $item->qty == 1 ? 'selected' : '' }}>1</option>
                                <option {{ $item->qty == 2 ? 'selected' : '' }}>2</option>
                                <option {{ $item->qty == 3 ? 'selected' : '' }}>3</option>
                                <option {{ $item->qty == 4 ? 'selected' : '' }}>4</option>
                                <option {{ $item->qty == 5 ? 'selected' : '' }}>5</option>
                            </select>
                        </td>
                        <td>RP {{ $item->subtotal }}</td>
                            
                        <td class=""></td>
                        <td>
                            <form action="{{ url('cart', [$item->rowId]) }}" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" class="btn btn-danger btn-sm" value="Remove">
                            </form>

                            {{-- <form action="{{ url('switchToWishlist', [$item->rowId]) }}" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                                <input type="submit" class="btn btn-success btn-sm" value="To Wishlist">
                            </form> --}}
                        </td>
                    </tr>

                    @endforeach
                   
                    <tr>
                        <td class="table-image"></td>
                        <td></td>
                        <td class="small-caps table-bg" style="text-align: right">Total</td>
                        <td>RP {{ Cart::instance('default')->subtotal() }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                  {{--   <tr>
                        <td class="table-image"></td>
                        <td></td>
                        <td class="small-caps table-bg" style="text-align: right">Tax</td>
                        <td>${{ Cart::instance('default')->tax() }}</td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr class="border-bottom">
                        <td class="table-image"></td>
                        <td style="padding: 40px;"></td>
                        <td class="small-caps table-bg" style="text-align: right">Your Total</td>
                        <td class="table-bg">${{ Cart::total() }}</td>
                        <td class="column-spacer"></td>
                        <td></td>
                    </tr> --}}

                </tbody>
            </table>

            <a href="{{ url('/menu') }}" class="btn btn-primary btn-lg">Pesan Lagi</a> &nbsp;
            <a href="{{ url('/checkout') }}" class="btn btn-success btn-lg">Checkout</a>

            {{-- @foreach (Cart::content() as $item)
             <form action="{{ url('/checkout') }}" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                                <input type="hidden" name="namapaket" value="{{ $item->name }}">
                                <input type="hidden" name="jumlah" value="{{ $item->qty }}">
            @endforeach
                                <input type="submit" class="btn btn-success btn-lg">
                            </form> --}}

            {{-- <a href="{{ url('/checkout') }}" class="btn btn-success btn-lg">Checkout</a> --}}

            <div style="float:right">
                <form action="{{ url('/emptyCart') }}" method="POST">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" class="btn btn-danger btn-lg" style="font-size: 14px;" value="Empty Cart">
                </form>
            </div>

        @else

            <h3>Keranjang Kosong</h3>
            <a href="{{ url('/menu') }}" class="btn btn-primary btn-lg">Pesan Sekarang</a>

        @endif

        <div class="spacer"></div>

    </div> <!-- end container -->

@endsection

@section('extra-js')
    <script>
        (function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.quantity').on('change', function() {
                var id = $(this).attr('data-id')
                $.ajax({
                  type: "PATCH",
                  url: '{{ url("/cart") }}' + '/' + id,
                  data: {
                    'quantity': this.value,
                  },
                  success: function(data) {
                    window.location.href = '{{ url('/cart') }}';
                  }
                });

            });

        })();

    </script>
@endsection
