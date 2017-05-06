@extends('layouts.admin')
@section('page-header','商品管理系統')

@section('page-content')
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                新增商品
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="post" action="{{ url ('products/save') }}" role="form">
                            <div class="form-group">
                                <label>分類</label>
                                <select name="catno" class="form-control">
                                    @foreach($prodsorts as $prodsort)
                                    <option value="{{ $prodsort->id }}">{{ $prodsort->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>商品名稱</label>
                                <input name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>售價</label>
                                <input name="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>成本</label>
                                <input name="cost" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>庫存</label>
                                <input name="stock" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>安全存量</label>
                                <input name="save" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>單位</label>
                                <select name="unit" class="form-control">
                                    @foreach($units as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>備註</label>
                                <textarea name="note" class="form-control" rows="3"></textarea>
                            </div>
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
