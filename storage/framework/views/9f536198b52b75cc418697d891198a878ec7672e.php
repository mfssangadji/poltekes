<?php $__env->startSection('title', 'Informasi'); ?>
<?php $__env->startSection('content'); ?>
	    <div class="x_panel">
	      <div class="x_title">
	        <h2>Data<small><i>Informasi</i></small></h2>
	        <a href="<?php echo e(route('informasi.create')); ?>" class="btn btn-success btn-sm" style="float: right;">Tambah Baru</a>
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
            	<?php $__currentLoopData = $informasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            		<tr>
            			<td><?php echo e($info->judul); ?></td>
            			<td><?php echo e($info->user->name); ?></td>
            			<td><?php echo e($info->created_at->format('d F Y')); ?></td>
	            		<td>

			              	<a href="<?php echo e(route('informasi').'/'.$info->id.'/edit'); ?>" class="btn btn-info btn-sm btn-edit" title="ubah" style="padding-top:1px !important; padding-bottom:1px !important;"><i class="fa fa-pencil-square-o"></i></a><form method="post" action="<?php echo e(route('informasi').'/'.$info->id); ?>" style="display:inline;">
            					<?php echo method_field('DELETE'); ?>
            					<?php echo csrf_field(); ?>
            				<button type="submit" class="btn btn-danger btn-sm" style="padding-top:1px !important; padding-bottom:1px !important;" onclick="return confirm('Apakan anda yakin?')" style="border: none;"><i class="fa fa-trash-o"></i></button>
            				</form>
			            </td>
            		</tr>
            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auths.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\poltekes\resources\views/auths/informasi/index.blade.php ENDPATH**/ ?>