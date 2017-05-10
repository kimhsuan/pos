@extends('layouts.admin')
@section('page-header','訂單管理系統')

@section('page-content')
<!-- /.row -->
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                新增訂單 -> 加入商品
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>序號</th>
                            <th>名稱</th>
                            <th>售價</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td><a href="/orders/addItem/{{$product->id}}"><button type="button" class="btn btn-outline btn-success  btn-xs">加入</button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-8 -->
    <div class="col-lg-4">
    <a href="{{ url ('orders/create') }}">
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9">
                        <div class="huge">產生訂單</div>
                    </div>
                    <div class="col-xs-3" text-right>
                        <i class="fa fa-play fa-5x"></i>
                    </div>
                </div>
            </div>
                <div class="panel-footer">
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
        </div>
    </a>
    </div>
    <!-- /.col-lg-4 -->
    <div class="col-lg-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                Info Panel
            </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>商品</th>
                                    <th>價格</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{$item->product->name}}</td>
                                    <td>{{$item->product->price}}</td>
                                    <td><a href="/orders/removeItem/{{$item->id}}"><button type="button" class="btn btn-danger btn-xs">移除</button></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            <div class="panel-footer text-right">
                <tr>
                    <td><h4>總計：<strong>${{$total}}</strong></h4></td>
                </tr>
            </div>
        </div>
    </div>
    <!-- /.col-lg-4 -->
</div>
@endsection

@section('footer-scripts')
<!-- jQuery -->
<script src="{{ URL::asset('bower_components/jquery/jquery.min.js') }}"></script>

<!-- DataTables JavaScript -->
<script src="{{ URL::asset('bower_components/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('bower_components/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('bower_components/datatables-responsive/dataTables.responsive.js') }}"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
     $('#dataTables-example').DataTable({
        responsive: true
    });
});
</script>

@endsection