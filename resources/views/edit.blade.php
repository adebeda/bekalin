@extends('default')
@section('css')
    
@endsection
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
@if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif
    <!-- Main content -->
    <section class="content">
        <!-- /.col -->
        <div class="col-md-9">
          <div class="active tab-pane" id="activity">
               
                @foreach ($paket as $paket)
                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{asset('fotoupload/'. $paket->foto_paket)}}" alt="User Image">
                        <span class="username">
                          <a href="#">{{$paket->nama_paket}}</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">{{$paket->harga_paket}}</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    {{$paket->nama_paket}}
                <ul>
                    <li>Nasi : {{$paket->nasi}}</li>
                    <li> Sayur : {{$paket->sayur}}</li>
                    <li> Lauk: {{$paket->lauk}} </li>
                    <li> Buah: {{$paket->buah}} </li>
                    <li> Minum: {{$paket->minum}} </li>
                </ul>

                  </p>

                  
                </div>
                <!-- /.post -->
               

                <!-- Post -->
                <div class="post">
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="{{asset('fotoupload/'. $paket->foto_nasi)}}"  alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="{{asset('fotoupload/'. $paket->foto_sayur)}}"  alt="Photo">
                          <br>
                          <img class="img-responsive" src="{{asset('fotoupload/'. $paket->foto_lauk)}}"  alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img class="img-responsive" src="{{asset('fotoupload/'. $paket->foto_buah)}}"  alt="Photo">
                          <br>
                          <img class="img-responsive" src="{{asset('fotoupload/'. $paket->foto_minum)}}"  alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                <form action="{{ url('/getPaket/'.$paket->id) }}" class="form-horizontal">
                    <div class="form-group margin-bottom-none">
                      <div class="col-sm-3">
                        <button  type="submit" class="btn btn-danger pull-right btn-block btn-sm">Edit</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.post -->
                 @endforeach
              </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
@endsection
