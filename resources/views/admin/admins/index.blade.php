@extends('admin.layout.index')

@section('main')
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
    <div class="row">
        <div class="col-sm-6">
            <div class="dataTables_length" id="dataTables-example_length">
                <label>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">节目</font></font>
                    <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
                        <option value="10">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">10</font></font>
                        </option>
                        <option value="25">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">25</font></font>
                        </option>
                        <option value="50">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">50</font></font>
                        </option>
                        <option value="100">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">100</font></font>
                        </option>
                    </select>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">项</font></font>
                </label>
            </div>
        </div>
        <div class="col-sm-6">
            <div id="dataTables-example_filter" class="dataTables_filter">
                <label>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">搜索：</font></font>
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
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">渲染引擎</font></font>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 246px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">浏览器</font></font>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 225px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">平台（S）</font></font>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 180px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">引擎版本</font></font>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 137px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">CSS等级</font></font>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="gradeA odd" role="row">
                        <td class="sorting_1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">壁虎</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Firefox 1.0</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">赢得98+ / OSX.2 +</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">1.7</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">一个</font></font>
                        </td>
                    </tr>
                    <tr class="gradeA even" role="row">
                        <td class="sorting_1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">壁虎</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Firefox 1.5</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">赢得98+ / OSX.2 +</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">1.8</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">一个</font></font>
                        </td>
                    </tr>
                    <tr class="gradeA odd" role="row">
                        <td class="sorting_1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">壁虎</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Firefox 2.0</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">赢得98+ / OSX.2 +</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">1.8</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">一个</font></font>
                        </td>
                    </tr>
                    <tr class="gradeA even" role="row">
                        <td class="sorting_1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">壁虎</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Firefox 3.0</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">赢2k + / OSX.3 +</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">1.9</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">一个</font></font>
                        </td>
                    </tr>
                    <tr class="gradeA odd" role="row">
                        <td class="sorting_1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">壁虎</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">卡米诺1.0</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">OSX.2 +</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">1.8</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">一个</font></font>
                        </td>
                    </tr>
                    <tr class="gradeA even" role="row">
                        <td class="sorting_1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">壁虎</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">卡米诺1.5</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">OSX.3 +</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">1.8</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">一个</font></font>
                        </td>
                    </tr>
                    <tr class="gradeA odd" role="row">
                        <td class="sorting_1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">壁虎</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Netscape 7.2</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">赢得95+ / Mac OS 8.6-9.2</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">1.7</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">一个</font></font>
                        </td>
                    </tr>
                    <tr class="gradeA even" role="row">
                        <td class="sorting_1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">壁虎</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Netscape浏览器8</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">赢98SE +</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">1.7</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">一个</font></font>
                        </td>
                    </tr>
                    <tr class="gradeA odd" role="row">
                        <td class="sorting_1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">壁虎</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Netscape Navigator 9</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">赢得98+ / OSX.2 +</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">1.8</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">一个</font></font>
                        </td>
                    </tr>
                    <tr class="gradeA even" role="row">
                        <td class="sorting_1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">壁虎</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Mozilla 1.0</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">赢得95+ / OSX.1 +</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">1</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">一个</font></font>
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
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">上一个</font></font>
                        </a>
                    </li>
                    <li class="paginate_button active" aria-controls="dataTables-example" tabindex="0">
                        <a href="#">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">1</font></font>
                        </a>
                    </li>
                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                        <a href="#">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">2</font></font>
                        </a>
                    </li>
                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                        <a href="#">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">3</font></font>
                        </a>
                    </li>
                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                        <a href="#">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">4</font></font>
                        </a>
                    </li>
                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                        <a href="#">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">五</font></font>
                        </a>
                    </li>
                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0">
                        <a href="#">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">6</font></font>
                        </a>
                    </li>
                    <li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next">
                        <a href="#">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">下一个</font></font>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
                            

@endsection