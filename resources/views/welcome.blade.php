@extends('layouts.app')
@section('title', 'Poltekes')
@section('content')
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
            @foreach($pendidikan as $p)
            	<th>{{$p}}</th>
            @endforeach
         </tr>
      </thead>
      <tbody>
         <tr>
            <th>Jumlah</th>
            @foreach($pendidikan as $key => $jk)
            	<th>{{$cpendidikan[$key]}}</th>
            @endforeach
         </tr>
      </tbody>
   </table>

   <table id="datatable-golongan" style="display: none;">
      <thead>
         <tr>
            <th></th>
            @foreach($golongan as $g)
            	<th>{{$g}}</th>
            @endforeach
         </tr>
      </thead>
      <tbody>
         <tr>
            <th>Jumlah</th>
            @foreach($golongan as $key => $jk)
            	<th>{{$cgolongan[$key]}}</th>
            @endforeach
         </tr>
      </tbody>
   </table>

   <table id="datatable-agama" style="display: none;">
      <thead>
         <tr>
            <th></th>
            @foreach($agama as $a)
            	<th>{{$a}}</th>
            @endforeach
         </tr>
      </thead>
      <tbody>
         <tr>
            <th>Jumlah</th>
            @foreach($agama as $key => $jk)
            	<th>{{$cagama[$key]}}</th>
            @endforeach
         </tr>
      </tbody>
   </table>

   <table id="datatable-jenis-kelamin" style="display: none;">
      <thead>
         <tr>
            <th></th>
            @foreach($jenis_kelamin as $jk)
            	<th>{{$jk}}</th>
            @endforeach
         </tr>
      </thead>
      <tbody>
         <tr>
            <th>Jumlah</th>
            @foreach($jenis_kelamin as $key => $jk)
            	<th>{{$cjenis_kelamin[$key]}}</th>
            @endforeach
         </tr>
      </tbody>
   </table>
</figure>
<!-- Post Content -->
@endsection
@section('scripts')
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
@endsection