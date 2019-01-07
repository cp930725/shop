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
                                        <input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example" name="">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline text-center" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                        
                                            <th class=" " tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">订单编号</span></span>
                                            </th>
                                            <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 150px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">下单时间</span></span>
                                            </th>
                                            <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 120px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">退货商品</span></span>
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
                                                    <span style="vertical-align: inherit;">退货方式</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 150px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">订单状态</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 200px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">退货原因</span></span>
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
                                                    <span style="vertical-align: inherit;">{{ $v->orderInfo->name }}</span></span>
                                            </td>
                                            <td>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $v->cnt }}</span></span>
                                            </td>
                                            
                                            <td class="center">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $v->orderInfo->price * $v->cnt }}</span></span>
                                            </td>
                                            <td class="center">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">
                                                        @if($v->type == 0) 仅退款
                                                        @elseif($v->type == 1) 退货
                                                        @elseif($v->type == 2) 换货
                                                        @endif
                                                    </span>
                                                </span>
                                            </td>
                                            <td class="center">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">
                                                        @if($v->status == 0) 待审中
                                                        @elseif($v->status == 1) 审核通过
                                                        @elseif($v->status == 2) 审核失败
                                                        @elseif($v->status == 3) 取消申请
                                                        @elseif($v->status == 4) 完成
                                                        @endif
                                                    </span>
                                                </span>
                                            </td>
                                            <td class="center">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $v->reason }}</span></span>
                                            </td>
                                            <td>
                                                <a href="/admin/checks/{{ $v->id }}/edit" class="btn btn-warning">审核</a>
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
                                                    <span style="vertical-align: inherit;">5</span></span>
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