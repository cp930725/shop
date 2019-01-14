@extends('admin.layout.index')

@section('main')
<div class="panel">
    <div class="panel-body row">
        <form role="form" id="form" action="/admin/checks/{{ $data->id }}" method="post">     
               {{ csrf_field() }} 
               {{ method_field('PUT') }} 
            <div class="input-group col-xs-6" >
                <span class="input-group-addon">订单编号&nbsp;&nbsp;&nbsp;</span>
                <input type="text" class="form-control" readonly name="oid" placeholder="订单编号" value="{{ $data->oid }}">
            </div>
            <br>
            <div class="input-group col-xs-6" >
                <span class="input-group-addon">下单时间&nbsp;&nbsp;&nbsp;</span>
                <input type="text" class="form-control" readonly name="order_create" placeholder="下单时间" value="{{ $data->orderInfo->created_at }}">
            </div>
            <br>
            <div class="input-group col-xs-6" >
                <span class="input-group-addon">退货商品&nbsp;&nbsp;&nbsp;</span>
                <input type="text" class="form-control" readonly name="name" placeholder="退货商品" value="{{ $data->orderInfo->name }}">
            </div>
             <br>
            <div class="input-group col-xs-6" >
                <span class="input-group-addon">商品个数&nbsp;&nbsp;&nbsp;</span>
                <input type="text" class="form-control" readonly name="cnt" placeholder="商品个数" value="{{ $data->cnt }}">
            </div>
           
            <br>
            <div class="input-group col-xs-6" >
                <span class="input-group-addon">总&nbsp;&nbsp;金&nbsp;&nbsp;额&nbsp;&nbsp;&nbsp;</span>
                <input type="text" class="form-control" readonly name="sum" placeholder="总金额" value="{{ $data->sum }}">
            </div>
            <br>
            <div class="input-group col-xs-6">
                <span class="input-group-addon">退货方式&nbsp;&nbsp;&nbsp;</span>
                <select class="form-control" name="type">
                    <option value="0" @if($data->type==0) selected @endif>仅退款</option>
                    <option value="1" @if($data->type==1) selected @endif>退货</option>
                    <option value="2" @if($data->type==2) selected @endif>换货</option>s
                </select>
                <br>
            </div>
            <br>
            <div class="input-group col-xs-6">
                <span class="input-group-addon">订单状态&nbsp;&nbsp;&nbsp;</span>
                <select class="form-control" name="status" id="status">
                    <option value="0" @if($data->status==0) selected @endif>待审中</option>
                    <option value="1" @if($data->status==1) selected @endif>审核通过</option>
                    <option value="2" @if($data->status==2) selected @endif>审核未通过</option>

                </select>
                <br>
            </div>
            <br>
            <div class="input-group col-xs-6">
                <span class="input-group-addon">审核未通过原因</span>
                <select class="form-control" name="check">
                    <option value="0" @if($data->check==0) selected @endif>原因一</option>
                    <option value="1" @if($data->check==1) selected @endif>原因二</option>
                    <option value="2" @if($data->check==2) selected @endif>原因三</option>
                    <option value="3" @if($data->check==3) selected @endif>原因四</option>
                    <option value="4" @if($data->check==4) selected @endif>原因五</option>
                    <option value="5" @if($data->check==5) selected @endif>原因六</option>
                </select>
            </div>
                <input type="hidden" name="order_info_id" value="{{ $data->order_info_id }}">
                <input type="hidden" name="reason" value="{{ $data->reason }}">
                <br>
             <div class="input-group col-xs-4"> 
                    <input type="submit" class="btn btn-info form-control" onclick="confirm('确认核定吗,已经核定无法返回')" value="确定审核">
                </span>
            </div>
        </form>

    </div>
</div>
@endsection