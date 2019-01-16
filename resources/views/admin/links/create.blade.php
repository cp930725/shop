@extends('admin.layout.index')


@section('main')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title text-center">添加友情链接</h3>
    </div>
    <div class="panel-body row">
	    <form action="/admin/links" method="post" enctype="multipart/form-data">
	    	{{ csrf_field() }}
	  	    <div class="input-group col-xs-6" >
	            <span class="input-group-addon">名称&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="name" placeholder="名称">   
	        </div>

	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">链接&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="href" placeholder="链接">
	            <span class="input-group-addon">
	            </span>
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