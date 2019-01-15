@extends('admin.layout.index')

@section('main')

<div class="panel">
    <div class="panel-heading">
        <h2 class="panel-title text-center">
        @if (count(session('error')) > 0)
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></button><font style="vertical-align: inherit;"><font style="vertical-align: inherit; font-size: 20px">
            {{ session('error') }}</font></font><a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            </font></font>
        </div>
        @endif

        </h2>
    </div>
    <div class="panel-body row">
        <form role="form" action="/admin/sales/{{ $sale->id }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            
            <div class="input-group col-xs-5" >
                <span class="input-group-addon">商品名&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <input type="text" class="form-control" name="name" placeholder="" value="{{ $sale->goods->name }}" readonly>
                <span class="input-group-addon">
                    
                </span>
            </div>
            <br><br>

            <div class="input-group col-xs-5">
                <span class="input-group-addon">价格&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <input type="text" class="form-control" name="price" placeholder="" value="{{ $sale->goods->price }}" readonly>
                <span class="input-group-addon">
                    
                </span>
            </div>
            <br><br>

            <div class="input-group col-xs-5">
                <span class="input-group-addon">折扣&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <input type="number" class="form-control" name="discount" placeholder="" value="{{ $sale->discount }}" max="9.9" min="1" step="0.1">
                <span class="input-group-addon">
                    @if ($errors->has('discount'))
                        {{ $errors->first('discount') }}
                    @endif
                </span>
            </div>
            <br><br>

            <div class="input-group col-xs-5">
                <span class="input-group-addon">活动标题</span>
                <input type="text" class="form-control" name="title" placeholder="" value="{{ $sale->title }}">
                <span class="input-group-addon">
                    @if ($errors->has('title'))
                        {{ $errors->first('title') }}
                    @endif
                </span>
            </div>
            <br><br>

             <div class="input-group col-xs-6"> 
                    <input type="submit" class="btn btn-info form-control" value="修改">
                </span>
            </div>
        </form>  
    </div>
</div>

@endsection