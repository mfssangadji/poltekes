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
<main role="main" class="container">
  <h3 class="mt-5">{{$informasi->judul}}</h3>
  <p>Diposting {{ $informasi->created_at->diffForHumans() }}, oleh: {{$informasi->user->name}}</p>
  <img src="{{asset('uploads/'.$informasi->gambar)}}" style="width: 100%; margin-top: 10px;">
  <p class="lead">{!! $informasi->isi !!}</p>
  <p>Diposting pada {{ $informasi->created_at->format('d F Y') }}, {{$informasi->created_at->format('h:i:s A')}} </p>
</main>
<hr>
@endsection
@section('scripts')

@endsection