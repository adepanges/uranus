@extends('layout.default')

@section('title', $title)
@section('load_css')
@parent
        <!-- Menu CSS -->
        <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
@endsection

@section('load_js')
@parent
        <script src="js/waves.js"></script>
@endsection

@section('content')
        <div class="container">
            ini body
        </div>
@endsection
