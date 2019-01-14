@extends('admin.layout.index')

@section('main')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title text-center">修改管理员</h3>
    </div>
    <div class="panel-body row">
	    <form role="form" action="/admin/admins/pwd/{{ $admin->id }}" method="post" >
	    	{{ csrf_field() }}
	  	    <div class="input-group col-xs-6" >
	            <span class="input-group-addon">账号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="admin" disabled value="{{ $admin->admin }}" placeholder="账号" >
	        </div>
	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">新密码&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="password" class="form-control"  name="pwd" placeholder="新密码">
	        </div>
	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">确认密码&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="password" class="form-control"  name="pwd_confirmation" placeholder="确认密码">
	        </div>
	        <br>
	         <div class="input-group col-xs-4">	
	            	<input type="submit" class="btn btn-info form-control" value="修改" >
	        	</span>
	        </div>
	    </form>  
	</div>
</div>
@endsection