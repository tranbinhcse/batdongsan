<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>iFlyCMS - @yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="{{ url('public/macadmin/css/font-awesome.min.css') }}"> 
  <!-- jQuery UI -->
  <link rel="stylesheet" href="{{ url('public/macadmin/css/jquery-ui.css') }}"> 
  <!-- Calendar -->
  <link rel="stylesheet" href="{{ url('public/macadmin/css/fullcalendar.css') }}">
  <!-- prettyPhoto -->
  <link rel="stylesheet" href="{{ url('public/macadmin/css/prettyPhoto.css') }}">  
  <!-- Star rating -->
  <link rel="stylesheet" href="{{ url('public/macadmin/css/rateit.css') }}">
  <!-- Date picker -->
  <link rel="stylesheet" href="{{ url('public/macadmin/css/bootstrap-datetimepicker.min.css') }}">
  <!-- Bootstrap Select -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.3/css/bootstrap-select.min.css">
  <!-- CLEditor -->
  <link rel="stylesheet" href="{{ url('public/macadmin/css/jquery.cleditor.css') }}"> 
  <!-- Data tables -->
  <link rel="stylesheet" href="{{ url('public/macadmin/css/jquery.dataTables.css') }}"> 
  <!-- Bootstrap toggle -->
  <link rel="stylesheet" href="{{ url('public/macadmin/css/jquery.onoff.css') }}">
  <!-- Main stylesheet -->
  <link href="{{ url('public/macadmin/css/style.css') }}" rel="stylesheet">
  <!-- Widgets stylesheet -->
  <link href="{{ url('public/macadmin/css/widgets.css') }}" rel="stylesheet">   
  
  <script src="{{ url('public/macadmin/js/respond.min.js') }}"></script>
  <!--[if lt IE 9]>
  <script src="{{ url('public/macadmin/js/html5shiv.js') }}"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ url('public/macadmin/img/favicon/favicon.png') }}">
</head>

<body>

<div class="navbar navbar-static-top bs-docs-nav" role="banner">
  
    <div class="conjtainer">
      <!-- Menu button for smallar screens -->
      <div class="navbar-header">
          <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
            <span>Menu</span>
          </button>
          <!-- Site name for smallar screens -->
          <a href="index.html" class="navbar-brand">MacBeth</a>
        </div>
      
      

      <!-- Navigation starts -->
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">         

        <ul class="nav navbar-nav">  

          <!-- Upload to server link. Class "dropdown-big" creates big dropdown -->
          <li class="dropdown dropdown-big">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-success"><i class="fa fa-cloud-upload"></i></span> Upload to Cloud</a>
            <!-- Dropdown -->
            <ul class="dropdown-menu">
              <li>
                <!-- Progress bar -->
                <p>Photo Upload in Progress</p>
                <!-- Bootstrap progress bar -->
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        <span class="sr-only">40% Complete</span>
                    </div>
                </div>

                <hr />

                <!-- Progress bar -->
                <p>Video Upload in Progress</p>
                <!-- Bootstrap progress bar -->
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80% Complete</span>
                    </div>
                </div> 

                <hr />             

                <!-- Dropdown menu footer -->
                <div class="drop-foot">
                  <a href="#">View All</a>
                </div>

              </li>
            </ul>
          </li>

          <!-- Sync to server link -->
          <li class="dropdown dropdown-big">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-danger"><i class="fa fa-refresh"></i></span> Sync with Server</a>
            <!-- Dropdown -->
            <ul class="dropdown-menu">
              <li>
                <!-- Using "icon-spin" class to rotate icon. -->
                <p><span class="label label-info"><i class="fa fa-cloud"></i></span> Syncing Members Lists to Server</p>
                <hr />
                <p><span class="label label-warning"><i class="fa fa-cloud"></i></span> Syncing Bookmarks Lists to Cloud</p>

                <hr />

                <!-- Dropdown menu footer -->
                <div class="drop-foot">
                  <a href="#">View All</a>
                </div>

              </li>
            </ul>
          </li>

        </ul>

        <!-- Search form -->
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
        <!-- Links -->
        <ul class="nav navbar-nav pull-right">
          <li class="dropdown pull-right">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-user"></i> Admin <b class="caret"></b>              
            </a>
            
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
              <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
              <li><a href="login.html"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
          </li>
          
        </ul>
      </nav>

    </div>
  </div>


