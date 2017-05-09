<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CRUD Laravel">
    <meta name="author" content="Hector Dolo">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>網拍助手</title>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ URL::asset('bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">
    
    <!-- DataTables CSS -->
    <link href="{{ URL::asset('bower_components/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">
    
    <!-- DataTables Responsive CSS -->
    <link href="{{ URL::asset('bower_components/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">

    <!-- jQuery -->
    <script src="{{ URL::asset('bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Custom CSS -->
    <link href="{{ URL::asset('dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ URL::asset('bower_components/jquery/src/css/jquery-ui.min.css') }}">

    <script src="{{ URL::asset('js/jquery.js') }}"></script>
    <script src="{{ URL::asset('bower_components/jquery/src/jquery-ui.min.js') }}"></script>

    @yield('header-scripts')

</head>

<body id="wrapper">

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
    </div>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">

                        <div class="input-group">
                            {!! Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search...']) !!}
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>

                    </div>
                </li>
                <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                    <a href="{{ url ('') }}"> 首頁</a>
                </li>
                <li>
                    <a href="#"></i> 訂單管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url ('orders') }}">訂單列表</a>
                        </li>
                        <li>
                            <a href="{{ url ('orders/new') }}">新增訂單</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"></i> 商品管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li {{ (Request::is('*products') ? 'class="active"' : '') }}>
                            <a href="{{ url ('products') }}">商品列表</a>
                        </li>
                        <li {{ (Request::is('*products/create') ? 'class="active"' : '') }}>
                            <a href="{{ url ('products/create') }}">新增商品</a>
                        </li>
                        <li {{ (Request::is('*products/sort') ? 'class="active"' : '') }}>
                            <a href="{{ url ('products/sort') }}">商品分類</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"></i> 顧客管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li {{ (Request::is('*customers') ? 'class="active"' : '') }}>
                            <a href="{{ url ('customers') }}">顧客列表</a>
                        </li>
                        <li {{ (Request::is('*customers/create') ? 'class="active"' : '') }}>
                            <a href="{{ url ('customers/create') }}">新增顧客</a>
                        </li>
                        <li {{ (Request::is('*customers/sort') ? 'class="active"' : '') }}>
                            <a href="{{ url ('customers/sort') }}">顧客分類</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"></i> 統計資料<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li {{ (Request::is('*statistics/inventory') ? 'class="active"' : '') }}>
                            <a href="{{ url ('statistics/inventory') }}">庫存統計</a>
                        </li>
                        <li>
                            <a href="{{ url ('statistics') }}">銷售統計</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"> 登出
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">@yield('page-header')</h3>
        </div>
    </div>

    @yield('page-content')

</div>
<!-- /#page-wrapper -->


<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ URL::asset('bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ URL::asset('dist/js/sb-admin-2.js') }}"></script>

@yield('footer-scripts')

</body>
</html>
