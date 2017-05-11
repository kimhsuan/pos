@extends('layouts.admin')

@section('page-header')
    首頁
@endsection

@section('page-content')
<div class="row">
    <div class="col-lg-8">
        <div class="col-lg-6 col-md-12">
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
        <div class="col-lg-6 col-md-12">
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
        <div class="col-lg-6 col-md-12">
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
        <div class="col-lg-6 col-md-12">
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
    <!-- /.col-lg-8 -->
    <div class="col-lg-4">
        <div class="chat-panel panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-comments fa-fw"></i> Chat
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu slidedown">
                        <li>
                            <a href="#">
                                <i class="fa fa-refresh fa-fw"></i> Refresh
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-check-circle fa-fw"></i> Available
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-times fa-fw"></i> Busy
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-clock-o fa-fw"></i> Away
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <i class="fa fa-sign-out fa-fw"></i> Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <ul class="chat">
                    @foreach ($messages as $message)
                    <li class="left clearfix">
                        <span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                        </span>
                        <div class="chat-body clearfix">
                            <div class="header">
                                <form action="{{ url('message/'.$message->id) }}" method="POST">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                    <strong class="primary-font">Message</strong>
                                    @if (Auth::user()->id==$message->user_id)
                                    <button type="submit" id="delete-message-{{ $message->id }}" class="btn btn-outline btn-danger btn-xs">
                                        Delete
                                    </button>
                                    @endif
                                </form>
                            </div>
                            <p>
                                {{ $message->name }}
                            </p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- /.panel-body -->
            <div class="panel-footer">
                <form action="{{ url('message') }}" method="POST" class="form-horizontal">
                    <div class="input-group">
                        {{ csrf_field() }}
                        <input id="btn-input" name="name" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-warning btn-sm" id="btn-chat">Send</button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- /.panel-footer -->
        </div>
        <!-- /.panel .chat-panel -->
    </div>
    <!-- /.col-lg-4 -->
</div>
<!-- /.row -->
@endsection