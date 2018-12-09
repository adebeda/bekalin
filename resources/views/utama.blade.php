@extends('adminUtama')
    @section('css')
    @endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif
    <section class="content-header">
        <h1>
            Menu
            <small>Menu-menu yang tersedia berupa paket lengkap makan, minum, dan buah</small>
        </h1>
        <hr/>
        <div class="float-right">
            <a href="{{url('add')}}" class="btn btn-primary">New Menu</a>
        </div>

        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <div class="table-responsive" style="margin-top: 20px; height: 520px; width: 1100px;" >
    <section class="content container-fluid">
        <div class="container">
            <div class="row">
                @foreach($paket as $paket)
                    <div class="col-md-4 col-lg-3" style="margin-bottom: 20px">
                        <div class="card">
                            <img class="card-img-top"
                                 src="{{asset('fotoupload/'. $paket->foto_paket)}}"
                                 alt="{{$paket->nama_paket}}" width="100%" height="180px"/>
                            <div class="card-body">
                                <h4 class="card-title text-center">{{$paket->nama_paket}}</h4>
                                <h5 class="card-title text-center">{{$paket->nasi}}</h5>
                                <h5 class="card-title text-center">{{$paket->sayur}}</h5>
                                <h5 class="card-title text-center">{{$paket->lauk}}</h5>
                                <h5 class="card-title text-center">{{$paket->buah}}</h5>
                                <h5 class="card-title text-center">{{$paket->minum}}</h5>
                                <h4 class="btn btn-danger btn-sm btn-block">{{$paket->harga_paket}}</h4>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <form id="frm_{{$paket->id}}"
                                          action="{{url('manage-menu/delete/'.$paket->id)}}"
                                          method="post" style="padding-bottom: 0px;margin-bottom: 0px">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="{{ url('/delete/'.$paket->id) }}"
                                                   class="btn btn-danger btn-sm btn-block">Delete</a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="{{ url('/getPaket/'.$paket->id) }}"
                                                   class="btn btn-pr imary btn-sm btn-block">Edit</a>
                                            </div>
                                            <input type="hidden" name="_method" value="delete"/>
                                            {{csrf_field()}}
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    </div>
  </div>  
@endsection
