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
          <table class="table table-bordered table-striped">
            <thead class="table-bordered" align="center" style="text-align:center;background-color: #CACAFF;">
              <tr>
                <th>NAMA</th>
                <th>EMAIL</th>
                <th>KRITIK SARAN</th>
              </tr>
            </thead>
            <tbody>
              
              @foreach($kritiksaran as $kritik)

              <tr>  
                  <div id="halo">
                  <td style="vertical-align: middle;">{{$kritik->nama}}</td>
                  <td style="vertical-align: middle;">{{$kritik->email}}</td>
                  <td style="vertical-align: middle;">{{$kritik->pesan}}</td>
                  
              </tr>   
                
              @endforeach
              
            </tbody>
          </table>
        </div>
               </section>  
  </div>
  
  
@endsection
