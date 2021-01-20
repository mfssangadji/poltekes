<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="<?php echo e(csrf_token()); ?>"/>
    <link rel="icon" href="#" type="image/ico" />

    <title>Dashboard - <?php echo $__env->yieldContent('title'); ?></title>
    <?php echo notifyCss(); ?>
    <!-- Bootstrap -->
    <link href="<?php echo e(asset('dashboard/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('dashboard/vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('dashboard/vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo e(asset('dashboard/vendors/iCheck/skins/flat/green.css')); ?>" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?php echo e(asset('dashboard/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo e(asset('dashboard/vendors/jqvmap/dist/jqvmap.min.css')); ?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo e(asset('dashboard/vendors/bootstrap-daterangepicker/daterangepicker.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('dashboard/build/css/custom.min.css')); ?>" rel="stylesheet">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo e(asset('dashboard/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')); ?>" rel="stylesheet">
    <!-- summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('dashboard/vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <?php echo $__env->make('notify::messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo e(route('dashboard')); ?>" class="site_title"><span><center>Dashboard</center></span></a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div style="text-align: center; padding-right: 2px;">
              Politeknik Kesehatan Ternate
            </div>
            <!-- <div style="text-align: center; padding-right: 20px;">
              <img src="<?php echo e(asset('logo.png')); ?>" style="width: 80px; background-color: none !important; margin-left:15px;" alt="...">
            </div> -->
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li>
                    <a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-home"></i> Beranda </a>
                  </li>
                  <li><a><i class="fa fa-gear"></i> Pengaturan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo e(route('users')); ?>">Data Pengguna</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="<?php echo e(route('informasi')); ?>"><i class="fa fa-edit"></i> Manajemen Informasi </a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Kepegawaian <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <?php $__currentLoopData = $jenis_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li><a href="<?php echo e(url(config('app.root').'/pegawai/'.$jp->id.'/data')); ?>"><?php echo e($jp->nama_jenis_pegawai); ?></a></li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                  </li>
                  <li>
                    <a href="<?php echo e(route('arsip')); ?>"><i class="fa fa-archive"></i> Arsip </a>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Lainnya</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo e(route('logout')); ?>" onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" href="#" title="Pengaturan">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Version 0.0.1
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo e(asset('dashboard/vendors/jquery/dist/jquery.min.js')); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo e(asset('dashboard/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo e(asset('dashboard/vendors/fastclick/lib/fastclick.js')); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo e(asset('dashboard/vendors/nprogress/nprogress.js')); ?>"></script>
    <!-- Chart.js -->
    <script src="<?php echo e(asset('dashboard/vendors/Chart.js/dist/Chart.min.js')); ?>"></script>
    <!-- gauge.js -->
    <script src="<?php echo e(asset('dashboard/vendors/gauge.js/dist/gauge.min.js')); ?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo e(asset('dashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')); ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo e(asset('dashboard/vendors/iCheck/icheck.min.js')); ?>"></script>
    <!-- Skycons -->
    <script src="<?php echo e(asset('dashboard/vendors/skycons/skycons.js')); ?>"></script>
    <!-- Flot -->
    <script src="<?php echo e(asset('dashboard/vendors/Flot/jquery.flot.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/Flot/jquery.flot.pie.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/Flot/jquery.flot.time.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/Flot/jquery.flot.stack.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/Flot/jquery.flot.resize.js')); ?>"></script>
    <!-- Flot plugins -->
    <script src="<?php echo e(asset('dashboard/vendors/flot.orderbars/js/jquery.flot.orderBars.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/flot-spline/js/jquery.flot.spline.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/flot.curvedlines/curvedLines.js')); ?>"></script>
    <!-- DateJS -->
    <script src="<?php echo e(asset('dashboard/vendors/DateJS/build/date.js')); ?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo e(asset('dashboard/vendors/jqvmap/dist/jquery.vmap.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/jqvmap/dist/maps/jquery.vmap.world.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')); ?>"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo e(asset('dashboard/vendors/moment/min/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>

    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo e(asset('dashboard/vendors/nprogress/nprogress.js')); ?>"></script>
    <!-- jQuery Smart Wizard -->
    <script src="<?php echo e(asset('dashboard/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')); ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo e(asset('dashboard/build/js/custom.min.js')); ?>"></script>

    <!-- Select2 -->
    <script src="<?php echo e(asset('dashboard/plugins/select2/js/select2.full.min.js')); ?>"></script>
    <!-- Select2 -->
    <script src="<?php echo e(asset('dashboard/plugins/select2/js/select2.full.min.js')); ?>"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo e(asset('dashboard/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')); ?>"></script>
    <!-- summernote -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <?php echo notifyJs(); ?>
    <?php echo $__env->yieldContent('scripts'); ?>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\poltekes\resources\views/auths/layouts/app.blade.php ENDPATH**/ ?>