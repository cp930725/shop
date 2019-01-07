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
	    <form role="form" action="/admin/goodsinfo/{{ $goodsinfo->id }}" method="post" enctype="multipart/form-data">
	    	{{ csrf_field() }}
    		{{ method_field('PUT') }}
    		<div class="input-group col-xs-5" >
	            <span class="input-group-addon">商品编号</span>
	            <input type="text" class="form-control" name="num" placeholder="" value="{{ $goodsinfo->num }}" readonly>
	            <span class="input-group-addon">
	            	@if ($errors->has('num'))
           				{{ $errors->first('num') }}
        			@endif
	            </span>
	        </div>
	        <br><br>

	  	    <div class="input-group col-xs-5" >
	            <span class="input-group-addon">版本名&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="version" placeholder="" value="{{ $goodsinfo->version }}">
	            <span class="input-group-addon">
	            	@if ($errors->has('version'))
           				{{ $errors->first('version') }}
        			@endif
	            </span>
	        </div>
	        <br><br>

	        
	        
	      

	        <div class="input-group col-xs-5">
	            <span class="input-group-addon">价格&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="price" placeholder="" value="{{ $goodsinfo->price }}">
	            <span class="input-group-addon">
	            	@if ($errors->has('price'))
           				{{ $errors->first('price') }}
        			@endif
	            </span>
	        </div>
	        <br><br>

	        <div class="input-group col-xs-5">
	            <span class="input-group-addon">商品数量</span>
	            <input type="text" class="form-control" name="stock" placeholder="" value="{{ $goodsinfo->stock }}">
	            <span class="input-group-addon">
	            	@if ($errors->has('stock'))
           				{{ $errors->first('stock') }}
        			@endif
	            </span>
	        </div>
	        <br><br>
	         
	        <span style="margin-left: 346px">商品描述</span>&nbsp;:
	        <div class="input-group col-xs-5">
	        	<textarea class="form-control" name="content" placeholder="@if($errors->has('content')) {{ $errors->first('content') }} @else {{'请输入' }} @endif
	        	" rows="4">{{ $goodsinfo->content }}</textarea>
	        </div>
	        <br><br>

	        
	         <div class="input-group col-xs-6">	
	            	<input type="submit" class="btn btn-info form-control" value="提交">
	        	</span>
	        </div>
	    </form>  
	</div>
</div>


@endsection