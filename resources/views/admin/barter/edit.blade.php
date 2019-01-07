@extends('admin.layout.index')

@section('main')

<div class="panel">
    <div class="panel-body row">
        <form role="form" action="/admin/returns/{{ $data->id }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="input-group col-xs-6" >
                <span class="input-group-addon">订单编号&nbsp;&nbsp;&nbsp;</span>
                <input type="text" class="form-control" disabled name="name" disabled placeholder="订单编号" value="{{ $data->oid }}">
            </div>
            <br>
            <div class="input-group col-xs-6" >
                <span class="input-group-addon">下单时间&nbsp;&nbsp;&nbsp;</span>
                <input type="text" class="form-control" disabled name="name" disabled placeholder="下单时间" value="{{ $data->created_at }}">
            </div>
            <br>
            <div class="input-group col-xs-6" >
                <span class="input-group-addon">退货商品&nbsp;&nbsp;&nbsp;</span>
                <input type="text" class="form-control" disabled name="name" disabled placeholder="退货商品" value="名称">
            </div>
             <br>
            <div class="input-group col-xs-6" >
                <span class="input-group-addon">商品个数&nbsp;&nbsp;&nbsp;</span>
                <input type="text" class="form-control" disabled name="name" disabled placeholder="商品个数" value="{{ $data->cnt }}">
            </div>
           
            <br>
            <div class="input-group col-xs-6" >
                <span class="input-group-addon">总&nbsp;&nbsp;金&nbsp;&nbsp;额&nbsp;&nbsp;&nbsp;</span>
                <input type="text" class="form-control" disabled name="name" placeholder="总金额" value="{{ $data->sum }}">
            </div>
            <br>
            <div class="input-group col-xs-6">
                <span class="input-group-addon">退货方式&nbsp;&nbsp;&nbsp;</span>
                <input type="text" class="form-control" disabled name="phone" placeholder="退货方式" value="{{ $data->type }}">
            </div>
            <br>
            <div class="input-group col-xs-6">
                <span class="input-group-addon">订单状态&nbsp;&nbsp;&nbsp;</span>
                <select class="form-control" name="status">
                    <option value="0" @if($data->status==0) selected @endif>待审中</option>
                    <option value="1" @if($data->status==1) selected @endif>取消申请</option>
                    <option value="2" @if($data->status==2) selected @endif>审核通过</option>
                    <option value="3" @if($data->status==3) selected @endif>审核失败</option>
                    <option value="4" @if($data->status==4) selected @endif>退货完成</option>
                </select>
                <br>
            </div>
            <br>
            <div class="input-group col-xs-6">
                <span class="input-group-addon">退货原因&nbsp;&nbsp;&nbsp;</span>
                <select class="form-control" name="reason">
                    <option value="0" @if($data->reason==0) selected @endif>原因一</option>
                    <option value="1" @if($data->reason==1) selected @endif>原因二</option>
                    <option value="2" @if($data->reason==2) selected @endif>原因三</option>
                    <option value="3" @if($data->reason==3) selected @endif>原因四</option>
                    <option value="4" @if($data->reason==4) selected @endif>原因五</option>
                    <option value="5" @if($data->reason==5) selected @endif>原因六</option>
                </select>
            </div>
            <br>
            <div class="input-group col-xs-6">
                <span class="input-group-addon">审核原因&nbsp;&nbsp;&nbsp;</span>
                <select class="form-control" name="check">
                    <option value="0" @if($data->check==0) selected @endif>原因一</option>
                    <option value="1" @if($data->check==1) selected @endif>原因二</option>
                    <option value="2" @if($data->check==2) selected @endif>原因三</option>
                    <option value="3" @if($data->check==3) selected @endif>原因四</option>
                    <option value="4" @if($data->check==4) selected @endif>原因五</option>
                    <option value="5" @if($data->check==5) selected @endif>原因六</option>
                </select>
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