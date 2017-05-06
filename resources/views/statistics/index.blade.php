@extends('layouts.admin')

@section('page-header')
    統計資料
@endsection

@section('page-content')
<!-- /.row -->
<div class="col-sm-12">
<div class="row">
    <a href="{{ url ('statistics/inventory') }}">
    <div class="col-lg-4 col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-diamond fa-5x"></i>
                    </div>
                   <div class="col-xs-9 text-right">
                        <div class="huge">庫存統計</div>
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
    <a href="{{ url ('statistics/') }}">
    <div class="col-lg-4 col-md-8">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-signal fa-5x"></i>
                    </div>
               <div class="col-xs-9 text-right">
                        <div class="huge">銷售統計</div>
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
