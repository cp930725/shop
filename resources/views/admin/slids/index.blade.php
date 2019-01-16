@extends('admin.layout.index')

@section('main')
@if (count(session('success')) > 0)
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></button><font style="vertical-align: inherit;"><font style="vertical-align: inherit; font-size: 20px">
            {{ session('success') }}</font></font><a href="#" class="alert-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            </font></font>
        </div>
        @endif
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <a href="/admin/slids/create" class="btn btn-primary">
                        <span style="vertical-align: inherit;">
                            <span style="vertical-align: inherit;"><span class="lnr lnr-user"></span>添加轮播图</span>
                        </span>
                    </a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">                             
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_length" id="dataTables-example_length">
                                    <label>
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">数据</span></span>
                                        <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
                                            <option value="10" @if($paginate == 10) selected @endif>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">10</span></span>
                                            </option>
                                            <option value="25" @if($paginate == 25) selected @endif>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">25</span></span>
                                            </option>
                                            <option value="50" @if($paginate == 50) selected @endif>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">50</span></span>
                                            </option>
                                            <option value="100" @if($paginate == 100) selected @endif>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">100</span></span>
                                            </option>
                                        </select>
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">条</span></span>
                                    </label>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $('#search').change(function(){
                                    var paginate = $(this).val();
                                    $.get('/admin/slids', {"paginate":paginate}, function(msg){
                                        $('body').html(msg);
                                    }, 'html');
                                });
                            </script>
                            <div class="col-sm-6">
                                <div class="sidebar-search pull-right">
                                    <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">搜索</span></span>
                                    <div role="form" class="input-group custom-search-form">
                                        <form action="/admin/slids" method="get">
                                            <input type="search" name="key" class="form-control" placeholder="关键字">
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
                                <table width="100%" class="table text-center table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" data="{{ $data }}" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" value="id" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 206px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">ID</span></span>
                                            </th>
                                            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 246px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">图片</span></span>
                                            </th>
                                            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 225px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">跳转地址</span></span>
                                            </th>
                                            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 180px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">状态</span></span>
                                            </th>
                                            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 180px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">名称</span></span>
                                            </th>
                                            <th class="sorting" value="created_at" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 180px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">创建时间</span></span>
                                            </th>
                                            <th class="sorting" value="updated_at" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 180px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">修改时间</span></span>
                                            </th>
                                            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 180px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">操作</span></span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <script type="text/javascript">
                                        $('.sorting').click(
                                            function(){
                                                var data = $('#dataTables-example').attr('data');
                                                if (data == 'asc') {
                                                    var order = $(this).attr('value');
                                                    $.get('/admin/slids', {"order":order, "data":'desc'}, function(msg){
                                                        $('body').html(msg);
                                                    } , 'html');
                                                } else {
                                                    var order = $(this).attr('value');
                                                    $.get('/admin/slids', {"order":order, "data":'asc'}, function(msg){
                                                        $('body').html(msg);
                                                    } , 'html');
                                                }
                                            }
                                        );
                                    </script>
                                    <tbody>
                                        @foreach($slids as $k => $v)
                                        <tr class="gradeA odd" role="row" height="100">
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $v->id }}</span></span>
                                            </td>
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;"><img width="100" src="/uploads/{{ $v->image }}"></span></span>
                                            </td>
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $v->url }}</span></span>
                                            </td>
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">
                                                    @if($v->status == 0)
                                                    正在使用
                                                    @elseif($v->status == 1)
                                                    下架
                                                    @endif</span></span>
                                            </td>
                                             <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $v->sort }}</span></span>
                                            </td>
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $v->created_at }}</span></span>
                                            </td>
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $v->updated_at }}</span></span>
                                            </td>
                                            <td class="sorting_1">
                                                <a href="/admin/slids/{{ $v->id }}/edit" class="btn btn-warning">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;"></span>修改</span>
                                                </span>
                                            </a>
                                            <a href="javascript:;" onclick="del({{ $v->id }}, this)" class="btn btn-danger">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;"></span>删除</span>
                                                </span>
                                            </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <script type="text/javascript">
                            function del(id, obj) {
                                var data = confirm('你真的要删除吗');
                                if (data == true) {
                                    $.post('/admin/slids/'+id, {'_token':$('input[name="_token"]').val(), '_method':'DELETE'}, function(msg) {
                                        if (msg == 'success') {
                                            alert('删除成功');
                                        }
                                        $(obj).parent().parent().remove();
                                    }, 'html');
                                }
                            }
                        </script>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                    {{ $slids->appends(['paginate' => $paginate, 'key'=>$key, 'order'=>$order, 'data'=>$data])->links() }}
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>
            </div>
        </div>
    </div>

                            

@endsection