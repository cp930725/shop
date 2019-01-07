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
	    <form role="form" action="/admin/goodsinfo" method="post" enctype="multipart/form-data">
	    	{{ csrf_field() }}
    		
    		<input type="hidden" name="goods_id" value="{{ $gid }}">
	  	    <div class="input-group col-xs-5" >
	            <span class="input-group-addon">版本名&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="version" placeholder="" value="{{ old('version') }}">
	            <span class="input-group-addon">
	            	@if ($errors->has('version'))
           				{{ $errors->first('version') }}
        			@endif
	            </span>
	        </div>
	        <br><br>

	        <div class="input-group col-xs-5" >
	            <span class="input-group-addon">商品编号</span>
	            <input type="text" class="form-control" name="num" placeholder="" value="{{ old('num') }}">
	            <span class="input-group-addon">
	            	@if ($errors->has('num'))
           				{{ $errors->first('num') }}
        			@endif
	            </span>
	        </div>
	        <br><br>
	        
	      

	        <div class="input-group col-xs-5">
	            <span class="input-group-addon">价格&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="price" placeholder="" value="{{ old('price') }}">
	            <span class="input-group-addon">
	            	@if ($errors->has('price'))
           				{{ $errors->first('price') }}
        			@endif
	            </span>
	        </div>
	        <br><br>

	        <div class="input-group col-xs-5">
	            <span class="input-group-addon">商品数量</span>
	            <input type="text" class="form-control" name="stock" placeholder="" value="{{ old('stock') }}">
	            <span class="input-group-addon">
	            	@if ($errors->has('stock'))
           				{{ $errors->first('stock') }}
        			@endif
	            </span>
	        </div>
	        <br><br>
	         
	         <div class="input-group col-xs-5">
	           <div class="">
			     <div style=" width: 59%;" class="pull-left">
			      <span class="input-group-addon">选项卡图</span>
			           <input type="file" name="imgs1[]" id = "input_file" accept="image/gif,image/jpeg,image/jpg,image/png,image/svg" onchange="imgPreview(this, 1)" multiple>
			          
					      
			     </div>
			     <div class="thumbnail pull-left" style="width: 200px;  margin-bottom: 3px ">

					     		 <img src="" alt="
					     		 	@if ($errors->has('imgs1'))
		           						{{ $errors->first('imgs1') }}
		        					@else
		        						{{ '请添加图片' }}
		        					@endif
					     		 " id="preview" style="height: 140px">
				</div>
			    </div>
	        </div>
	        <br><br>

	        <div class="input-group col-xs-5">
	           <div class="">
			     <div style=" width: 59%;" class="pull-left">
			      <span class="input-group-addon">商品配图</span>
			           <input type="file" name="imgs2[]" id = "input_file" accept="image/gif,image/jpeg,image/jpg,image/png,image/svg" onchange="imgPreview(this, 2)" multiple>
			          
					      
			     </div>
			     <div class="thumbnail pull-left" style="width: 200px;  margin-bottom: 3px ">

					     		 <img src="" alt="
					     		 	@if ($errors->has('imgs2'))
		           						{{ $errors->first('imgs2') }}
		        					@else
		        						{{ '请添加图片' }}
		        					@endif
					     		 " id="preview2" style="height: 140px">
				</div>
			    </div>
	        </div>
	        <br><br>
	        

	        <span style="margin-left: 365px">商品描述</span>&nbsp;:
	        <div class="input-group col-xs-5">
	        	<textarea class="form-control" name="content" placeholder="@if($errors->has('content')) {{ $errors->first('content') }} @else {{'请输入' }} @endif
	        	" rows="4">{{ old('content') }}</textarea>
	        </div>
	        <br><br>

	        
	         <div class="input-group col-xs-6">	
	            	<input type="submit" class="btn btn-info form-control" value="添加">
	        	</span>
	        </div>
	    </form>  
	</div>
</div>

<script type="text/javascript">
	function imgPreview(fileDom, n) {
	    //判断是否支持FileReader
	    if(window.FileReader) {
	        var reader = new FileReader();
	    } else {
	        alert("您的设备不支持图片预览功能，如需该功能请升级您的设备！");
	    }
	    //获取文件
	    var file = fileDom.files[0];
	    var imageType = /^image\//;
	    //是否是图片
	    if(!imageType.test(file.type)) {
	        alert("请选择图片！");
	        return;
	    }
	    //读取完成
	     reader.onload = function(e) {
	        
	        if (n == 1) {
	        	//获取图片dom
	        var img = document.getElementById("preview");
	        //图片路径设置为读取的图片
	        img.src = e.target.result;
	    } else {
	    	//获取图片dom
	        var img = document.getElementById("preview2");
	        //图片路径设置为读取的图片
	        img.src = e.target.result;
	    }
	        
	    };
	    reader.readAsDataURL(file);
	}
</script>
@endsection