<!-- Search Widget -->
<div class="card my-4">
  <h5 class="card-header">Cari Pegawai</h5>
  <div class="card-body">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="NIP/Nama Pegawai">
      <span class="input-group-append">
        <button class="btn btn-warning" type="button">Cari</button>
      </span>
    </div>
  </div>
</div>

<!-- Categories Widget -->
<div class="card my-4">
  <h5 class="card-header">Login User</h5>
  <div class="card-body">
    <div class="row">
      
    </div>
  </div>
</div>

<!-- Side Widget -->
<div class="card my-4">
  <h5 class="card-header">Informasi</h5>
  @foreach($xinformasi as $xinformasi)
    <div class="card-body">
      <a href="{{url('informasi/'.$xinformasi->id)}}" style="text-decoration: none">
        <img src="{{asset('uploads/'.$xinformasi->gambar)}}" style="width: 100%; height: 180px;">
      </a>
      <a href="{{url('informasi/'.$xinformasi->id)}}" style="text-decoration: none">{{$xinformasi->judul}}</a>
      <p>Diposting {{ $xinformasi->created_at->diffForHumans() }}</p>
    </div>
  @endforeach
</div>