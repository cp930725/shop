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
	    <form role="form" action="/admin/cates" method="post" id="form1">
	  	    {{ csrf_field() }}

	       
            <div class="input-group col-xs-4">
	            <span class="input-group-addon">所属一级分类&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	            <select class="form-control" id="cates01" name="id">
                    <option value="0">顶级分类</option>
                    @foreach($cates as $k=>$v)
                    <option value="{{$v->id}}">{{$v->name}}</option>
                    @endforeach
                </select>
	        </div>
	        <br><br>
	        <div class="input-group col-xs-4">
	            <span class="input-group-addon">填所属二级分类(选)</span>
	            <select class="form-control" id="cates02" name="id2">
                    <option>无</option>
                    
                </select>
	        </div>
	        <br><br>
            <div class="input-group col-xs-4">
	            <span class="input-group-addon">类名&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
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
<script type="text/javascript">
	$('#cates01').change(function () {
		
		$.ajax({
				url:'/admin/getcates',
				type:'get',
				data:{'pid':$(this).val()},
				dataType:'json',
				async:true,
				success:function(data){
					console.log(data);
					var str = '<option value="">--请选择--</option>';
					$.each(data, function (k, v) {
						str += '<option value="'+v.id+'">'+v.name+'</option>';
					});
					// 赋值
					$('#cates02').html(str);
					}, 
			});

	});

	$('#form1').submit(function () {
			var vals = $('#name1').val();
			if (vals == '') {
				$('#name1').attr('placeholder', '类名不能为空');
				return false;
			}
			
		});
</script>
@endsection