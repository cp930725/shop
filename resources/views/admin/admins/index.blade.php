@extends('admin.layout.index')

@section('main')
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <a href="/admin/admins/create" class="btn btn-primary">
                        <span style="vertical-align: inherit;">
                            <span style="vertical-align: inherit;"><span class="lnr lnr-user"></span>添加管理员</span>
                        </span>
                    </a>
                    <a href="/admin/logs" class="btn btn-primary">
                        <span style="vertical-align: inherit;">
                            <span style="vertical-align: inherit;"><span class="lnr lnr-bookmark"></span>操作日志</span>
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
                                            <option value="10">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">10</span></span>
                                            </option>
                                            <option value="25">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">25</span></span>
                                            </option>
                                            <option value="50">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">50</span></span>
                                            </option>
                                            <option value="100">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">100</span></span>
                                            </option>
                                        </select>
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">条</span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div id="dataTables-example_filter" class="dataTables_filter">
                                    <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">搜索</span></span>
                                    <div role="form" class="form-group input-group">
                                        <form action="/admin/admins" method="get">
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
                                <table width="100%" class="table text-center table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 206px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">ID</span></span>
                                            </th>
                                            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 246px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">账号</span></span>
                                            </th>
                                            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 225px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">手机号</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 180px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">权限</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 137px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">状态</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 180px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">创建时间</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 180px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">修改时间</span></span>
                                            </th>
                                            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 180px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">操作</span></span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($admins as $k => $v)
                                        <tr class="gradeA odd {{ $v->status == 0 ? '' : 'warning text-danger' }}" role="row">
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $v->id }}</span></span>
                                            </td>
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $v->admin }}</span></span>
                                            </td>
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $v->phone }}</span></span>
                                            </td>
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">
                                                        @if($v->status == 0)
                                                        正常
                                                        @elseif($v->status == 1)
                                                        禁用
                                                        @endif
                                                    </span></span>
                                                </div>
                                            </td>
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">
                                                        @if($v->auth == 0)
                                                        超级管理员
                                                        @elseif($v->auth == 1)
                                                        普通管理员
                                                        @elseif($v->auth == 2)
                                                        客服
                                                        @endif
                                                    </span></span>
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
                                                <a href="/admin/admins/{{ $v->id }}/edit" class="btn btn-warning">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;"></span>修改</span>
                                                </span>
                                            </a>
                                            <a href="javascript:;" onclick="del({{ $v->id }}, this)" class="btn btn-danger">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;"></span>删除</span>
                                                </span>
                                            </a>
                                            <a href="/admin/admins/{{ $v->id }}" class="btn btn-success">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;"></span>查看个人信息</span>
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
                               $.post('/admin/admins/'+id, {'_token':$('input[name="_token"]').val(), '_method':'DELETE'}, function(msg) {
                                    if (msg == 'success') {
                                        alert('删除成功');
                                    }
                                    $(obj).parent().parent().remove();
                               }, 'html');
                            }
                        </script>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous">
                                            <a href="#">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">上一个</span></span>
                                            </a>
                                        </li>
                                        <li class="paginate_button active" aria-controls="dataTables-example" tabindex="0">
                                            <a href="#">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">1</span></span>
                                            </a>
                                        </li>
                                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                                            <a href="#">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">2</span></span>
                                            </a>
                                        </li>
                                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                                            <a href="#">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">3</span></span>
                                            </a>
                                        </li>
                                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                                            <a href="#">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">4</span></span>
                                            </a>
                                        </li>
                                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                                            <a href="#">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">五</span></span>
                                            </a>
                                        </li>
                                        <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                                            <a href="#">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">6</span></span>
                                            </a>
                                        </li>
                                        <li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next">
                                            <a href="#">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">下一个</span></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>
            </div>
        </div>
    </div>

                            

@endsection