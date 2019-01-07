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
	    <form role="form" action="/admin/goods/{{ $goods->id }}" method="post" enctype="multipart/form-data">
	    	{{ csrf_field() }}
	    	{{ method_field('PUT') }}
	    	 
	  	    <div class="input-group col-xs-5" >
	            <span class="input-group-addon">商品名&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="name" placeholder="" value="{{ $goods->name }}">
	            <span class="input-group-addon">
	            	@if ($errors->has('name'))
           				{{ $errors->first('name') }}
        			@endif
	            </span>
	        </div>
	        <br><br>
	        
	        <div class="input-group col-xs-5">
	           <div class="">
			     <div style=" width: 59%;" class="pull-left">
			      <span class="input-group-addon">修改主图</span>
			           <input type="file" name="pic" id = "input_file" accept="image/gif,image/jpeg,image/jpg,image/png,image/svg" onchange="imgPreview(this, 1)">
			          
					      
			     </div>
			     <div class="thumbnail pull-left" style="width: 200px;  margin-bottom: 3px ">

					     		 <img src="/uploads/goods/{{ $goods->pic }}" alt="
					     		 	@if ($errors->has('pic'))
		           						{{ $errors->first('pic') }}
		        					@else
		        						{{ '请添加图片' }}
		        					@endif
					     		 " id="preview" style="height: 140px"  onerror="this.src='{{ $goods->pic }}'">
				</div>
			    </div>
	        </div>
	        <br><br>

	        <div class="input-group col-xs-5">
	           <div class="">
			     <div style=" width: 59%;" class="pull-left">
			      <span class="input-group-addon">修改附图</span>
			           <input type="file" name="sub_pic" id = "input_file" accept="image/gif,image/jpeg,image/jpg,image/png,image/svg" onchange="imgPreview(this, 2)">
			            
					      
			     </div>
			     <div class="thumbnail pull-left" style="width: 200px;  margin-bottom: 3px ">
					     		 <img src="{{ $goods->sub_pic }}" alt="
					     		 	@if ($errors->has('sub_pic'))
		           						{{ $errors->first('sub_pic') }}
		        					@else
		        						{{ '请添加图片' }}
		        					@endif	
					     		 " id="preview2" style="height: 140px">
				</div>
			    </div>
	        </div>
	        <br><br>

	        <div class="input-group col-xs-5">
	            <span class="input-group-addon">标题&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="title" placeholder="" value="{{ $goods->title }}">
	            <span class="input-group-addon">
	            	@if ($errors->has('title'))
           				{{ $errors->first('title') }}
        			@endif
	            </span>
	        </div>
	        <br><br>

	        <div class="input-group col-xs-5">
	            <span class="input-group-addon">价格&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="price" placeholder="" value="{{ $goods->price }}">
	            <span class="input-group-addon">
	            	@if ($errors->has('price'))
           				{{ $errors->first('price') }}
        			@endif
	            </span>
	        </div>
	        <br><br>

	        <div class="input-group col-xs-5">
	            <span class="input-group-addon">库存&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="stock" placeholder="" value="{{ $goods->stock }}">
	            <span class="input-group-addon">
	            	@if ($errors->has('stock'))
           				{{ $errors->first('stock') }}
        			@endif
	            </span>
	        </div>
	        <br><br>
	         
	         <div class="input-group col-xs-5">
	            <span class="input-group-addon">品牌&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="brand" placeholder="" value="{{ $goods->brand }}">
	            <span class="input-group-addon">
	            	@if ($errors->has('brand'))
           				{{ $errors->first('brand') }}
        			@endif
	            </span>
	        </div>
	        <br><br>

	        <div class="input-group col-xs-5">
	            <span class="input-group-addon">产地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <input type="text" class="form-control" name="addr" placeholder="" value="{{ $goods->addr }}">
	            <span class="input-group-addon">
	            	@if ($errors->has('addr'))
           				{{ $errors->first('addr') }}
        			@endif
	            </span>
	        </div>
	        <br><br>

	        <span style="margin-left: 355px">简介</span>&nbsp;:
	        <div class="input-group col-xs-5">
	        	<textarea class="form-control" name="intro" placeholder="{{ $errors->first('intro') }}
	        	" rows="4">{{ $goods->intro }}</textarea>
	        </div>
	        <br><br>

	        <div class="form-group input-group">
			    <label>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">状态</span></span>
			    </label>
			    <label class="radio-inline" style="margin-left:10px">
			        <input type="radio" name="status" id="optionsRadiosInline1" value="1"  @if ($goods->status == 1) checked @endif checked="">
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">上架</span></span>
			    </label>
			    <label class="radio-inline">
			        <input type="radio" name="status" id="optionsRadiosInline2" value="0" @if ($goods->status == '0') checked @endif>
			        <span style="vertical-align: inherit;">
			            <span style="vertical-align: inherit;">预购</span></span>
			    </label>
			    
			</div>
	        <br><br>
	         <div class="input-group col-xs-6">	
	            	<input type="submit" class="btn btn-info form-control" value="提交">
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