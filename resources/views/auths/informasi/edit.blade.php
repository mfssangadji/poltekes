@extends('auths.layouts.app')
@section('title', 'Ubah Informasi')
@section('content')
	    <div class="x_panel">
			<div class="x_title">
				<h2>Form Edit <small><i>Informasi</i></small></h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form id="demo-form2" method="post" action="{{route('informasi').'/'.$informasi->id}}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
					@csrf
					@method('PATCH')
					<div class="item form-group">
						<label class="col-form-label col-md-1 col-sm-1 label-align" for="first-name">Judul <span class="required">*</span>
						</label>
						<div class="col-md-10 col-sm-1 ">
							<input type="text" id="judul" value="{{$informasi->judul}}" name="judul" required class="form-control ">
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-1 col-sm-1 label-align" for="first-name">Gambar <span class="required">*</span>
						</label>
						<div class="col-md-10 col-sm-1 ">
						<img src="{{asset('uploads/'.$informasi->gambar)}}" style="width: 230px;">
						<small>Kosongkan jika tidak diganti</small>
							<input type="file" id="gambar" name="gambar" class="">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-1 col-sm-1 label-align" for="first-name">Informasi <span class="required">*</span>
						</label>
						<div class="col-md-10 col-sm-1 ">
							<textarea id="summernote" name="isi" required>{{$informasi->isi}}</textarea>
						</div>
					</div>

					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-3">
							<button type="submit" class="btn btn-success btn-sm">Proses</button>
							<button class="btn btn-primary btn-sm" onclick="self.history.back()" type="reset">Batal</button>
						</div>
					</div>

				</form>
			</div>
		</div>
@endsection
@section('scripts')
<script>
  $(function () {
    $('.select2').select2({
          theme: "classic",
          maximumSelectionLength: 1,
    });

    $('#summernote').summernote({
    	toolbar: [
	    // [groupName, [list of button]]
	    ['style', ['bold', 'italic', 'underline', 'clear']],
	    ['font', ['strikethrough', 'superscript', 'subscript']],
	    ['fontsize', ['fontsize']],
	    ['color', ['color']],
	    ['para', ['ul', 'ol', 'paragraph']],
	    ['height', ['height']]
	  ]
    });
  })
</script>
@endsection