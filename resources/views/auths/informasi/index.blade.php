@extends('auths.layouts.app')
@section('title', 'Informasi')
@section('content')
	    <div class="x_panel">
	      <div class="x_title">
	        <h2>Data<small><i>Informasi</i></small></h2>
	        <a href="{{route('informasi.create')}}" class="btn btn-success btn-sm" style="float: right;">Tambah Baru</a>
	        <div class="clearfix"></div>
	      </div>
	          <div class="row">
	              <div class="col-sm-12">
	                <div class="card-box table-responsive">
	        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
	          <thead>
	            <tr>
	              <th>Judul Informasi</th>
	              <th>Diposting Oleh</th>
	              <th>Tanggal</th>
	              <th>Proses</th>
	            </tr>
	          </thead>
	          <tbody>
            	@foreach($informasi as $info)
            		<tr>
            			<td>{{$info->judul}}</td>
            			<td>{{$info->user->name}}</td>
            			<td>{{$info->created_at->format('d F Y')}}</td>
	            		<td>

			              	<a href="{{ route('informasi').'/'.$info->id.'/edit' }}" class="btn btn-info btn-sm btn-edit" title="ubah" style="padding-top:1px !important; padding-bottom:1px !important;"><i class="fa fa-pencil-square-o"></i></a><form method="post" action="{{ route('informasi').'/'.$info->id }}" style="display:inline;">
            					@method('DELETE')
            					@csrf
            				<button type="submit" class="btn btn-danger btn-sm" style="padding-top:1px !important; padding-bottom:1px !important;" onclick="return confirm('Apakan anda yakin?')" style="border: none;"><i class="fa fa-trash-o"></i></button>
            				</form>
			            </td>
            		</tr>
            	@endforeach
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>
@endsection