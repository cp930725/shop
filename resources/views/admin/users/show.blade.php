@extends('admin.layout.index')

@section('main')
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <a href="/admin/users/create" class="btn btn-primary">
                        <span style="vertical-align: inherit;">
                            <span style="vertical-align: inherit;"><span class="lnr lnr-user"></span>添加管理员</span>
                        </span>
                    </a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">                             
                        <div class="row">
                            <div class="col-sm-12">
                                <table width="100%" class="table text-center table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%">
                                    <thead>
                                        <tr role="row">
                                            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">用户id</span></span>
                                            </th>
                                            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">昵称</span></span>
                                            </th>
                                            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">生日</span></span>
                                            </th>
                                            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">头像</span></span>
                                            </th> 
                                            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">性别</span></span>
                                            </th>
                                            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">住址</span></span>
                                            </th>
                                            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">创建时间</span></span>
                                            </th>
                                            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">修改时间</span></span>
                                            </th>
                                            <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">操作</span></span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeA odd" role="row">
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $user->users_id }}</span></span>
                                            </td>
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $user->nickname }}</span></span>
                                                </div>
                                            </td>
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $user->btd }}</span></span>
                                            </td>
                                            <td class="sorting_1">
                                                <img src="/uploads/{{ $user->face }}">
                                            </td>
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">
                                                        @if($user->sex == 0)
                                                        男
                                                        @elseif($user->sex == 1)
                                                        女
                                                        @elseif($user->sex == 2)
                                                        保密
                                                        @endif
                                                    </span></span>
                                            </td>
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $user->city }}</span></span>
                                            </td>
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $user->created_at }}</span></span>
                                            </td>
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $user->updated_at }}</span></span>
                                            </td>
                                            <td class="sorting_1">
                                                <a href="/admin/users" class="btn btn-info">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;"></span>返回</span>
                                                </span>
                                            </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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