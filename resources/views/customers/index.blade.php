@extends('layouts.admin')
@section('page-header','顧客管理系統')

@section('page-content')
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                顧客列表
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>序號</th>
                            <th>帳號</th>
                            <th>姓名</th>
                            <th>手機</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->account }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->mobile }}</td>
                            <td><a href="{{ url ('customers') }}/{{ $customer->id }}">詳細資料</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
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