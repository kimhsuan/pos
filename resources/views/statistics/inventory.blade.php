@extends('layouts.admin')

@section('page-header')
    庫存統計
@endsection

@section('page-content')
<div class="col-lg-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            Pie Chart Example
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="flot-chart">
                <div class="flot-chart-content" id="flot-pie-chart"></div>
            </div>
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
<!-- /.col-lg-6 -->
<div class="col-lg-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            Bar Chart Example
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="flot-chart">
                <div class="flot-chart-content" id="flot-bar-chart"></div>
            </div>
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
<!-- /.col-lg-6 -->
@endsection

@section('footer-scripts')
<!-- jQuery -->
<script src="{{ URL::asset('bower_components/jquery/jquery.min.js') }}"></script>

<!-- Flot Charts JavaScript -->
<script src="{{ URL::asset('bower_components/flot/excanvas.min.js') }}"></script>
<script src="{{ URL::asset('bower_components/flot/jquery.flot.js') }}"></script>
<script src="{{ URL::asset('bower_components/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ URL::asset('bower_components/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ URL::asset('bower_components/flot/jquery.flot.time.js') }}"></script>
<script src="{{ URL::asset('bower_components/flot-tooltip/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ URL::asset('bower_components/data/flot-data.js') }}"></script>

@endsection
