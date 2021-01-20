<?php $__env->startSection('title', 'Arsip'); ?>
<?php $__env->startSection('content'); ?>
	    <div class="x_panel">
	      <div class="x_title">
	        <h2>Data<small><i>Arsip</i></small></h2>
	        <button class="btn btn-success btn-sm m-add" data-toggle="modal" data-target=".bs-example-modal-lg" style="float: right;">Tambah Baru</button>
	        <div class="clearfix"></div>
	      </div>
	          <div class="row">
	              <div class="col-sm-12">
	                <div class="card-box table-responsive">
	        <table id="datatable_responsive" class="table table-striped responsive nowrap" cellspacing="0" width="100%">
	          <thead>
	            <tr>
	              <th>ID</th>
	              <th>Diupload Oleh</th>
	              <th>Nama File</th>
	              <th>Jenis File</th>
	              <th>Tanggal Upload</th>
	              <th>Proses</th>
	            </tr>
	          </thead>
	          <tbody>
            	
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- modals -->
	<?php echo $__env->make('auths.arsip.modals.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- end Modals -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
  	var SITEURL = "<?php echo e(URL::to('').'/'.config('app.root').'/'); ?>";

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
	            url: SITEURL + 'arsip/' + id,
	            success: function(data){
	            	var table = $('#datatable_responsive').DataTable(); 
	        		table.ajax.reload(null, false);
	            }
	        });
		}
	}

	function editRecord(id) {
  		$(document).on('click', '.btn-edit', function() {
  			$('.modal-title').text('Form Ubah Arsip')
        	$('.f-add').modal('show');
        	$('#nama_file').val($(".btn-info").data('nama_file'))
        	$('#file').val($(".btn-info").data('file'))
        	$('.add').hide();
            $('.update').show();
    	});

    	$.ajax({
            type: 'GET',
            url: SITEURL + "json/arsip/" + id,
            
            success: function(data) {
                $('.modal-title').text('Form Ubah Arsip')
	        	$('.f-add').modal('show');
	        	$('#user_id').val(data.user_id)
	        	$('#nama_file').val(data.nama_file)
	        	$('#file').val(data.file)
	        	$('.add').hide();
            	$('.update').show();

            	var clickHandler = function(e){
			        $.ajax({
			            type: 'PUT',
			            url: SITEURL + "arsip/" + id,
			            cache : false,
			            data: {
		                    'user_id' : $('#user_id').val(),
					        'nama_file' : $('#nama_file').val(),
					        'file' : $('#file').val(),
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

		var tableData = $('#datatable_responsive').DataTable({
        	responsive: true,
			processing: false,
			serverSide: true,
			ajax: {
				type: 'POST',
				url: SITEURL + "json/arsip",
			},

			columns: [
			      { data: 'id', name: 'id', 'visible': true },
			      { data: 'user_id', name: 'user_id' },
			      { data: 'nama_file', name: 'nama_file' },
			      { data: 'file', name: 'file' },
			      { data: 'tanggal', name: 'tanggal' },
			      { 	data: 'id', 
	                    name: 'action',
	                    orderable: false,
	                    searchable: false,
	                    "render": function ( data, type, row, meta ) { 
							return '<a href="'+SITEURL+'arsip/download/'+ data +'" target="_blank" class="btn btn-info btn-sm btn-download" style="padding-top:1px !important; padding-bottom:1px !important;" id="'+ data +'"><i class="fa fa-download"></i></a><button type="button" class="btn btn-danger btn-sm" style="padding-top:1px !important; padding-bottom:1px !important;" id="'+ data +'" onclick="deleteRecord(this.id);"><i class="fa fa-trash-o"></i></button>'
	                    }
                  },
			],

			order: [[0, 'asc']]
		});

		$(document).on('click', '.m-add', function() {
			$('.select2').val('').trigger("change");
            $('#form-add')[0].reset();
            $('.f-add').modal('hide');
  			$('.modal-title').text('Form Tambah Arsip')
        	$('.f-add').modal('show');
        	$('.add').show();
            $('.update').hide();
    	});

	    $('.modal-footer').on('click', '.add', function() {
	        var user_id = $('#user_id').val();
	        var nama_file = $('#nama_file').val();
	        var file = $('#file').prop('files')[0];
	        var data = new FormData();
	        data.append('user_id', user_id);
	        data.append('nama_file', nama_file);
	        data.append('file', file);

	        $.ajaxSetup({
				headers: {
			        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			    }
			});

	        $.ajax({
	            type: 'POST',
	            url: SITEURL + "arsip",
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
<?php echo $__env->make('auths.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\poltekes\resources\views/auths/arsip/index.blade.php ENDPATH**/ ?>