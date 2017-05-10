@extends('layouts.admin')

@section('page-header')
    統計資料
@endsection

@section('header-scripts')
    <!-- Morris Charts CSS -->
    <link href="{{ URL::asset('bower_components/morrisjs/morris.css') }}" rel="stylesheet">
@endsection

@section('page-content')
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                銷售資料
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
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
                <div id="morris-bar-chart"></div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>
<!-- /.row -->
@endsection

@section('footer-scripts')
<!-- jQuery -->
<script src="{{ URL::asset('bower_components/jquery/jquery.min.js') }}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ URL::asset('bower_components/raphael/raphael-min.js') }}"></script>
<script src="{{ URL::asset('bower_components/morrisjs/morris.min.js') }}"></script>

<script>
Morris.Bar({
  element: 'morris-bar-chart',
  data: [
    { y: '1月', a: 100, b: 90 },
    { y: '2月', a: 75,  b: 65 },
    { y: '3月', a: 50,  b: 40 },
    { y: '4月', a: 75,  b: 65 },
    { y: '5月', a: 50,  b: 40 },
    { y: '6月', a: 75,  b: 65 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['銷售', '庫存']
});
</script>

@endsection
