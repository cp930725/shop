@extends('admin.layout.index')


@section('main')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title text-center">修改用户</h3>
    </div>
    <div class="panel-body row">
	    <form action="/admin/links/{{ $links->id }}" method="post" enctype="multipart/form-data">
	    	{{ csrf_field() }}
	    	{{ method_field('PUT') }}
	  	    <div class="input-group col-xs-6" >
	            <span class="input-group-addon">名称&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="name" placeholder="名称" value="{{ $links->name }}">
	        </div>
	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">链接&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="href" placeholder="链接" value="{{ $links->href }}">
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