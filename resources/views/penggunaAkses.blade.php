@extends('adminUtama')
    @section('css')
    @endsection



@section('content')
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
               <h5>Hak akses <b>{{ $pengguna->name }}</b></h5>
				<br>
				<form action="{{action('penggunaController@editAksesPengguna')}}" method="POST">
				{{-- <div class="form-group @if ($errors->has('roles')) has-error @endif">
					<label>Roles</label>
					{!! Form::select('roles[]', $roles, isset($pengguna) ? $pengguna->roles->pluck('id')->toArray() : null,  ['class' => 'form-control']) !!}
					@if ($errors->has('roles'))
						<p class="help-block">{{ $errors->first('roles') }}</p>
					@endif
				</div> --}}
				<label>Permissions</label>
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead class="table-bordered">
							<tr style="text-align:center">
								<th>Kurir</th>
							</tr>
						</thead>
						<tr>							
								<td align="center">
									<div class="form-check">
										@if($pengguna->hasPermissionTo('view_kurir') || $pengguna->hasDirectPermission('view_kurir'))
											@if($pengguna->roles->pluck('name') == '["Admin"]')
												<input class="form-check-input" name="permissions[]" type="checkbox" value="view_kurir" checked="checked" disabled="disabled">
											@else
												<input class="form-check-input" name="permissions[]" type="checkbox" value="view_kurir" checked="checked">
											@endif
										@else
											<input class="form-check-input" name="permissions[]" type="checkbox" value="view_kurir">
										@endif
									</div>
								</td>		
							</tr>
						</tbody>
					</table>
				</div>
				<input type="hidden" name="id" value="{{$pengguna->id}}">
				{{ csrf_field() }}
				<div class="row" align="right">
					<div class="col-md-12">
						<button type="submit" class="btn btn-success">Simpan</button>
					</div>
				</div>
				</form>
                
              </div>
            </div>
          </div>
        </div>
    </section>  
  </div>

@endsection