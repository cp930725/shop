@extends('admin.layout.index')

@section('main')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title text-center">修改管理员</h3>
    </div>
    <div class="panel-body row">
	    <form role="form" action="/admin/admins/{{ $admin->id }}" method="post" enctype="multipart/form-data">
	    	{{ csrf_field() }}
	    	{{ method_field('PUT') }}
	  	    <div class="input-group col-xs-6" >
	            <span class="input-group-addon">账号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="admin" disabled value="{{ $admin->admin }}" placeholder="账号" >
	        </div>
	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">手机号&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="phone" class="form-control" value="{{ $admin->phone }}" name="phone" placeholder="手机号">
	        </div>
	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">姓名&nbsp;&nbsp;&nbsp;&nbsp;;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="name" value="{{ $admin->adminInfo->name }}" placeholder="姓名">
	            <span class="input-group-addon">
	            	 @if ($errors->has('name'))
           				{{ $errors->first('name') }}
        			@endif
	            </span>
	        </div>
	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">编号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="service" value="{{ $admin->adminInfo->service }}" placeholder="编号">
	            <span class="input-group-addon">
	            	 @if ($errors->has('service'))
           				{{ $errors->first('service') }}
        			@endif
	            </span>
	        </div>
	        <br>
	        <div class="form-group input-group">
			    <label>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">性别</span></span>
			    </label>
			    <label class="radio-inline">
			        <input type="radio" name="sex" id="optionsRadiosInline1" value="0" @if($admin->adminInfo->sex == 0) checked @endif>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">男</span></span>
			    </label>
			    <label class="radio-inline">
			        <input type="radio" name="sex" id="optionsRadiosInline2" value="1" @if($admin->adminInfo->sex == 1) checked @endif>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">女</span></span>
			    </label>
			</div>
	        <br>
	        <div class="input-group col-xs-6">
	        	<img src="/uploads/{{ $admin->adminInfo->face }}">
	            <span class="input-group-addon">头像&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="file"  name="face"> 
	            <span class="input-group-addon">
	            @if ($errors->has('face'))
           				{{ $errors->first('face') }}
        		@endif
	            </span>
	        </div>
	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">住址&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="city" value="{{ $admin->adminInfo->city }}" placeholder="住址">
	            <span class="input-group-addon">
	            	
	            </span>
	        </div>
	        <br>
	        <div class="form-group input-group">
			    <label>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">权限</span></span>
			    </label>
			    <label class="radio-inline">
			        <input type="radio" name="auth" id="optionsRadiosInline1" value="0" @if($admin->auth == 0) checked @endif>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">超级管理员</span></span>
			    </label>
			    <label class="radio-inline">
			        <input type="radio" name="auth" id="optionsRadiosInline2" value="1" @if($admin->auth == 1) checked @endif>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">普通管理员</span></span>
			    </label>
			    <label class="radio-inline">
			        <input type="radio" name="auth" id="optionsRadiosInline3" value="2" @if($admin->auth == 2) checked @endif>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">客服</span></span>
			    </label>
			</div>
	        <br>
	        <div class="form-group input-group">
			    <label>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">状态</span></span>
			    </label>
			    <label class="radio-inline">
			        <input type="radio" name="status" id="optionsRadiosInline1" value="0" @if($admin->status == 0) checked @endif>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">正常</span></span>
			    </label>
			    <label class="radio-inline">
			        <input type="radio" name="status" id="optionsRadiosInline2" value="1" @if($admin->status == 1) checked @endif>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">禁用</span></span>
			    </label>
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