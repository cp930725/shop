@extends('admin.layout.index')


@section('main')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title text-center">添加用户</h3>
    </div>
    <div class="panel-body row">
	    <form action="/admin/users" method="post" enctype="multipart/form-data">
	    	{{ csrf_field() }}
	  	    <div class="input-group col-xs-6" >
	            <span class="input-group-addon">账号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="name" placeholder="账号">
	            <span class="input-group-addon">
	            	 @if ($errors->has('name'))
           				{{ $errors->first('name') }}
        			@endif
	            </span>
	            
	        </div>

	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="password" class="form-control" name="pwd" placeholder="密码">
	            <span class="input-group-addon">
	            	 @if ($errors->has('pwd'))
           				{{ $errors->first('pwd') }}
        			@endif
	            </span>
	        </div>
	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon"> 确认密码 </span>
	            <input type="password" class="form-control" name="repwd" placeholder="确认密码">
	            <span class="input-group-addon">
	            	 @if ($errors->has('repwd'))
           				{{ $errors->first('repwd') }}
        			@endif
	            </span>
	        </div>
	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">手机号&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="phone" class="form-control" name="phone" placeholder="手机号">
	            <span class="input-group-addon">
	            	 @if ($errors->has('phone'))
           				{{ $errors->first('phone') }}
        			@endif
	            </span>
	        </div>
	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">邮箱&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="email" class="form-control" name="email" placeholder="邮箱">
	            <span class="input-group-addon">
	            	 @if ($errors->has('email'))
           				{{ $errors->first('email') }}
        			@endif
	            </span>
	        </div>
	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">昵称&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="nickname" placeholder="昵称">
	            <span class="input-group-addon">
	            	 @if ($errors->has('nickname'))
           				{{ $errors->first('nickname') }}
        			@endif
	            </span>
	        </div>
	        <br>
	        <div class="input-group col-xs-6">
	            <span class="input-group-addon">生日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="btd" placeholder="生日">
	            <span class="input-group-addon">
	            	 @if ($errors->has('btd'))
           				{{ $errors->first('btd') }}
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
			        <input type="radio" name="sex" id="optionsRadiosInline1" value="0" checked>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">男</span></span>
			    </label>
			    <label class="radio-inline">
			        <input type="radio" name="sex" id="optionsRadiosInline2" value="1">
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">女</span></span>
			    </label>
			    <label class="radio-inline">
			        <input type="radio" name="sex" id="optionsRadiosInline2" value="2">
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">保密</span></span>
			    </label>
			</div>
	        <br>
	        <br>
	        <div class="input-group col-xs-6">
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
	            <input type="text" class="form-control" name="city" placeholder="住址">
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