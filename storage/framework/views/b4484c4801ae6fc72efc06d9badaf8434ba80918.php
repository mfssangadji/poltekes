
<?php $__env->startSection('title', 'Poltekes'); ?>
<?php $__env->startSection('content'); ?>
<p class="mt-4">
   <marquee>
      Selamat Datang di Sistem Informasi Kepegawaian Berbasis Web Politeknik Kesehatan Kota Ternate
   </marquee>
</p>
<hr>
<!-- Post Content -->
<main role="main" class="container">
  <h3 class="mt-5"><?php echo e($informasi->judul); ?></h3>
  <p>Diposting <?php echo e($informasi->created_at->diffForHumans()); ?>, oleh: <?php echo e($informasi->user->name); ?></p>
  <img src="<?php echo e(asset('uploads/'.$informasi->gambar)); ?>" style="width: 100%; margin-top: 10px;">
  <p class="lead"><?php echo $informasi->isi; ?></p>
  <p>Diposting pada <?php echo e($informasi->created_at->format('d F Y')); ?>, <?php echo e($informasi->created_at->format('h:i:s A')); ?> </p>
</main>
<hr>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\poltekes\resources\views/informasi/dinformasi.blade.php ENDPATH**/ ?>