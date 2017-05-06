@extends('layouts.admin')
@section('page-header','顧客管理系統')

@section('page-content')
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                新增顧客類別
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
    {{Form::open(['url'=>'customers/sortadd', 'method'=>'post'])}}
    {{Form::label('name', '類別名稱')}}<br>
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
    <!-- /.col-lg-12 -->
</div>
@endsection
