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
              <li class="umum"><a href="#umum" data-toggle="tab">Pertanyaan Terbuka</a></li>
              <li><a href="#pribadi" data-toggle="tab">Pertanyaan Tertutup</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="umum" >
                <!-- Post -->
                 <div class="table-responsive" style="margin-top: 10px; height: 460px;" >
          <table class="table table-bordered table-striped">
                @foreach($terbuka as $listkonsultasi_terbuka)
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{asset('fotoupload/'. $listkonsultasi_terbuka->users->foto)}}" alt="User Image">
                        <span class="username">
                          <a href="#">{{$listkonsultasi_terbuka->users->name}}</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">{{$listkonsultasi_terbuka->created_at}}</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    {{$listkonsultasi_terbuka->pertanyaan}}
                  </p>

                  <form action="{{ url('/jawabAdminGizi/'.$listkonsultasi_terbuka->id) }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{ csrf_field() }}
                    <div class="form-group margin-bottom-none">
                      <div class="col-sm-9">
                        <input class="form-control input-sm" id="jawaban" value="{{$listkonsultasi_terbuka->jawaban}}" name="jawaban" placeholder="Response">
                      </div>
                      <div class="col-sm-3">
                        <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
                @endforeach
              </table>
            </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              @foreach($tertutup as $listkonsultasi_tertutup)
              <div class="tab-pane" id="pribadi">
                
<!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{asset('fotoupload/'. $listkonsultasi_tertutup->users->foto)}}" alt="User Image">
                        <span class="username">
                          <a href="#">{{$listkonsultasi_tertutup->users->name}}</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">{{$listkonsultasi_tertutup->created_at}}</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    {{$listkonsultasi_tertutup->pertanyaan}}
                  </p>

                  <form action="{{ url('/jawabAdminGizi/'.$listkonsultasi_tertutup->id) }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{ csrf_field() }}
                    <div class="form-group margin-bottom-none">
                      <div class="col-sm-9">
                        <input class="form-control input-sm" id="jawaban" value="{{$listkonsultasi_tertutup->jawaban}}" name="jawaban" placeholder="Response">
                      </div>
                      <div class="col-sm-3">
                        <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
                @endforeach
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
@endsection
