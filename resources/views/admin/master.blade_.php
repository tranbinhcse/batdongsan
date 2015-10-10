<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- meta section -->
        <title>iFlyCMS - @yield('title')</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" >
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" >
        <!-- ./meta section -->
        
        <!-- css styles -->
        <link rel="stylesheet" type="text/css" href="{{ url('public/admin_v2/css/default-blue-white.css') }}" id="dev-css">
        <link rel="stylesheet" type="text/css" href="{{ url('public/admin_v2/js/plugins/bootstrap-sweetalert/lib/sweet-alert.css') }}" id="dev-css">
        <!-- ./css styles -->                              
        
        <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="{{ url('public/admin_v2/css/dev-other/dev-ie-fix.css') }}">
        <![endif]-->
        
        <!-- javascripts -->
        <script type="text/javascript" src="{{ url('public/admin_v2/js/plugins/modernizr/modernizr.js') }}"></script>
        <!-- ./javascripts -->
        
        <style>
            .dev-page{visibility: hidden;}            
        </style>
    </head>
    <body>
        <!-- set loading layer -->
         
        <!-- ./set loading layer -->       
        
        <!-- page wrapper -->
        <div class="dev-page">
            
            <!-- page header -->    
            <div class="dev-page-header">
                
                <div class="dph-logo">
                    <a href="/admin">Intuitive</a>
                    <a class="dev-page-sidebar-collapse">
                        <div class="dev-page-sidebar-collapse-icon">
                            <span class="line-one"></span>
                            <span class="line-two"></span>
                            <span class="line-three"></span>
                        </div>
                    </a>
                </div>

                <div class="pull-left title-page">
                    <h1>@yield('controller') - @yield('action')</h1>

                    
                </div> 
    
            <ul class="dph-buttons pull-right">                    
                <li class="{{ Request::is('/admin') ? 'active' : '' }}"><a href="#">Dashboard</a></li>
                <li><a href="#">Forms</a></li>
                <li><a href="">Validation & Helpers</a></li>
            </ul>

                                           
                
            </div>
            <!-- ./page header -->
            
            <!-- page container -->
            <div class="dev-page-container">

                <!-- page sidebar -->
                <div class="dev-page-sidebar">                    
                  
                    
                    <ul class="dev-page-navigation">
                        <li class="title">Navigation</li>
                        <li class="{{ Request::is('/') ? 'active' : '' }}">
                            <a href="/admin"><i class="fa fa-desktop"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="title">Bất động sản</li>
                        <li class="{!! Request::is('admin/cate*') ? 'active' : '' !!} {!! Request::is('admin/product*') ? 'active' : '' !!}">
                            <a href="#"><i class="fa fa-cogs"></i> <span>Tin bất động sản</span>  <span class="label label-danger">+1</span></a>
                            <ul>                                
                                <li><a href="/admin/products">Danh sách tin</a></li>
                                <li class="{!! Request::is('admin/cate') ? 'active' : '' !!}"><a href="/admin/cate">Phân loại tin</a></li>
                            </ul>
                        </li>
                        <li class="{!! Request::is('admin/project*') ? 'active' : '' !!}"><a href="#"><i class="fa fa-cogs"></i><span>Dự án</span></a>
                            <ul>
                                <li class="{!! Request::is('admin/project/add') ? 'active' : '' !!}"><a href="/admin/project/add">Thêm dự án</a></li>
                                <li class="{!! Request::is('admin/project') ? 'active' : '' !!}"><a href="/admin/project">Danh sách dự án</a></li>
                                <li class="{!! Request::is('admin/project/cate') ? 'active' : '' !!}"><a href="/admin/project_cate">Danh mục dự án</a></li>
                            </ul>
                        </li>

                        <li class="title">Tin tức</li>
                        <li><a href="/admin/news/add"><i class="fa fa-cogs"></i><span>Thêm tin mới</span></a></li>
                        <li><a href="/admin/news"><i class="fa fa-cogs"></i><span>Danh sách tin</span></a></li>
                        <li><a href="/admin/news/cate"><i class="fa fa-cogs"></i><span>Danh mục tin</span></a></li>
                        <li class="title">Hệ thống</li>
                        <li class="{!! Request::is('admin/user*') ? 'active' : '' !!} "><a href="#"><i class="fa fa-cogs"></i><span>Thành viên</span></a>
                            <ul>
                                <li class="{!! Request::is('admin/user') ? 'active' : '' !!} {!! Request::is('admin/user/list') ? 'active' : '' !!}"><a href="/admin/user">Danh sách Thành viên</a></li>
                                <li class="{!! Request::is('admin/user/add') ? 'active' : '' !!}"><a href="/admin/user/add">Thêm Thành viên</a></li>
                            </ul>
                        </li>
                        <li class="{!! Request::is('admin/location*') ? 'active' : '' !!} "><a href="#"><i class="fa fa-cogs"></i><span>Location</span></a>
                        <ul>
                            <li class="{!! Request::is('admin/location/province*') ? 'active' : '' !!} "><a href="/admin/location/province"><span>Tỉnh/thành</span></a>
                                <ul>
                                    <li class="{!! Request::is('admin/location/province') ? 'active' : '' !!} "><a href="/admin/location/province">Danh sách tỉnh/thành</a></li>
                                    <li class="{!! Request::is('admin/location/province/add') ? 'active' : '' !!} "><a href="/admin/location/province/add">Thêm tỉnh/thành</a></li>
                                </ul>
                            </li>
                            <li class="{!! Request::is('admin/location/district*') ? 'active' : '' !!} "><a href="#"><span>Quận/Huyện</span></a>
                                <ul>
                                    <li class="{!! Request::is('admin/location/district') ? 'active' : '' !!} "><a href="/admin/location/district">Danh sách quận/huyện</a></li>
                                    <li class="{!! Request::is('admin/location/district/add') ? 'active' : '' !!} "><a href="/admin/location/district/add">Thêm quận/huyện</a></li>
                                </ul>
                            </li>
                            <li class="{!! Request::is('admin/location/ward*') ? 'active' : '' !!} "><a href="#"><span>Xã/Phường</span></a>
                                <ul>
                                    <li class="{!! Request::is('admin/location/ward') ? 'active' : '' !!} "><a href="/admin/location/ward">Danh sách xã/phường</a></li>
                                    <li class="{!! Request::is('admin/location/ward/add') ? 'active' : '' !!} "><a href="/admin/location/ward/add">Thêm xã/phường</a></li>
                                </ul>
                            </li>
                        </ul>
                        <li><a href="/admin/setting"><i class="fa fa-cogs"></i><span>Cài đặt</span></a></li>
                            
                        
                    </ul>
                    
                </div>
                <!-- ./page sidebar -->
                
                <!-- page content -->
                <div class="dev-page-content">                    
                    <!-- page content container -->
                    <div class="container">
                     
                         
                        <div class="col-lg-12">
                            @if (Session::has('flash_message'))
                                <div class="alert alert-{!! Session::get('flash_level') !!}">
                                    {!! Session::get('flash_message') !!}
                                </div>
                            @endif
                        </div>

                        <!-- Content Page -->
                           @yield('content')                      
                        <!-- ./Content Page -->
              
                         
                        <!-- Copyright -->
                        <div class="copyright">
                            <div class="pull-left">
                                &copy; 2015 <strong>BT-Media CMS V1</strong>. All rights reserved.
                            </div>
                            <div class="pull-right">
                                <a href="#">Terms of use</a> / <a href="#">Privacy Policy</a>
                            </div>
                        </div>
                        <!-- ./Copyright -->
                        
                    </div>
                    <!-- ./page content container -->  
                                        
                </div>
                <!-- ./page content -->                                               
            </div>  
            <!-- ./page container -->
             
                     
        </div>
        <!-- ./page wrapper -->

        <!-- javascript -->
        <script type="text/javascript" src="{{ url('public/admin_v2/js/plugins/jquery/jquery.min.js') }}"></script>       
        <script type="text/javascript" src="{{ url('public/admin_v2/js/plugins/bootstrap/bootstrap.min.js') }}"></script>
        
        <script type="text/javascript" src="{{ url('public/admin_v2/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>        
        <script type="text/javascript" src="{{ url('public/admin_v2/js/plugins/moment/moment.js') }}"></script>
        
        <script type="text/javascript" src="{{ url('public/admin_v2/js/plugins/knob/jquery.knob.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('public/admin_v2/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

        <script type="text/javascript" src="{{ url('public/admin_v2/js/plugins/summernote/summernote.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('public/admin_v2/js/plugins/tags-input/jquery.tagsinput.min.js') }}"></script> 
        <script type="text/javascript" src="{{ url('public/admin_v2/js/plugins/bootstrap-select/bootstrap-select.js') }}"></script>
        <script type="text/javascript" src="{{ url('public/admin_v2/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.js') }}"></script>    
        
        <script type="text/javascript" src="{{ url('public/admin_v2/js/plugins/dropzone/dropzone.min.js') }}"></script> 

        <script type="text/javascript" src="{{ url('public/admin_v2/js/plugins/maskedinput/maskedinput.min.js') }}"></script> 
        <script type="text/javascript" src="{{ url('public/admin_v2/js/plugins/jquery-validate/jquery.validate.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('public/admin_v2/js/plugins/jquery-validate/localization/messages_vi.js') }}"></script>
        
        <script type="text/javascript" src="{{ url('public/admin_v2/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('public/admin_v2/js/plugins/sortable/sortable.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('public/admin_v2/js/plugins/bootstrap-sweetalert/lib/sweet-alert.min.js') }}"></script>
      
        <script type="text/javascript" src="{{ url('public/admin_v2/js/dev-loaders.js') }}"></script>
        <script type="text/javascript" src="{{ url('public/admin_v2/js/dev-layout-default.js') }}"></script>
        <script type="text/javascript" src="{{ url('public/admin_v2/js/demo.js') }}"></script>
        <script type="text/javascript" src="{{ url('public/admin_v2/js/dev-app.js') }}"></script>
        <script type="text/javascript" src="{{ url('public/admin_v2/js/script.js') }}"></script>
        
        @stack('scripts')
        <!-- ./javascript -->
    </body>
</html>