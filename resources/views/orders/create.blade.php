@extends('layouts.admin')
@section('page-header','訂單管理系統')

@section('page-content')
<!-- /.row -->
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                新增訂單
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="post" action="{{ url ('orders/save') }}">
                            <div class="form-group">
                                <label>日期</label>
                                <input type="date" name="orderdate" class="form-control" value="{{ $now }}">
                            </div>
                            <div class="form-group">
                                <label>客戶帳號</label>
                                <select name="custid" class="form-control">
                                    @foreach($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->account }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>商品編號</label>
                                <input name="prodid" value="0" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>運費</label>
                                <input name="fare" value="0" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>總價</label>
                                <input name="price" value="{{$total}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>匯款時間</label>
                                <input type="date" name="paytime" class="form-control" value="{{ $now }}">
                            </div>
                            <div class="form-group">
                                <label>出貨時間</label>
                                <input type="date" name="deliverytime" class="form-control" value="{{ $now }}">
                            </div>
                            <div class="form-group">
                                <label>運送方式</label>
                                <select name="transit" class="form-control">
                                    @foreach($transits as $transit)
                                    <option value="{{ $transit->id }}">{{ $transit->name }}</option>
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
    <!-- /.col-lg-8 -->
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
                                    <th>小計</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{$item->product->name}}</td>
                                    <td>{{$item->product->price}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            <div class="panel-footer">
                <tr>
                    <td>總價：<strong>${{$total}}</strong></td>
                </tr>
            </div>
        </div>
    </div>
    <!-- /.col-lg-4 -->
</div>
@endsection
