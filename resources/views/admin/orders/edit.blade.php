@extends('admin.layout.index')

@section('main')

<div class="panel">
    <div class="panel-body row">
        <form role="form" action="/admin/orders/{{ $data->id }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="input-group col-xs-6" >
                <span class="input-group-addon">订单编号&nbsp;&nbsp;&nbsp;</span>
                <input type="text" class="form-control" name="name" disabled placeholder="订单编号" value="{{ $data->oid }}">
            </div>
            <br>
            <div class="input-group col-xs-6" >
                <span class="input-group-addon">下单时间&nbsp;&nbsp;&nbsp;</span>
                <input type="text" class="form-control" name="name" disabled placeholder="下单时间" value="{{ $data->created_at }}">
            </div>
            <br>
            <div class="input-group col-xs-6" >
                <span class="input-group-addon">订单总价&nbsp;&nbsp;&nbsp;</span>
                <input type="text" class="form-control" name="name" disabled placeholder="订单总价" value="{{ $data->sum }}">
            </div>
            <br>
            <div class="input-group col-xs-6" >
                <span class="input-group-addon">收&nbsp;&nbsp;货&nbsp;&nbsp;人&nbsp;&nbsp;&nbsp;</span>
                <input type="text" class="form-control" name="name" placeholder="收货人" value="{{ $data->ordersUserAddr->name }}">
            </div>
            <br>
            <div class="input-group col-xs-6">
                <span class="input-group-addon">收货人电话</span>
                <input type="text" class="form-control" name="phone" placeholder="收货人电话" value="{{ $data->ordersUserAddr->phone }}">
            </div>
            <br>
            <div class="input-group col-xs-6">
                <span class="input-group-addon">收货人地址</span>
                <input type="text" class="form-control" name="addr" placeholder="收货人地址" value="{{ $data->ordersUserAddr->addr }}">
            </div>
            <br>
            <div class="input-group col-xs-6">
                <span class="input-group-addon"> 订单状态&nbsp;&nbsp;&nbsp;</span>
                <input type="text" class="form-control" name="addr" disabled placeholder="订单状态" value="{{ $data->status }}">
            </div>
            <br>
             <div class="input-group col-xs-4"> 
                    <input type="submit" class="btn btn-info form-control" value="修改">
                </span>
            </div>
        </form>  
    </div>
</div>
@endsection