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
	    <form role="form" action="/admin/cates/insert" method="post" id="form1">
	  	    {{ csrf_field() }}

	       
           
	        <div class="input-group col-xs-4">
	            <span class="input-group-addon">分类</span>
	            <select class="form-control" id="cates02" name="pid">
                    <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                    
                </select>
	        </div>
	        <br><br>
            <div class="input-group col-xs-4">
	            <span class="input-group-addon">类名</span>
	            <input type="text" class="form-control" name="name" placeholder="" id="name1">
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