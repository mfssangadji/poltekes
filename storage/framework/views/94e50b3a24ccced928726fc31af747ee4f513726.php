
<?php $__env->startSection('title', 'Poltekes'); ?>
<?php $__env->startSection('content'); ?>
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
    <?php $__currentLoopData = $informasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $informasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    	<div class="col-md-4">
	      <div class="card mb-4 box-shadow">
	        <a href="<?php echo e(url('informasi/'.$informasi->id)); ?>" title="<?php echo e($informasi->judul); ?>"><img class="card-img-top" src="<?php echo e(asset('uploads/'.$informasi->gambar)); ?>" style="height: 130px;"></a>
	        <div class="card-body">
	          <p class="card-text"><a href="<?php echo e(url('informasi/'.$informasi->id)); ?>" title="<?php echo e($informasi->judul); ?>" style="text-decoration: none;"><?php echo e(substr($informasi->judul, 0, 30)); ?>...</a></p>
	          <div class="d-flex justify-content-between align-items-center">
	            <small class="text-muted"><?php echo e($informasi->created_at->diffForHumans()); ?></small>
	          </div>
	        </div>
	      </div>
	    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>
</div>
<hr>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\poltekes\resources\views/informasi/index.blade.php ENDPATH**/ ?>