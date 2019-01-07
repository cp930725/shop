@extends('admin.layout.index')


@section('main')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title text-center">修改用户</h3>
    </div>
    <div class="panel-body row">
	    <form action="/admin/users/{{ $user->id }}" method="post" enctype="multipart/form-data">
	    	{{ csrf_field() }}
	    	{{ method_field('PUT') }}
	  	    <div class="input-group col-xs-6" >
	            <span class="input-group-addon">账号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="name" placeholder="账号" value="{{ $user->name }}">
	        </div>
	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">手机号&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="phone" class="form-control" name="phone" placeholder="手机号" value="{{ $user->phone }}">
	        </div>
	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">邮箱&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="email" class="form-control" name="email" placeholder="邮箱" value="{{ $user->email }}">
	        </div>
	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">昵称&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="nickname" placeholder="昵称" value="{{ $user->userInfo->nickname }}">
	        </div>
	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">生日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="btd" placeholder="生日" value="{{ $user->userInfo->btd }}">
	        </div>
	        <br>
	        <div class="form-group input-group">
			    <label>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">性别</span></span>
			    </label>
			    <label class="radio-inline">
			        <input type="radio" name="sex" id="optionsRadiosInline1" value="0" @if($user->userInfo->sex == 0) checked @endif>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">男</span></span>
			    </label>
			    <label class="radio-inline">
			        <input type="radio" name="sex" id="optionsRadiosInline2" value="1" @if($user->userInfo->sex == 1) checked @endif>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">女</span></span>
			    </label>
			    <label class="radio-inline">
			        <input type="radio" name="sex" id="optionsRadiosInline2" value="2" @if($user->userInfo->sex == 2) checked @endif>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">保密</span></span>
			    </label>
			</div>
	        <br>
	        <br>
	        <div class="input-group col-xs-6">
	        	<img src="/uploads/{{ $user->userInfo->face }}">
	            <span class="input-group-addon">头像&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="file"  name="face"> 
	        </div>
	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">住址&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="city" placeholder="住址" value="{{ $user->userInfo->city }}">
	            <span class="input-group-addon">
	            	
	            </span>
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