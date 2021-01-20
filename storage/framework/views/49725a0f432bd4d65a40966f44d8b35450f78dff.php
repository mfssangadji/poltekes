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
  <?php $__currentLoopData = $xinformasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xinformasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card-body">
      <a href="<?php echo e(url('informasi/'.$xinformasi->id)); ?>" style="text-decoration: none">
        <img src="<?php echo e(asset('uploads/'.$xinformasi->gambar)); ?>" style="width: 100%; height: 180px;">
      </a>
      <a href="<?php echo e(url('informasi/'.$xinformasi->id)); ?>" style="text-decoration: none"><?php echo e($xinformasi->judul); ?></a>
      <p>Diposting <?php echo e($xinformasi->created_at->diffForHumans()); ?></p>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH C:\xampp\htdocs\poltekes\resources\views/parts/sidebar.blade.php ENDPATH**/ ?>