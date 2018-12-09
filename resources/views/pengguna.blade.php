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
								<th>NAMA</th>
								<th>NO KTP</th>
								<th>NO REK</th>
								<th>ALAMAT</th>
								<th>PEKERJAAN</th>
								<th>EMAIL</th>
								<th>ACTION</th>
								
								
							</tr>
						</thead>
						<tbody>
							@foreach($pengguna as $peng)
								<tr>
									
									<td style="vertical-align: middle;">{{$peng->name}}</td>
									<td style="vertical-align: middle;">{{$peng->no_ktp}}</td>
									<td style="vertical-align: middle;">{{$peng->no_rek}}</td>
									<td style="vertical-align: middle;">{{$peng->alamat}}</td>
									<td style="vertical-align: middle;">{{$peng->pekerjaan}}</td>
									<td style="text-align: center; vertical-align: middle;">{{$peng->email}}</td>
									<td><a href="/pengguna2/{{ $peng->id }}" class="btn btn-sm btn-block btn-warning mb-1" ><i class="fas fa-unlock-alt"></i> Akses</a></td>
									
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
