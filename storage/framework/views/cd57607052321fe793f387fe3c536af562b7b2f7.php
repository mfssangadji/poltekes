
<?php $__env->startSection('title', 'Poltekes'); ?>
<?php $__env->startSection('content'); ?>
<p class="mt-4">
   <marquee>
      Selamat Datang di Sistem Informasi Kepegawaian Berbasis Web Politeknik Kesehatan Kota Ternate
   </marquee>
</p>
<hr>
<!-- Post Content -->
<input type="hidden" name="jid" id="jid" value="<?php echo e(Request::segment(2)); ?>">
	    <div class="x_panel">
	      <div class="x_title">
	      	<?php if(Request::segment(2) == 1): ?>
	        	<h2><small>Dosen</small></h2>
	        <?php elseif(Request::segment(2) == 2): ?>
	        	<h2><small>Tenaga Kependidikan</small></h2>
	        <?php else: ?>
	        	<h2><small>Tenaga Pendukung</small></h2>
	        <?php endif; ?>
	        <div class="clearfix"></div>
	      </div>
	          <div class="row">
	              <div class="col-sm-12">
	                <div class="card-box table-responsive">
	        <table id="datatable_responsive" class="table table-striped responsive nowrap" cellspacing="0" width="100%">
	          <thead>
	            <tr>
	              <?php if(Request::segment(2) == 1): ?>
						<th>ID</th>
						<th>Nama</th>
						<th>Proses</th>
	              <?php elseif(Request::segment(2) == 2): ?>
	              		<th>ID</th>
						<th>Nama</th>
						<th>Proses</th>
	              <?php else: ?>
	              		<th>ID</th>
						<th>Nama</th>
						<th>Proses</th>
	              <?php endif; ?>
	            </tr>
	          </thead>
	          <tbody>
            	
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>
<hr>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php $__env->startSection('scripts'); ?>
<script>
  	var SITEURL = "<?php echo e(URL::to('').'/'.config('app.root').'/'); ?>";
  	var JID = $('#jid').val();

  	function deleteRecord(id) {
  		var result = confirm("Apakah anda yakin?");
  		if(result == true){
	  		$.ajaxSetup({
				headers: {
			        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			    }
			});

			$.ajax({
	            type: 'DELETE',
	            url: SITEURL + 'pegawai/' + id,
	            success: function(data){
	            	var table = $('#datatable_responsive').DataTable(); 
	        		table.ajax.reload(null, false);
	            }
	        });
		}
	}

	function editRecord(id) {
  		$(document).on('click', '.btn-edit', function() {
  			if(JID == 1){
	        	$('#unit_id').val($(".btn-info").data('unit_id'))
  				$('.modal-title').text('Form Ubah Dosen')
	        	$('.f-add').modal('show');
  			}else if(JID == 2){
	        	$('#unit_id').val($(".btn-info").data('unit_id'))
  				$('.modal-title').text('Form Ubah Tenaga Kependidikan')
	        	$('.f-add').modal('show');
  			}else{
  				$('#unit_id').val($(".btn-info").data('unit_id'))
  				$('.modal-title').text('Form Ubah Tenaga Pendukung')
	        	$('.f-add').modal('show');
  			}

        	$('.add').hide();
            $('.update').show();
    	});

    	$.ajax({
            type: 'GET',
            url: SITEURL + "json/pegawai/" + id,
            
            success: function(data) {
                if(JID == 1){
                	$('.modal-title').text('Form Ubah Dosen')
		        	$('.f-add').modal('show');
		        	$('#unit_id').val(data.unit_id).trigger('change')
		        	$('#nama').val(data.nama)
		        	$('#nip').val(data.nip)
		        	$('#golongan').val(data.golongan).trigger('change')
		        	$('#jabatan').val(data.jabatan).trigger('change')
		        	$('#pendidikan').val(data.pendidikan).trigger('change')
		        	$('#agama').val(data.agama).trigger('change')
		        	$('#jenis_kelamin').val(data.jenis_kelamin).trigger('change')
		        	$('#no_sertifikat_dosen').val(data.no_sertifikat_dosen)
		        	$('#no_str').val(data.no_str)
		        	$('.add').hide();
	            	$('.update').show();

	            	var clickHandler = function(e){
				        $.ajax({
				            type: 'PUT',
				            url: SITEURL + "pegawai/" + id,
				            cache : false,
				            data: {
			                    'unit_id' : parseInt($('#unit_id').val()),
						        'nama' : $('#nama').val(),
						        'nip' : $('#nip').val(),
						        'golongan' : parseInt($('#golongan').val()),
						        'jabatan' : parseInt($('#jabatan').val()),
						        'pendidikan' : parseInt($('#pendidikan').val()),
						        'agama' : parseInt($('#agama').val()),
						        'jenis_kelamin' : parseInt($('#jenis_kelamin').val()),
						        'no_sertifikat_dosen' : $('#no_sertifikat_dosen').val(),
						        'no_str' : $('#no_str').val(),
			                },
				            success: function(data) {
				                console.log(data)
				                tableData = $('#datatable_responsive').DataTable();
				                $('.select2').val('').trigger("change");
				                $('#form-add')[0].reset();
				                $('.f-add').modal('hide');
				                tableData.ajax.reload();
				            },
				        });
				        // Handler Twice Request
				        e.stopImmediatePropagation();
				     	return false;
					}
                }else if(JID == 2){
                	$('.modal-title').text('Form Ubah Tenaga Kependidikan')
		        	$('.f-add').modal('show');
		        	$('#golongan').val(data.golongan).trigger('change')
		        	$('#jabatan').val(data.jabatan).trigger('change')
		        	$('#nama').val(data.nama)
		        	$('#nip').val(data.nip)
		        	$('#pendidikan').val(data.pendidikan).trigger('change')
		        	$('#agama').val(data.agama).trigger('change')
		        	$('#jenis_kelamin').val(data.jenis_kelamin).trigger('change')
		        	$('#unit_id').val(data.unit_id).trigger('change')
		        	$('#no_str').val(data.no_str)
		        	$('.add').hide();
	            	$('.update').show();

	            	var clickHandler = function(e){
				        $.ajax({
				            type: 'PUT',
				            url: SITEURL + "pegawai/" + id,
				            cache : false,
				            data: {
						        'golongan' : parseInt($('#golongan').val()),
						        'jabatan' : parseInt($('#jabatan').val()),
						        'nama' : $('#nama').val(),
						        'nip' : $('#nip').val(),
						        'pendidikan' : parseInt($('#pendidikan').val()),
						        'agama' : parseInt($('#agama').val()),
						        'jenis_kelamin' : parseInt($('#jenis_kelamin').val()),
			                    'unit_id' : parseInt($('#unit_id').val()),
						        'no_str' : $('#no_str').val(),
			                },
				            success: function(data) {
				                console.log(data)
				                tableData = $('#datatable_responsive').DataTable();
				                $('.select2').val('').trigger("change");
				                $('#form-add')[0].reset();
				                $('.f-add').modal('hide');
				                tableData.ajax.reload();
				            },
				        });
				        // Handler Twice Request
				        e.stopImmediatePropagation();
				     	return false;
					}
                }else if(JID == 3){
                	$('.modal-title').text('Form Ubah Tenaga Pendukung')
		        	$('.f-add').modal('show');
		        	$('#nama').val(data.nama)
		        	$('#unit_id').val(data.unit_id).trigger('change')
		        	$('#pendidikan').val(data.pendidikan).trigger('change')
		        	$('#agama').val(data.agama).trigger('change')
		        	$('#jenis_kelamin').val(data.jenis_kelamin).trigger('change')
		        	$('.add').hide();
	            	$('.update').show();

	            	var clickHandler = function(e){
				        $.ajax({
				            type: 'PUT',
				            url: SITEURL + "pegawai/" + id,
				            cache : false,
				            data: {
						        'nama' : $('#nama').val(),
			                    'unit_id' : parseInt($('#unit_id').val()),
						        'pendidikan' : parseInt($('#pendidikan').val()),
						        'agama' : parseInt($('#agama').val()),
						        'jenis_kelamin' : parseInt($('#jenis_kelamin').val()),
			                },
				            success: function(data) {
				                console.log(data)
				                tableData = $('#datatable_responsive').DataTable();
				                $('.select2').val('').trigger("change");
				                $('#form-add')[0].reset();
				                $('.f-add').modal('hide');
				                tableData.ajax.reload();
				            },
				        });
				        // Handler Twice Request
				        e.stopImmediatePropagation();
				     	return false;
					}
                }

			    $('.update').one('click', clickHandler);
            },
        });
	}

	$(document).ready( function () {
		$('.select2').select2({
		      theme: "classic",
		      maximumSelectionLength: 1,
		});

		$.ajaxSetup({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
		    }
		});

		if(JID == 1){
			var tableData = $('#datatable_responsive').DataTable({
	        	responsive: true,
				processing: false,
				serverSide: true,
				ajax: {
					type: 'POST',
					url: SITEURL + "json/" + JID + "/pegawai",
				},

				columns: [
				      { data: 'id', name: 'id', 'visible': true },
				      { data: 'nama', name: 'nama' },
				      { 	data: 'id', 
		                    name: 'action',
		                    orderable: false,
		                    searchable: false,
		                    "render": function ( data, type, row, meta ) { 
		                    	return '<a href="#" id="'+data+'" class="btn btn-success btn-sm btn-edit" style="padding-top:1px !important; padding-bottom:1px !important;" id="'+ data +'" onclick="editRecord(this.id);"><i class="fa fa-eye"></i></a>'
		                    }
	                  },
				],

				order: [[0, 'asc']]
			});
		}else if(JID == 2){
			var tableData = $('#datatable_responsive').DataTable({
	        	responsive: true,
				processing: false,
				serverSide: true,
				ajax: {
					type: 'POST',
					url: SITEURL + "json/" + JID + "/pegawai",
				},

				columns: [
				      { data: 'id', name: 'id', 'visible': true },
				      { data: 'nama', name: 'nama' },
				      { 	data: 'id', 
		                    name: 'action',
		                    orderable: false,
		                    searchable: false,
		                    "render": function ( data, type, row, meta ) { 
								return '<a href="#" id="'+data+'" class="btn btn-success btn-sm btn-edit" style="padding-top:1px !important; padding-bottom:1px !important;" id="'+ data +'" onclick="editRecord(this.id);"><i class="fa fa-eye"></i></a>'
		                    }
	                  },
				],

				order: [[0, 'asc']]
			});
		}else{
			var tableData = $('#datatable_responsive').DataTable({
	        	responsive: true,
				processing: false,
				serverSide: true,
				ajax: {
					type: 'POST',
					url: SITEURL + "json/" + JID + "/pegawai",
				},

				columns: [
				      { data: 'id', name: 'id', 'visible': true },
				      { data: 'nama', name: 'nama' },
				      { 	data: 'id', 
		                    name: 'action',
		                    orderable: false,
		                    searchable: false,
		                    "render": function ( data, type, row, meta ) { 
		                    	return '<a href="#" id="'+data+'" class="btn btn-success btn-sm btn-edit" style="padding-top:1px !important; padding-bottom:1px !important;" id="'+ data +'" onclick="editRecord(this.id);"><i class="fa fa-eye"></i></a>'
		                    }
	                  },
				],

				order: [[0, 'asc']]
			});
		}

		$(document).on('click', '.m-add', function() {
			$('.select2').val('').trigger("change");
            $('#form-add')[0].reset();
            $('.f-add').modal('hide');
  			if(JID == 1){
  				$('.modal-title').text('Form Tambah Dosen')
  			}else if(JID == 2){
  				$('.modal-title').text('Form Tambah Tenaga Kependidikan')
  			}else{
  				$('.modal-title').text('Form Tambah Tenaga Pendukung')
  			}
        	$('.f-add').modal('show');
        	$('.add').show();
            $('.update').hide();
    	});

	    $('.modal-footer').on('click', '.add', function() {
	        if(JID == 1){
	        	var jenis_pegawai_id = JID;
	        	var unit_id = $('#unit_id').val();
	        	var nama = $('#nama').val();
	        	var nip = $('#nip').val();
	        	var golongan = $('#golongan').val();
	        	var jabatan = $('#jabatan').val();
	        	var pendidikan = $('#pendidikan').val();
	        	var agama = $('#agama').val();
	        	var jenis_kelamin = $('#jenis_kelamin').val();
	        	var no_sertifikat_dosen = $('#no_sertifikat_dosen').val();
	        	var no_str = $('#no_str').val();
		        var data = new FormData();
		        data.append('jenis_pegawai_id', jenis_pegawai_id);
		        data.append('unit_id', unit_id);
		        data.append('nama', nama);
		        data.append('nip', nip);
		        data.append('golongan', golongan);
		        data.append('jabatan', jabatan);
		        data.append('pendidikan', pendidikan);
		        data.append('agama', agama);
		        data.append('jenis_kelamin', jenis_kelamin);
		        data.append('no_sertifikat_dosen', no_sertifikat_dosen);
		        data.append('no_str', no_str);
	        }else if(JID == 2){
	        	var jenis_pegawai_id = JID;
	        	var golongan = $('#golongan').val();
	        	var jabatan = $('#jabatan').val();
	        	var nama = $('#nama').val();
	        	var nip = $('#nip').val();
	        	var pendidikan = $('#pendidikan').val();
	        	var agama = $('#agama').val();
	        	var jenis_kelamin = $('#jenis_kelamin').val();
	        	var unit_id = $('#unit_id').val();
	        	var no_str = $('#no_str').val();
		        var data = new FormData();
		        data.append('jenis_pegawai_id', jenis_pegawai_id);
		        data.append('golongan', golongan);
		        data.append('jabatan', jabatan);
		        data.append('nama', nama);
		        data.append('nip', nip);
		        data.append('pendidikan', pendidikan);
		        data.append('agama', agama);
		        data.append('jenis_kelamin', jenis_kelamin);
		        data.append('unit_id', unit_id);
		        data.append('no_str', no_str);
	        }else{
	        	var jenis_pegawai_id = JID;
	        	var nama = $('#nama').val();
	        	var unit_id = $('#unit_id').val();
	        	var pendidikan = $('#pendidikan').val();
	        	var agama = $('#agama').val();
	        	var jenis_kelamin = $('#jenis_kelamin').val();
		        var data = new FormData();
		        data.append('jenis_pegawai_id', jenis_pegawai_id);
		        data.append('nama', nama);
		        data.append('unit_id', unit_id);
		        data.append('pendidikan', pendidikan);
		        data.append('agama', agama);
		        data.append('jenis_kelamin', jenis_kelamin);
	        }

	        $.ajaxSetup({
				headers: {
			        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			    }
			});

	        $.ajax({
	            type: 'POST',
	            url: SITEURL + "pegawai",
	            cache       : false,
	            contentType : false,
	            processData : false,
	            data: data,
	            success: function(data) {
	                $('.select2').val('').trigger("change");
	                $('#form-add')[0].reset();
	                $('.f-add').modal('hide');
	                tableData.ajax.reload();
	            },
	        });
	    });
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\poltekes\resources\views/sdm/index.blade.php ENDPATH**/ ?>