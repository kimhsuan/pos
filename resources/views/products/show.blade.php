@extends('layouts.admin')
@section('page-header','商品管理系統')

@section('page-content')
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                編輯商品{{ Form::open(['url'=>'products/delete/'.$products->id, 'method'=>'delete']) }}<button type="submit">刪除</button>{{ Form::close() }}
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6  col-md-12">
                        <form method="post" action="{{ url ('products/update/'.$products->id) }}" role="form">
                            <div class="form-group">
                                <label>商品編號</label>
                                <input name="id" class="form-control" value="{{ $products->id }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>分類</label>
                                <select name="catno" class="form-control">
                                    @foreach($prodsorts as $prodsort)
                                    @if ($prodsort->id === $products->catno)
                                    <option value="{{ $prodsort->id }}" selected="selected">{{ $prodsort->name }}</option>
                                    @else
                                    <option value="{{ $prodsort->id }}">{{ $prodsort->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>商品名稱</label>
                                <input name="name" class="form-control" value="{{ $products->name }}">
                            </div>
                            <div class="form-group">
                                <label>售價</label>
                                <input name="price" class="form-control" value="{{ $products->price }}">
                            </div>
                            <div class="form-group">
                                <label>庫存</label>
                                <input name="stock" class="form-control" value="{{ $products->stock }}">
                            </div>
                            <div class="form-group">
                                <label>安全存量</label>
                                <input name="save" class="form-control" value="{{ $products->save }}">
                            </div>
                            <div class="form-group">
                                <label>銷售數量</label>
                                <input name="sold" class="form-control" value="{{ $products->sold }}">
                            </div>
                            <div class="form-group">
                                <label>單位</label>
                                <select name="unit" class="form-control">
                                    @foreach($units as $unit)
                                    @if($unit->id === $products->unit)
                                    <option value="{{ $unit->id }}" selected="selected">{{ $unit->name }}</option>
                                    @else
                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>備註</label>
                                <textarea name="note" class="form-control" rows="3">{{ $products->note }}</textarea>
                            </div>
                            {!! csrf_field() !!}
                            <button type="submit" class="btn btn-default">Submit Button</button>
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
