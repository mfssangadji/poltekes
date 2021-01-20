<div class="modal fade bs-example-modal-lg f-add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Tambah Pegawai</h4>
      </div>
      <div class="modal-body">
        <form id="form-add" method="post" action="<?php echo e(route('users')); ?>" data-parsley-validate class="form-horizontal form-label-left">
          <?php echo csrf_field(); ?>
          <?php if(Request::segment(3) == 1): ?>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Unit Kerja <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select class="form-control select2" required="required" style="width: 100%" multiple="multiple" id="unit_id" name="unit_id">
                    <?php $__currentLoopData = $unit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e((int)$val->id); ?>"><?php echo e($val->nama_unit); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="email" id="nama" name="nama" required="required" class="form-control ">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">NIP <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="email" id="nip" name="nip" required="required" class="form-control ">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Golongan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select class="form-control select2" required="required" style="width: 100%" multiple="multiple" id="golongan" name="golongan">
                    <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e((int)$key); ?>"><?php echo e($val); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Jabatan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select class="form-control select2" required="required" style="width: 100%" multiple="multiple" id="jabatan" name="jabatan">
                    <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e((int)$key); ?>"><?php echo e($val); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Pendidikan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select class="form-control select2" required="required" style="width: 100%" multiple="multiple" id="pendidikan" name="pendidikan">
                    <?php $__currentLoopData = $pendidikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e((int)$key); ?>"><?php echo e($val); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Agama <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select class="form-control select2" required="required" style="width: 100%" multiple="multiple" id="agama" name="agama">
                    <?php $__currentLoopData = $agama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e((int)$key); ?>"><?php echo e($val); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Jenis Kelamin <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select class="form-control select2" required="required" style="width: 100%" multiple="multiple" id="jenis_kelamin" name="jenis_kelamin">
                    <?php $__currentLoopData = $jenis_kelamin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e((int)$key); ?>"><?php echo e($val); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No. Sertifikat Dosen <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="email" id="no_sertifikat_dosen" name="no_sertifikat_dosen" required="required" class="form-control ">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No. STR <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="email" id="no_str" name="no_str" required="required" class="form-control ">
                </div>
              </div>
          <?php elseif(Request::segment(3) == 2): ?>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Golongan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select class="form-control select2" required="required" style="width: 100%" multiple="multiple" id="golongan" name="golongan">
                    <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e((int)$key); ?>"><?php echo e($val); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Jabatan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select class="form-control select2" required="required" style="width: 100%" multiple="multiple" id="jabatan" name="jabatan">
                    <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e((int)$key); ?>"><?php echo e($val); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="email" id="nama" name="nama" required="required" class="form-control ">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">NIP <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="email" id="nip" name="nip" required="required" class="form-control ">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Pendidikan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select class="form-control select2" required="required" style="width: 100%" multiple="multiple" id="pendidikan" name="pendidikan">
                    <?php $__currentLoopData = $pendidikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e((int)$key); ?>"><?php echo e($val); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Agama <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select class="form-control select2" required="required" style="width: 100%" multiple="multiple" id="agama" name="agama">
                    <?php $__currentLoopData = $agama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e((int)$key); ?>"><?php echo e($val); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Jenis Kelamin <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select class="form-control select2" required="required" style="width: 100%" multiple="multiple" id="jenis_kelamin" name="jenis_kelamin">
                    <?php $__currentLoopData = $jenis_kelamin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e((int)$key); ?>"><?php echo e($val); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Unit Kerja <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select class="form-control select2" required="required" style="width: 100%" multiple="multiple" id="unit_id" name="unit_id">
                    <?php $__currentLoopData = $unit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e((int)$val->id); ?>"><?php echo e($val->nama_unit); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No. STR <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="email" id="no_str" name="no_str" required="required" class="form-control ">
                </div>
              </div>
          <?php else: ?>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="email" id="nama" name="nama" required="required" class="form-control ">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Unit Kerja <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select class="form-control select2" required="required" style="width: 100%" multiple="multiple" id="unit_id" name="unit_id">
                    <?php $__currentLoopData = $unit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e((int)$val->id); ?>"><?php echo e($val->nama_unit); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Pendidikan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select class="form-control select2" required="required" style="width: 100%" multiple="multiple" id="pendidikan" name="pendidikan">
                    <?php $__currentLoopData = $pendidikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e((int)$key); ?>"><?php echo e($val); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Agama <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select class="form-control select2" required="required" style="width: 100%" multiple="multiple" id="agama" name="agama">
                    <?php $__currentLoopData = $agama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e((int)$key); ?>"><?php echo e($val); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Jenis Kelamin <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <select class="form-control select2" required="required" style="width: 100%" multiple="multiple" id="jenis_kelamin" name="jenis_kelamin">
                    <?php $__currentLoopData = $jenis_kelamin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e((int)$key); ?>"><?php echo e($val); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
              </div>
          <?php endif; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary add">Simpan</button>
        <button type="button" class="btn btn-primary update">Ubah</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div><?php /**PATH C:\xampp\htdocs\poltekes\resources\views/auths/pegawai/modals/form.blade.php ENDPATH**/ ?>