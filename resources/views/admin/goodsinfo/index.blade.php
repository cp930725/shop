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
                     <a href="/admin/goodsinfo/create/{{ $gid }}" class="btn btn-primary">
                        <span style="vertical-align: inherit;">
                            <span style="vertical-align: inherit;"><span class="lnr lnr-cart"></span>添加版本</span>
                        </span>
                    </a>
                </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

         
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                <thead>
                    <tr role="row">
                        <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 100px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">商品编号</font></font>
                        </th>
                        <th class=" text-center" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 246px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">版本名</font></font>
                        </th>
                        <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">价格</font></font>
                        </th>
                        <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">库存</font></font>
                        </th>   
                        <th class=" text-center" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">简介</font></font>
                        </th>                     
                        <th class=" text-center" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 270px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">操作</font></font>
                        </th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($goods_info as $k=>$v)
                    <tr class="gradeA odd" role="row">
                        <td class="sorting_1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ $v->num }}</font></font>
                        </td>
                        <td class="sorting_1" style="text-align: center;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ $v->version }}</font></font>
                        </td>
                        <td class="sorting_1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ $v->price }}</font></font>
                        </td>
                        <td class="sorting_1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ $v->stock }}</font></font>
                        </td>
                        <td style="text-align: center;"><button 
                           type="button" 
                           class="btn btn-primary" 
                           data-toggle="modal" 
                           data-target="#{{ $v->id }}">
                          查看
                        </button>
                        </td>
                        <td class="center text-center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                	<a class="btn btn-primary" href="/admin/goodsinfo/{{ $v->id }}/edit">修改</a>
                                	<a class="btn btn-warning" href="/admin/goodsinfo/{{ $v->id }}">相册</a>
                                    <form action="/admin/goodsinfo/{{ $v->id }}" method="post" style="display:inline-block;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                	   <input type="submit" class="btn btn-danger" value="删除" id="sub1">
                                    </form>
                                </font></font>
                        </td>
                    </tr>
                    <div class="modal fade" id="{{ $v->id }}" 
                         tabindex="-1" role="dialog" 
                         aria-labelledby="favoritesModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" 
                              data-dismiss="modal" 
                              aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" 
                            id="favoritesModalLabel">商品简介</h4>
                          </div>
                          <div class="modal-body">
                            <p>
                            {{ $v->content }}
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" 
                               class="btn btn-default" 
                               data-dismiss="modal">Close</button>
                            <span class="pull-right">
                              
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
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
    $('#sub1').click(function(){
        if(!confirm("您确定要删除?")){
　　          return false;
        }
    });
</script>
@endsection