@extends('adminUtama')
@section('css')
    
@endsection
@section('content')


<div class="content-wrapper">
      <section class="content">
         @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Paket</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($paket as $listpaket)
            <form action="{{ url('/setEditPaket/'.$listpaket->id) }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Paket</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$listpaket->nama_paket}}" name="nama_paket" placeholder="Nama Paket">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Harga Paket</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$listpaket->harga_paket}}" name="harga_paket" placeholder="Harga Paket">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto Paket</label>
                  <input type="file" name="foto_paket" id="exampleInputFile" name="foto_paket">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nasi</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$listpaket->nasi}}" name="nasi" placeholder="Nasi">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Sayur</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$listpaket->sayur}}" name="sayur" placeholder="Sayur">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Lauk</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$listpaket->lauk}}" name="lauk" placeholder="Lauk">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Buah</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$listpaket->buah}}" name="buah" placeholder="Buah">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Minum</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$listpaket->minum}}" name="minum" placeholder="Minum">
                </div>
<!--                 <div class="form-group">
                  <label for="exampleInputFile">Foto Paket</label>
                  <input type="file" id="exampleInputFile" name="foto_paket">

                  <p class="help-block"></p>
                </div> -->
                <div class="form-group">
                  <label for="exampleInputFile">Foto Nasi</label>
                  <input type="file" id="exampleInputFile" name="foto_nasi">

                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto Sayur</label>
                  <input type="file" id="exampleInputFile" name="foto_sayur">

                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto Lauk</label>
                  <input type="file" id="exampleInputFile" name="foto_lauk">

                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto Buah</label>
                  <input type="file" id="exampleInputFile" name="foto_buah">

                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto Minum</label>
                  <input type="file" id="exampleInputFile" name="foto_minum">

                  <p class="help-block"></p>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah Tersedia</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$listpaket->available}}" name="available" >
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
            @endforeach
          </div>
          <!-- /.box --> 

        </div>
        <!--/.col (left) -->
        
      </div>
      <!-- /.row -->
    </section>
    </div>
@endsection


@section('js')
    <script>
        function changeProfile() {
            $('#image').click();
        }
        $('#image').change(function () {
            var imgPath = $(this)[0].value;
            var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
            if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
                readURL(this);
            else
                alert("Please select image file (jpg, jpeg, png).")
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.readAsDataURL(input.files[0]);
                reader.onload = function (e) {
                    $('#preview').attr('src', e.target.result);
                    $('#remove').val(0);
                }
            }
        }
        function removeImage() {
            $('#preview').attr('src', '{{url('paket/noimage.jpg')}}');
            $('#remove').val(1);
        }
    </script>
@endsection