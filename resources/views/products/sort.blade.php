@extends('layouts.admin')
@section('page-header','商品管理系統')

@section('page-content')
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                商品分類
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>分類編號</th>
                            <th>分類名稱</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($prodsorts as $prodsort)
                        <tr>
                            <td>{{ $prodsort->id }}</td>
                            <td>{{ $prodsort->name }}</td>
                            <td><a href="#">刪除</a></td>
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
        <div class="panel panel-default">
            <div class="panel-heading">
                新增商品分類
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        {{Form::open(['url'=>'pruducts/sortadd', 'method'=>'post'])}}
                        {{Form::label('name', '分類名稱')}}<br>
                        {{Form::text('name')}}<br>
                        {{Form::submit('新增')}}
                        {{Form::close()}}
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
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