<!-- Header starts -->
  
<!-- Header ends -->

<!-- Main content starts -->

<div class="content">

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav">
          <!-- Main menu with font awesome icon -->
          <li><a href="{!! url('admin') !!}"><i class="fa fa-home"></i> Dashboard</a>
            <!-- Sub menu markup 
            <ul>
              <li><a href="#">Submenu #1</a></li>
              <li><a href="#">Submenu #2</a></li>
              <li><a href="#">Submenu #3</a></li>
            </ul>-->
          </li>
          <li class="has_sub {!! Request::is('admin/project*') ? 'open' : '' !!} {!! Request::is('admin/cate*') ? 'open' : '' !!} {!! Request::is('admin/product*') ? 'open' : '' !!}"><a href="#"><i class="fa fa-list-alt"></i>Bất động sản  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li class="{!! Route::is('admin.property.getList') ? 'current' : '' !!}"><a href="{!! route('admin.property.getList') !!}">Danh sách tin</a></li>
              <li class="{!! Route::is('admin.cate.list') ? 'current' : '' !!}"><a href="{!! route('admin.cate.list') !!}">Danh mục tin</a></li>
              <li class="{!! Route::is('admin.project.getAdd') ? 'current' : '' !!}"><a href="{!! route('admin.project.getList') !!}">Dự án</a></li>
            </ul>
          </li>
          <li class="has_sub {!! Request::is('admin/news*') ? 'open' : '' !!}"><a href="#"><i class="fa fa-list-alt"></i>Tin tức  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li class="{!! Request::is('admin/news/list') ? 'current' : '' !!} {!! Request::is('admin/news/add') ? 'current' : '' !!} {!! Request::is('admin/news/edit*') ? 'current' : '' !!}"><a href="{!! route('admin.news.getList') !!}">Danh sách tin tức</a></li>
              <li class="{!! Request::is('admin/news/cate*') ? 'current' : '' !!}"><a href="{!! route('admin.news.cate.getList') !!}">Danh mục tin tức</a></li>
            </ul>
          </li> 
          <li class="{!! Request::is('admin/user*') ? 'open' : '' !!}"><a href="{!! route('admin.user.getList') !!}"><i class="fa fa-list-alt"></i>Thành viên  </a></li>
          <li class="has_sub {!! Request::is('admin/location*') ? 'open' : '' !!}"><a href="#"><i class="fa fa-list-alt"></i>Địa giới  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li class="{!! Request::is('admin/location/province*') ? 'current' : '' !!}"><a href="{!! route('admin.location.province.getList') !!}">Tỉnh/Thành</a></li>
              <li class="{!! Request::is('admin/location/district*') ? 'current' : '' !!}"><a href="{!! route('admin.location.district.getList') !!}">Quận/huyện</a></li>
              <li class="{!! Request::is('admin/location/ward*') ? 'current' : '' !!}"><a href="{!! route('admin.location.ward.getList') !!}">Xã/phường/thị trấn</a></li>
            </ul>
          </li>
          <li><a href="user.html"><i class="fa fa-list-alt"></i>Cài đặt  </a></li>
        </ul>
    </div>

    <!-- Sidebar ends -->

    <!-- Main bar -->
    <div class="mainbar">
      
        <!-- Page heading -->
        <div class="page-head">
        <!-- Page heading -->
          <h2 class="pull-left"><i class="fa fa-file-o"></i> @yield('controller') - @yield('action')</h2>
        </h2>


        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
          <a href="index.html"><i class="fa fa-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">Forms</a>
        </div>

        <div class="clearfix"></div>

        </div>
        <!-- Page heading ends -->


        
        <!-- Matter -->

        <div class="matter">
            <div class="container">

            @yield('content')

            </div>
        </div>

        <!-- Matter ends -->

    </div>

   <!-- Mainbar ends -->            
   <div class="clearfix"></div>

