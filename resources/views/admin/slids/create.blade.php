@extends('admin.layout.index')


@section('main')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title text-center">添加轮播图</h3>
    </div>
    <div class="panel-body row">
	    <form action="/admin/slids" method="post" enctype="multipart/form-data">
	    	{{ csrf_field() }}
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">轮播图&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="file"  name="image"> 
	            <span class="input-group-addon">
	            @if ($errors->has('image'))
           				{{ $errors->first('image') }}
        		@endif
	            </span>
	        </div>
	        <br><br>
	  	    <div class="input-group col-xs-6" >
	            <span class="input-group-addon">跳转地址&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="url" placeholder="跳转地址">
	            <span class="input-group-addon">
	            	 @if ($errors->has('url'))
           				{{ $errors->first('url') }}
        			@endif
	            </span>
	            
	        </div>
	        <br>
	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">名称&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="sort" placeholder="名称">
	            <span class="input-group-addon">
	            	 @if ($errors->has('sort'))
           				{{ $errors->first('sort') }}
        			@endif
	            </span>
	        </div>
	        <br>
	        <div class="form-group input-group">
			    <label>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">状态</span></span>
			    </label>
			    <label class="radio-inline">
			        <input type="radio" name="status" id="optionsRadiosInline1" value="0" checked>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">正在使用</span></span>
			    </label>
			    <label class="radio-inline">
			        <input type="radio" name="status" id="optionsRadiosInline2" value="1">
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">下架</span></span>
			    </label>
			</div>
	        <br>
	         <div class="input-group col-xs-4">	
	            	<input type="submit" class="btn btn-info form-control" value="添加">
	        	</span>
	        </div>
	    </form>  
	</div>
</div>
@endsection