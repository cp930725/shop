@extends('admin.layout.index')

@section('main')

        @if (count(session('success')) > 0)
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></button><font style="vertical-align: inherit;"><font style="vertical-align: inherit; font-size: 20px">
            {{ session('success') }}</font></font><a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            </font></font>
        </div>
        @endif
        @if (count(session('error1')) > 0)
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></button><font style="vertical-align: inherit;"><font style="vertical-align: inherit; font-size: 20px">
            {{ session('error1') }}</font></font><a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            </font></font>
        </div>
        @endif
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <a href="/admin/sales/create" class="btn btn-primary">
                        <span style="vertical-align: inherit;">
                            <span style="vertical-align: inherit;"><span class="lnr lnr-cart"></span>添加活动商品</span>
                        </span>
                    </a>
                </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
    <div class="row">
        <div class="col-sm-6">
            <div class="dataTables_length" id="dataTables-example_length">
                <form action="/admin/goods" method="get">
                <label>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">类别</font></font>
                    
                        <select name="paginate" aria-controls="dataTables-example" class="form-control input-sm">
                            <option value="10" >
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">10</font></font>
                            </option>
                            <option value="25" >
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">25</font></font>
                            </option>
                            <option value="50" >
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">50</font></font>
                            </option>
                            <option value="100" >
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">100</font></font>
                            </option>
                        </select>

                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">条</font></font>
                        <input type="submit" name="" value="确定" class="btn btn-primary btn-sm">
                </label>
                </form>
            </div>
        </div>
        <div class="col-sm-6">
                                <div id="dataTables-example_filter" class="dataTables_filter">
                                    <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">搜索&nbsp;:</span></span>
                                    <div class="form-group input-group">
                                        <form action="/admin/goods" method="get">
                                            <input type="search" name="keyword" class="form-control" placeholder="关键字" style="margin-left: 0px" value="">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                            </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                <thead>
                    <tr role="row">
                        
                        <th class="text-center" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">活动标题</font></font>
                        </th>
                        <th class="text-center" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">商品名</font></font>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">原价</font></font>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">促销价</font></font>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">折扣</font></font>
                        </th>
                        <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">品牌</font></font>
                        </th>
                        <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">产地</font></font>
                        </th>
                        <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">库存</font></font>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">销量</font></font>
                        </th>
                        <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 150px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">缩略图</font></font>
                        </th>
                       
                        
                        <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 80px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">操作</font></font>
                        </th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($sales as $k=>$v)
                    <tr class="gradeA odd" role="row">
                        <td class="sorting_1 text-center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ $v->title }}</font></font>
                        </td>
                        <td class="text-center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ $v->goods->name }}</font></font>
                        </td>
                        <td class="text-center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ $v->goods->price }}</font></font>
                        </td>
                        <td class="text-center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ ($v->goods->price * $v->discount)/10 }}</font></font>
                        </td>
                        <td class="text-center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ $v->discount }}折</font></font>
                        </td>
                        <td class="text-center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ $v->goods->brand }}</font></font>
                        </td>
                        <td class="center text-center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ $v->goods->addr }}</font></font>
                        </td>
                        <td class="sorting_1 text-center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ $v->goods->stock }}</font></font>
                        </td>
                        
                        <td class="sorting_1 text-center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;"></font>{{ $v->goods->sell }}</font>
                        </td>
                        <td class="sorting_1 text-center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    <img src="/uploads/goods/{{ $v->goods->pic }}" width="100px" onerror="this.src='{{ $v->goods->pic }}'">
                                </font></font>
                        </td>
                    

                        

                        <td class="center text-center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                	<a class="btn btn-primary" href="/admin/sales/{{ $v->id }}/edit">修改</a>
                                	
                                    <form action="/admin/sales/{{ $v->id }}" method="post" style="display:inline-block;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                	   <input type="submit" class="btn btn-danger sub1" value="删除">
                                    </form>
                                    
                                </font></font>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 pull-right">
            <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
             
                
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript">
    $('.sub1').click(function(){
        if(!confirm("您确定要删除?")){
　　          return false;
        }
    });
</script>

@endsection