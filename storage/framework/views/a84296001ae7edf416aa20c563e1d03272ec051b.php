<?php $__env->startSection('title', 'Ubah Informasi'); ?>
<?php $__env->startSection('content'); ?>
	    <div class="x_panel">
			<div class="x_title">
				<h2>Form Edit <small><i>Informasi</i></small></h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form id="demo-form2" method="post" action="<?php echo e(route('informasi').'/'.$informasi->id); ?>" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<?php echo method_field('PATCH'); ?>
					<div class="item form-group">
						<label class="col-form-label col-md-1 col-sm-1 label-align" for="first-name">Judul <span class="required">*</span>
						</label>
						<div class="col-md-10 col-sm-1 ">
							<input type="text" id="judul" value="<?php echo e($informasi->judul); ?>" name="judul" required class="form-control ">
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-1 col-sm-1 label-align" for="first-name">Gambar <span class="required">*</span>
						</label>
						<div class="col-md-10 col-sm-1 ">
						<img src="<?php echo e(asset('uploads/'.$informasi->gambar)); ?>" style="width: 230px;">
						<small>Kosongkan jika tidak diganti</small>
							<input type="file" id="gambar" name="gambar" class="">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-1 col-sm-1 label-align" for="first-name">Informasi <span class="required">*</span>
						</label>
						<div class="col-md-10 col-sm-1 ">
							<textarea id="summernote" name="isi" required><?php echo e($informasi->isi); ?></textarea>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auths.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\poltekes\resources\views/auths/informasi/edit.blade.php ENDPATH**/ ?>