<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="adepanges">
        <meta name="description" content="">

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ base_url('image/logo/dermeva_logo_205x41.png') }}">
        <title>@yield('title')</title>

@section('load_css')
        <link href="{{ base_url('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- This is Sidebar menu CSS -->
        <link href="{{ base_url('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
        <!-- animation CSS -->
        <link href="{{ base_url('css/animate.css') }}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ base_url('css/style.css') }}" rel="stylesheet">
        <!-- color CSS -->
        <link href="{{ base_url('css/colors/default.css') }}" id="theme" rel="stylesheet">
@show

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="fix-header">
        <!-- Preloader -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
            </svg>
        </div>

@include('main-inc/default/top_navigation')
@include('main-inc/default/sidebar')


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
@yield('content')
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> {{ date('Y') }} &copy; Uranus </footer>
        </div>
        <!-- /#page-wrapper -->

@section('load_js')
        <script src="{{ base_url('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ base_url('bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="{{ base_url('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
        <!--slimscroll JavaScript -->
        <script src="{{ base_url('js/jquery.slimscroll.js') }}"></script>

        <script src="{{ base_url('js/waves.js') }}"></script>
        <!-- Custom Theme JavaScript -->
        <script src="{{ base_url('js/custom.js') }}"></script>
@show

@if(ENVIRONMENT == 'development')
        <script type="text/javascript">
            console.log('CodeIgniter Version <?php echo CI_VERSION ?>')
            console.log('This page took {{ (microtime(true) - URANUS_LAUNCH) }} seconds to render')
        </script>
@endif
    </body>
</html>
