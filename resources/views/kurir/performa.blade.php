@extends('adminUtama')
    @section('css')
    @endsection
@section('content')
	
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    

    <!-- Main content -->
    <section class="content">
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="umum"><a href="#umum" data-toggle="tab">PENGGUNA</a></li>
              {{-- <li><a href="#pribadi" data-toggle="tab">Pertanyaan Tertutup</a></li> --}}
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="umum">
                <!-- Post -->
                {{-- @foreach($terbuka as $listkonsultasi_terbuka) --}}
                <div class="table-responsive" style="margin-top: 10px; height: 480px;" >
					<table class="table table-bordered table-striped">
						<thead class="table-bordered" style="background-color: #CACAFF;">
							<tr style="text-align:center">
								<th>NAMA KURIR</th>
								<th>EMAIL KURIR</th>
								<th>JUMLAH ANTAR</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($user as $user)
								<tr>
									
									<td style="vertical-align: middle;">{{$user->name}}</td>
									<td style="vertical-align: middle;">{{$user->email}}</td>
									<td style="vertical-align: middle; background-color: #FFCECE;">{{$user->jumlahantar}}</td>																
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
              </div>
            </div>
          </div>
        </div>
    </section>  
  </div>
  
  
@endsection
