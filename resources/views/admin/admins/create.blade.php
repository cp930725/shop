@extends('admin.layout.index')

@section('main')

<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title text-center">添加管理员</h3>
    </div>
    <div class="panel-body row">
	    <form role="form" action="/admin/admins" method="post">
	  	    <div class="input-group col-xs-6" >
	            <span class="input-group-addon">账号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="admin" placeholder="账号">
	        </div>
	        <br><br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="password" class="form-control" name="pwd" placeholder="密码">
	        </div>
	        <br><br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon"> 确认密码 </span>
	            <input type="password" class="form-control" name="repwd" placeholder="确认密码">
	        </div>
	        <br><br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">手机号&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="phone" class="form-control" name="phone" placeholder="手机号">
	        </div>
	        <br><br>
	        <div class="form-group input-group">
			    <label>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">权限</span></span>
			    </label>
			    <label class="radio-inline">
			        <input type="radio" name="auth" id="optionsRadiosInline1" value="0" checked="">
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">超级管理员</span></span>
			    </label>
			    <label class="radio-inline">
			        <input type="radio" name="auth" id="optionsRadiosInline2" value="1">
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">普通管理员</span></span>
			    </label>
			    <label class="radio-inline">
			        <input type="radio" name="auth" id="optionsRadiosInline3" value="2">
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">客服</span></span>
			    </label>
			</div>
	        <br><br>
	         <div class="input-group col-xs-4">	
	            	<input type="submit" class="btn btn-info form-control" value="添加">
	        	</span>
	        </div>
	    </form>  
	</div>
</div>
@endsection