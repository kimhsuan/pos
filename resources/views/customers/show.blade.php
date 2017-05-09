@extends('layouts.admin')
@section('page-header','顧客管理系統')

@section('page-content')
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                編輯顧客{{ Form::open(['url'=>'customers/delete/'.$customers->id, 'method'=>'delete']) }}<button type="submit">刪除</button>{{ Form::close() }}
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <form method="post" action="{{ url ('customers/update/'.$customers->id) }}">
                            <div class="form-group">
                                <label>顧客編號</label>
                                <input name="id" class="form-control" value="{{ $customers->id }}" disabled>
                            </div>
                            <div class="form-group">
                                <label>分類</label>
                                <select name="catno" class="form-control">
                                    @foreach($custsorts as $custsort)
                                    @if($custsort->id === $customers->catno)
                                    <option value="{{ $custsort->id }}" selected="selected">{{ $custsort->name }}</option>
                                    @else
                                    <option value="{{ $custsort->id }}">{{ $custsort->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>帳號</label>
                                <input name="account" class="form-control" value="{{ $customers->account }}">
                            </div>
                            <div class="form-group">
                                <label>姓名</label>
                                <input name="name" class="form-control" value="{{ $customers->name }}">
                            </div>
                            <div class="form-group">
                                <label>電話</label>
                                <input name="tel" class="form-control" value="{{ $customers->tel }}">
                            </div>
                            <div class="form-group">
                                <label>手機</label>
                                <input name="mobile" class="form-control" value="{{ $customers->mobile }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" class="form-control" value="{{ $customers->email }}">
                            </div>
                            <div class="form-group">
                                <label>地址</label>
                                <input name="address" class="form-control" value="{{ $customers->address }}">
                            </div>
                            <div class="form-group">
                                <label>備註</label>
                                <textarea name="note" class="form-control" rows="3">{{ $customers->name }}"</textarea>
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
