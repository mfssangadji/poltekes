@extends('layouts.app')
@section('title', 'Poltekes')
@section('content')
<p class="mt-4">
   <marquee>
      Selamat Datang di Sistem Informasi Kepegawaian Berbasis Web Politeknik Kesehatan Kota Ternate
   </marquee>
</p>
<hr>
<!-- Post Content -->
<div class="album py-5 bg-light">
<div class="container">
  <div class="row">
    @foreach($informasi as $informasi)
    	<div class="col-md-4">
	      <div class="card mb-4 box-shadow">
	        <a href="{{url('informasi/'.$informasi->id)}}" title="{{$informasi->judul}}"><img class="card-img-top" src="{{asset('uploads/'.$informasi->gambar)}}" style="height: 130px;"></a>
	        <div class="card-body">
	          <p class="card-text"><a href="{{url('informasi/'.$informasi->id)}}" title="{{$informasi->judul}}" style="text-decoration: none;">{{substr($informasi->judul, 0, 30)}}...</a></p>
	          <div class="d-flex justify-content-between align-items-center">
	            <small class="text-muted">{{ $informasi->created_at->diffForHumans() }}</small>
	          </div>
	        </div>
	      </div>
	    </div>
    @endforeach
  </div>
</div>
</div>
<hr>
@endsection
@section('scripts')

@endsection