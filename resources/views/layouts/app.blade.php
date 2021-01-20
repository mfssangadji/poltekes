<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="_token" content="{{ csrf_token() }}"/>
      <meta name="author" content="">
      <title>Sistem Informasi Kepegawaian Berbasis Web Politeknik Kesehatan Kemenkes Kota Ternate</title>
      <!-- Bootstrap core CSS -->
      <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="{{ asset('dashboard/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="{{asset('css/blog-post.css')}}" rel="stylesheet">
      <link href="{{asset('css/album.css')}}" rel="stylesheet">
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
      <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
   </head>
   <body>
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
         <div class="container">
            <a class="navbar-brand" href="{{route('welcome')}}">Politeknik Kesehatan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item @if(Request::segment(1) == '') active @endif">
                     <a class="nav-link" href="{{route('welcome')}}">Beranda
                     <span class="sr-only">(current)</span>
                     </a>
                  </li>
                  <li class="nav-item @if(Request::segment(1) == 'informasi') active @endif">
                     <a class="nav-link" href="{{route('pinformasi')}}">Informasi</a>
                  </li>
                  <li class="nav-item @if(Request::segment(1) == 'sdm') active @endif dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      SDM
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="dropdown-item" href="{{url('sdm/1')}}">Dosen</a></li>
                      <li><a class="dropdown-item" href="{{url('sdm/2')}}">Tenaga Kependidikan</a></li>
                      <li><a class="dropdown-item" href="{{url('sdm/3')}}">Tenaga Pendukung</a></li>
                    </ul>
                  </li>
                  <li class="nav-item @if(Request::segment(1) == 'sop-surat-masuk' || Request::segment(1) == 'sop-surat-keluar') active @endif dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      SOP Surat
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="dropdown-item" href="{{route('sop_surat_masuk')}}">Surat Masuk</a></li>
                      <li><a class="dropdown-item" href="{{route('sop_surat_keluar')}}">Surat Keluar</a></li>
                    </ul>
                  </li>
                  <li class="nav-item @if(Request::segment(1) == 'struktur-organisasi') active @endif">
                     <a class="nav-link" href="{{route('struktur_organisasi')}}">Struktur Organisasi</a>
                  </li>
                  <li class="nav-item @if(Request::segment(1) == 'tentang') active @endif">
                     <a class="nav-link" href="{{route('tentang')}}">Tentang</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <header class="bg-primary text-white" style="padding: 10px; background: #93c4f5 !important; border-bottom: 4px solid #88b6e3">
         <div class="container text-center">
            <p class="lead" style="margin-top: 10px;"><strong>SISKEP POLITEKNIK</strong><br>Sistem Informasi Kepegawaian Berbasis Web Politeknik Kesehatan Kota Ternate</p>
         </div>
      </header>
      <!-- Page Content -->
      <div class="container">
         <div class="row">
            <!-- Content Column -->
            <div class="col-lg-8">
               @yield('content')
            </div>
            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">
               @include('parts.sidebar')
            </div>
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
      <!-- Footer -->
      <!-- Bootstrap core JavaScript -->
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/data.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>
      <script src="https://code.highcharts.com/modules/accessibility.js"></script>
      <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      <script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
      <!-- Select2 -->
    <script src="{{asset('dashboard/plugins/select2/js/select2.full.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{asset('dashboard/plugins/select2/js/select2.full.min.js')}}"></script>
      @yield('scripts')
   </body>
</html>