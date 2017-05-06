@extends('layouts.admin')
@section('page-header','顧客管理系統')

@section('page-content')
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                新增顧客
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="post" action="{{ url ('customers/save') }}">
                            <div class="form-group">
                                <label>分類</label>
                                <select name="catno" class="form-control">
                                    @foreach($custsorts as $custsort)
                                    <option value="{{ $custsort->id }}">{{ $custsort->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>帳號</label>
                                <input name="account" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>姓名</label>
                                <input name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>電話</label>
                                <input name="tel" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>手機</label>
                                <input name="mobile" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>地址</label>
                                <input name="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>備註</label>
                                <textarea name="note" class="form-control" rows="3"></textarea>
                            </div>
                            {!! csrf_field() !!}
                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>
                        </form>
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
