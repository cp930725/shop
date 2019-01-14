@extends('admin.layout.index')

@section('main')
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">                             
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_length" id="dataTables-example_length">
                                    <form action="/admin/waters" method="get">
                                    <label>
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">订单</span></span>
                                        
                                            <select name="paginate" aria-controls="dataTables-example" class="form-control input-sm">
                                                <option value="10"  @if($num==10) selected @endif>
                                                    <span style="vertical-align: inherit;">
                                                        <span style="vertical-align: inherit;">10</span></span>
                                                </option>
                                                <option value="25" @if($num==25) selected @endif>
                                                    <span style="vertical-align: inherit;">
                                                        <span style="vertical-align: inherit;">25</span></span>
                                                </option>
                                                <option value="50" @if($num==50) selected @endif>
                                                    <span style="vertical-align: inherit;">
                                                        <span style="vertical-align: inherit;">50</span></span>
                                                </option>
                                                <option value="100" @if($num==100) selected @endif>
                                                    <span style="vertical-align: inherit;">
                                                        <span style="vertical-align: inherit;">100</span></span>
                                                </option>
                                            </select>
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">条</span></span>
                                            <input type="submit" name="" value="确定" class="btn btn-primary btn-sm">
                                    </label>
                                    </form>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div id="dataTables-example_filter" class="dataTables_filter">
                                    <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">搜索</span></span>
                                    <div class="form-group input-group">
                                        <form action="/admin/waters" method="get">
                                            <input type="search" name="keyword" class="form-control" placeholder="关键字" value="{{ $keyword }}" style="margin-left: 0px;">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline text-center" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">订单编号</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 150px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">下单时间</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 120px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">商品名称</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 120px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">商品个数</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 120px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">总金额</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 150px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">出入账状态</span></span>
                                            </th>

                                            <th style="width: 80px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">操作</span></span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $k=>$v)
                                        <tr class="gradeA odd" role="row">
                                            <td>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $v->oid }}</span></span>
                                            </td>
                                            <td>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $v->created_at }}</span></span>
                                            </td>
                                            <td>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $v->name }}</span></span>
                                            </td>
                                            <td>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $v->cnt }}</span></span>
                                            </td>
                                            
                                            <td class="center">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $v->sum }}</span></span>
                                            </td>
                                          
                                            <td class="center">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">
                                                        @if($v->tally == 0) 入账
                                                        @elseif($v->tally == 1) 出帐
                                                        @endif
                                                    </span>
                                                </span>
                                            </td>
                                            <td>
                                                <a href="/admin/water/{{ $v->id }}" class="btn btn-info">详情</a><br>
                                                <a href="/admin/water/{{ $v->id }}/edit" class="btn btn-warning">修改</a>
                                            </td>

                                        </tr>
                                    @endforeach 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                    {{ $data->appends(['paginate' => $num, 'keyword'=>$keyword])->links() }}
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>
            </div>
        </div>
    </div>

                            

@endsection