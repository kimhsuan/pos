@extends('layouts.admin')
@section('page-header','訂單管理系統')

@section('page-content')
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                新增訂單
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="post" action="{{ url ('customers/save') }}">
                            <div class="form-group">
                                <label>客戶帳號</label>
                                <select name="cuno" class="form-control">
                                    @foreach($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->account }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>運費</label>
                                <input name="fare" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>總價</label>
                                <input name="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>匯款時間</label>
                                <input name="paytime" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>出貨時間</label>
                                <input name="deliverytime" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>運送方式</label>
                                <input name="transit" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>選擇商品</label>
                                <select multiple class="form-control">
                                    @foreach($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
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
