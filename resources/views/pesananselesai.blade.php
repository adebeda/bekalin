@extends('adminUtama')
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
								<th>KURIR</th>
								<th>TANGGAL</th>
								<th>PUKUL</th>										
								<th>ACTION</th>
							</tr>
						</thead>
						<tbody>
							@foreach($pesanan as $peng)
								<tr>
									
									<td style="vertical-align: middle;">{{$peng->penerima}}</td>
									<td style="vertical-align: middle;">{{$peng->no_hp}}</td>
									<td style="vertical-align: middle;">{{$peng->alamat}}</td>
									<td style="vertical-align: middle; ">{{$peng->ket_pesanan}}</td>
									<td style="vertical-align: middle;background-color: #FFCECE; ">{{$peng->kurir}}</td>
									<td style="vertical-align: middle;background-color: #FFCECE; ">{{$peng->tanggal}}</td>
									<td style="vertical-align: middle;background-color: #FFCECE;">{{$peng->pukul}}</td>
									 
									{{-- <td><a href="/tambahperforma/{{Auth::user()->id }}/{{$peng->no_hp}}" style="font-size: 12px;"    ><button  class="btn btn-success btn-lg" id="coba" onclick="disablebutton()" > Oke</button> </a></td> --}}
										<td><a href="/tambahperforma/{{ $peng->hapus }}" class="btn btn-success btn-lg" style="font-size: 12px;"  >Ok</a></td>
									{{-- <td>
									<form action="{{url('/tambahperforma/'.$peng->hapus)}}" method="POST">
										
										  {{ csrf_field() }}
                                    	<input type="hidden" name="no_hp" value="{{$peng->no_hp}}">
                                    	<button type="submit" class="btn btn-success btn-lg" ">Ok</button>                                    
                                   
                                	</form>   									
                                	</td> --}}

								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
               </section>  
  </div>
  
  
@endsection
<script type="text/javascript">
	function disablebutton() {

    document.getElementById("coba").disabled = true;

    

}

</script>