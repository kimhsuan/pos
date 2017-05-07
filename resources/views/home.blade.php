@extends('layouts.admin')

@section('page-header')
    首頁
@endsection

@section('page-content')
<!-- /.row -->
<div class="col-sm-12">
<div class="row">
    <!-- /.col-lg-4 -->
    <div class="col-lg-4 col-md-8">
    <a href="{{ url ('orders') }}">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                   <div class="col-xs-9 text-right">
                        <div class="huge">訂單管理</div>
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
    <div class="col-lg-4 col-md-8">
    <a href="{{ url ('products') }}">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-diamond fa-5x"></i>
                    </div>
               <div class="col-xs-9 text-right">
                        <div class="huge">商品管理</div>
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
</div>
<div class="row">
    <!-- /.col-lg-4 -->
    <div class="col-lg-4 col-md-8">
    <a href="{{ url ('customers') }}">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                   <div class="col-xs-9 text-right">
                        <div class="huge">顧客管理</div>
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
    <div class="col-lg-4 col-md-8">
    <a href="{{ url ('statistics') }}">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-signal fa-5x"></i>
                    </div>
                   <div class="col-xs-9 text-right">
                        <div class="huge">統計資料</div>
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
</div>
@endsection