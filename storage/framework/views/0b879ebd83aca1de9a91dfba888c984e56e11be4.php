
<?php $__env->startSection('title', 'Poltekes'); ?>
<?php $__env->startSection('content'); ?>
<p class="mt-4">
   <marquee>
      Selamat Datang di Sistem Informasi Kepegawaian Berbasis Web Politeknik Kesehatan Kota Ternate
   </marquee>
</p>
<div class="input-group mb-3">
   <div class="input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect01">Grafik Berdasarkan</label>
   </div>
   <select class="custom-select form-control" id="inputGroupSelect01" name="inputGroupSelect01">
      <option value="pendidikan">Pendidikan</option>
      <option value="golongan">Golongan</option>
      <option value="agama">Agama</option>
      <option value="jenis_kelamin">Jenis Kelamin</option>
   </select>
</div>
<!-- Graphic -->
<figure class="highcharts-figure">
   <div id="container"></div>
   <table id="datatable-pendidikan" style="display: none;">
      <thead>
         <tr>
            <th></th>
            <?php $__currentLoopData = $pendidikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            	<th><?php echo e($p); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tr>
      </thead>
      <tbody>
         <tr>
            <th>Jumlah</th>
            <?php $__currentLoopData = $pendidikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $jk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            	<th><?php echo e($cpendidikan[$key]); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tr>
      </tbody>
   </table>

   <table id="datatable-golongan" style="display: none;">
      <thead>
         <tr>
            <th></th>
            <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            	<th><?php echo e($g); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tr>
      </thead>
      <tbody>
         <tr>
            <th>Jumlah</th>
            <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $jk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            	<th><?php echo e($cgolongan[$key]); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tr>
      </tbody>
   </table>

   <table id="datatable-agama" style="display: none;">
      <thead>
         <tr>
            <th></th>
            <?php $__currentLoopData = $agama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            	<th><?php echo e($a); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tr>
      </thead>
      <tbody>
         <tr>
            <th>Jumlah</th>
            <?php $__currentLoopData = $agama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $jk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            	<th><?php echo e($cagama[$key]); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tr>
      </tbody>
   </table>

   <table id="datatable-jenis-kelamin" style="display: none;">
      <thead>
         <tr>
            <th></th>
            <?php $__currentLoopData = $jenis_kelamin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            	<th><?php echo e($jk); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tr>
      </thead>
      <tbody>
         <tr>
            <th>Jumlah</th>
            <?php $__currentLoopData = $jenis_kelamin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $jk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            	<th><?php echo e($cjenis_kelamin[$key]); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tr>
      </tbody>
   </table>
</figure>
<!-- Post Content -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
	$(".form-control").change(function(e) {
		var input = $('#inputGroupSelect01').val();
		if(input == "pendidikan"){
			Highcharts.chart('container', {
				data: {
					table: 'datatable-pendidikan'
				},
				
				chart: {
					type: 'column'
				},
				
				title: {
					text: 'KOMPOSISI PEGAWAI MENURUT PENDIDIKAN' + '<br /><span style="font-size:14px;">Politeknik Kesehatan Kemenkes Kota Ternate</span>'
				},
				
				yAxis: {
					allowDecimals: false,
					title: {
						text: 'Jumlah'
					}
				},
				
				tooltip: {
					formatter: function () {
						return '<b>' + this.series.name + '</b><br/>' +
						this.point.name.toLowerCase() + ': ' + this.point.y
					}
				}
			});
		}else if(input == "golongan"){
			Highcharts.chart('container', {
				data: {
					table: 'datatable-golongan'
				},
				
				chart: {
					type: 'column'
				},
				
				title: {
					text: 'KOMPOSISI PEGAWAI MENURUT GOLONGAN' + '<br /><span style="font-size:14px;">Politeknik Kesehatan Kemenkes Kota Ternate</span>'
				},
				
				yAxis: {
					allowDecimals: false,
					title: {
						text: 'Jumlah'
					}
				},
				
				tooltip: {
					formatter: function () {
						return '<b>' + this.series.name + '</b><br/>' +
						this.point.name.toLowerCase() + ': ' + this.point.y
					}
				}
			});
		}else if(input == "agama"){
			Highcharts.chart('container', {
				data: {
					table: 'datatable-agama'
				},
				
				chart: {
					type: 'column'
				},
				
				title: {
					text: 'KOMPOSISI PEGAWAI MENURUT AGAMA' + '<br /><span style="font-size:14px;">Politeknik Kesehatan Kemenkes Kota Ternate</span>'
				},
				
				yAxis: {
					allowDecimals: false,
					title: {
						text: 'Jumlah'
					}
				},
				
				tooltip: {
					formatter: function () {
						return '<b>' + this.series.name + '</b><br/>' +
						this.point.name.toLowerCase() + ': ' + this.point.y
					}
				}
			});
		}else if(input == "jenis_kelamin"){
			Highcharts.chart('container', {
				data: {
					table: 'datatable-jenis-kelamin'
				},
				
				chart: {
					type: 'column'
				},
				
				title: {
					text: 'KOMPOSISI PEGAWAI MENURUT JENIS KELAMIN' + '<br /><span style="font-size:14px;">Politeknik Kesehatan Kemenkes Kota Ternate</span>'
				},
				
				yAxis: {
					allowDecimals: false,
					title: {
						text: 'Jumlah'
					}
				},
				
				tooltip: {
					formatter: function () {
						return '<b>' + this.series.name + '</b><br/>' +
						this.point.name.toLowerCase() + ': ' + this.point.y
					}
				}
			});
		}
	});

	Highcharts.chart('container', {
			data: {
				table: 'datatable-pendidikan'
			},
			
			chart: {
				type: 'column'
			},
			
			title: {
				text: 'KOMPOSISI PEGAWAI MENURUT PENDIDIKAN' + '<br /><span style="font-size:14px;">Politeknik Kesehatan Kemenkes Kota Ternate</span>'
			},
			
			yAxis: {
				allowDecimals: false,
				title: {
					text: 'Jumlah'
				}
			},
			
			tooltip: {
				formatter: function () {
					return '<b>' + this.series.name + '</b><br/>' +
					this.point.name.toLowerCase() + ': ' + this.point.y
				}
			}
		});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\poltekes\resources\views/welcome.blade.php ENDPATH**/ ?>