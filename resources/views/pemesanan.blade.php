@extends('adminUtama')
    @section('css')
    @endsection
@section('content')
	
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    

    <!-- Main content -->
    <section class="content">
        <!-- /.col -->
      <style type="">
      	tr:hover{
      		background-color: yellow; 
      	}
      </style>
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
								<th>TOTAL</th>										
								<th>NO REKENING</th>
								<th>ACTION</th>
							</tr>
						</thead>
						<tbody>
							
							@foreach($pesanan as $pes)

							<tr>	
									<div id="halo">
									<td style="vertical-align: middle;">{{$pes->penerima}}</td>
									<td style="vertical-align: middle;">{{$pes->no_hp}}</td>
									<td style="vertical-align: middle;">{{$pes->alamat}}</td>
									<td style="vertical-align: middle;">{{$pes->ket_pesanan}}</td>
									<td style="vertical-align: middle;">{{$pes->tanggal}}</td>
									<td style="vertical-align: middle;">{{$pes->pukul}}</td>
									<td style="vertical-align: middle;background-color: #FFCECE;">{{$pes->total}}</td>
									<td style="vertical-align: middle; background-color: #FFCECE;">{{$pes->no_rekening}}</td>
									<td><a href="/pengiriman/{{ $pes->id }}" class="btn btn-success btn-lg" style="font-size: 12px;"  >Verifikasi</a></td>
									</div>
							</tr>		
								
							@endforeach
							
						</tbody>
					</table>
				</div>
               </section>  
  </div>
  
  
@endsection
