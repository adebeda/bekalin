@extends('kurir.master')
    @section('css')
    @endsection
@section('content')
	
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <style >
    	tr:hover{
    		background-color: yellow;
    	}
    </style>

    <!-- Main content -->
    <section class="content">
        <!-- /.col -->
      
                <div class="table-responsive" style="margin-top: 20px; height: 520px; width: 1100px;" >
					<table class="table table-bordered">
						<thead class="table-bordered" align="center" style="text-align:center;background-color: #CACAFF;">
							<tr>
								<th>PENERIMA</th>
								<th>NO HP</th>
								<th>ALAMAT</th>
								<th>PESANAN</th>
								<th>TANGGAL</th>
								<th>PUKUL</th>										
								<th>ACTION</th>
							</tr>
						</thead>
						<tbody>
							@foreach($pengiriman as $peng)
								<tr>
									
									<td style="vertical-align: middle;">{{$peng->penerima}}</td>
									<td style="vertical-align: middle;">{{$peng->no_hp}}</td>
									<td style="vertical-align: middle;">{{$peng->alamat}}</td>
									<td style="vertical-align: middle; ">{{$peng->ket_pesanan}}</td>
									<td style="vertical-align: middle;background-color: #FFCECE; ">{{$peng->tanggal}}</td>
									<td style="vertical-align: middle;background-color: #FFCECE;">{{$peng->pukul}}</td>
									<td><a href="/pengiriman/{{ $peng->id }}" class="btn btn-success btn-lg" style="font-size: 12px;"  >Ambil Order</a></td>
									
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
               </section>  
  </div>
  
  
@endsection
