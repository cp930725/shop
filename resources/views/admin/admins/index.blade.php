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
                                    <label>
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">搜索：</span></span>
                                        <input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 206px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">渲染引擎</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 246px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">浏览器</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 225px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">平台（S）</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 180px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">引擎版本</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 137px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">CSS等级</span></span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeA odd" role="row">
                                            <td class="sorting_1">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">壁虎</span></span>
                                            </td>
                                            <td>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">Firefox 1.0</span></span>
                                            </td>
                                            <td>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">赢得98+ / OSX.2 +</span></span>
                                            </td>
                                            <td class="center">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">1.7</span></span>
                                            </td>
                                            <td class="center">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">一个</span></span>
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