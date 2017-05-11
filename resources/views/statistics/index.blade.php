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
    <div class="col-lg-4">
        <div class="panel panel-warning">
            <div class="panel-heading">
                每月銷售額
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>月份</th>
                                <th>銷售額</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2月</td>
                                <td>81,000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>3月</td>
                                <td>87,000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>4月</td>
                                <td>78,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
            <div class="panel-body">
                <div id="monthsale"></div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-4 -->
    <div class="col-lg-4">
        <div class="panel panel-danger">
            <div class="panel-heading">
                依商品類別銷售額
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>分類</th>
                                <th>銷售額</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>未分類</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>手機</td>
                                <td>187,000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>平板電腦</td>
                                <td>87,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
            <div class="panel-body">
                <div id="prodsortsale"></div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-4 -->
    <div class="col-lg-4">
        <div class="panel panel-success">
            <div class="panel-heading">
                依顧客類別銷售額
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>顧客類別</th>
                                <th>銷售額</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>未分類</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>露天拍賣</td>
                                <td>82,000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>奇摩拍賣</td>
                                <td>87,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
            <div class="panel-body">
                <div id="custsortsale"></div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-4 -->
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
  element: 'monthsale',
  data: [
    { y: '2月', a: 81000 },
    { y: '3月', a: 87000 },
    { y: '4月', a: 78000 }
  ],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['銷售']
});
Morris.Bar({
  element: 'prodsortsale',
  data: [
    { y: '未分類', a: 0 },
    { y: '手機', a: 187000 },
    { y: '平板電腦', a: 87000 },
  ],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['銷售']
});
Morris.Bar({
  element: 'custsortsale',
  data: [
    { y: '未分類', a: 0 },
    { y: '露天拍賣', a: 82000 },
    { y: '奇摩拍賣', a: 87000 },
  ],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['銷售']
});
</script>

@endsection
