@extends('layouts.admin')

@section('page-header')
    首頁
@endsection

@section('page-content')
<!-- /.row -->
<div class="col-sm-12">
<div class="row">
    <a href="{{ url ('orders') }}">
    <div class="col-lg-4 col-md-8">
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
    </div>
    </a>
    <a href="{{ url ('products') }}">
    <div class="col-lg-4 col-md-8">
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
    </div>
    </a>
</div>
<div class="row">
    <a href="{{ url ('customers') }}">
    <div class="col-lg-4 col-md-8">
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
    </div>
    </a>
    <a href="{{ url ('statistics') }}">
    <div class="col-lg-4 col-md-8">
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
    </div>
    </a>
</div>
@endsection