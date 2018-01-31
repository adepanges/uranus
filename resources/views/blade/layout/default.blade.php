<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="adepanges">
        <meta name="description" content="">

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>@yield('title')</title>

@section('load_css')
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

@yield('content')


@section('load_js')
        <script src="{{ base_url('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{ base_url('bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="{{ base_url('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
        <!--slimscroll JavaScript -->
        <script src="{{ base_url('js/jquery.slimscroll.js') }}"></script>
@show

@if(ENVIRONMENT == 'development')
        <script type="text/javascript">
            console.log('CodeIgniter Version <?php echo CI_VERSION ?>')
            console.log('This page took {{ (microtime(true) - URANUS_LAUNCH) }} seconds to render')
        </script>
@endif
    </body>
</html>