</div>
<!-- Content ends -->

<!-- Footer starts -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
            <!-- Copyright info -->
            <p class="copy">Copyright &copy; 2012 | <a href="#">Your Site</a> </p>
      </div>
    </div>
  </div>
</footer>   

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 

<!-- JS -->
<script src="{{ url('public/macadmin/js/jquery.js') }}"></script> <!-- jQuery -->
<script src="{{ url('public/macadmin/js/bootstrap.min.js') }}"></script> <!-- Bootstrap -->
<script src="{{ url('public/macadmin/js/jquery-ui.min.js') }}"></script> <!-- jQuery UI -->
<script src="{{ url('public/macadmin/js/moment.min.js') }}"></script> <!-- Moment js for full calendar -->
<script src="{{ url('public/macadmin/js/fullcalendar.min.js') }}"></script> <!-- Full Google Calendar - Calendar -->
<script src="{{ url('public/macadmin/js/jquery.rateit.min.js') }}"></script> <!-- RateIt - Star rating -->
<script src="{{ url('public/macadmin/js/jquery.prettyPhoto.js') }}"></script> <!-- prettyPhoto -->
<script src="{{ url('public/macadmin/js/jquery.slimscroll.min.js') }}"></script> <!-- jQuery Slim Scroll -->
<script src="{{ url('public/macadmin/js/jquery.dataTables.min.js') }}"></script> <!-- Data tables -->
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.3/js/bootstrap-select.min.js"></script><!-- Bootstrap Select -->
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.3/js/bootstrap-select.min.js"></script><!-- Bootstrap Select -->
<script src="{{ url('public/macadmin/js/jquery.validate.min.js') }}"></script><!-- Validation -->
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script src="{{ url('public/macadmin/js/localization/messages_vi.min.js') }}"></script><!-- Validation Lang -->

<!-- jQuery Flot -->
<script src="{{ url('public/macadmin/js/excanvas.min.js') }}"></script>
<script src="{{ url('public/macadmin/js/jquery.flot.js') }}"></script>
<script src="{{ url('public/macadmin/js/jquery.flot.resize.js') }}"></script>
<script src="{{ url('public/macadmin/js/jquery.flot.pie.js') }}"></script>
<script src="{{ url('public/macadmin/js/jquery.flot.stack.js') }}"></script>

<!-- jQuery Notification - Noty -->
<script src="{{ url('public/macadmin/js/jquery.noty.js') }}"></script> <!-- jQuery Notify -->
<script src="{{ url('public/macadmin/js/themes/default.js') }}"></script> <!-- jQuery Notify -->
<script src="{{ url('public/macadmin/js/layouts/bottom.js') }}"></script> <!-- jQuery Notify -->
<script src="{{ url('public/macadmin/js/layouts/topRight.js') }}"></script> <!-- jQuery Notify -->
<script src="{{ url('public/macadmin/js/layouts/top.js') }}"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src="{{ url('public/macadmin/js/sparklines.js') }}"></script> <!-- Sparklines -->
<script src="{{ url('public/macadmin/js/jquery.cleditor.min.js') }}"></script> <!-- CLEditor -->
<script src="{{ url('public/macadmin/js/bootstrap-datetimepicker.min.js') }}"></script> <!-- Date picker -->
<script src="{{ url('public/macadmin/js/jquery.onoff.min.js') }}"></script> <!-- Bootstrap Toggle -->
<script src="{{ url('public/macadmin/js/filter.js') }}"></script> <!-- Filter for support page -->
<script src="{{ url('public/macadmin/js/custom.js') }}"></script> <!-- Custom codes -->
<script src="{{ url('public/macadmin/js/charts.js') }}"></script> <!-- Charts & Graphs -->
 

@if (Session::has('flash_message'))        
<script>
    /* jQuery Notification */

    $(document).ready(function(){
      setTimeout(function() {noty({
            text: '{!! Session::get('flash_message') !!}',
            layout:'topRight',
            type:'success',
            timeout:15000
        });
      });
    });


</script>
 @endif
 @stack('scripts')
</body>
</html>