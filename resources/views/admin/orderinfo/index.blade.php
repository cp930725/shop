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
                                        <input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline text-center" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">商品名称</span></span>
                                            </th>
                                             <th style="width: 100px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">商品图片</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">商品单价</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">商品数量</span></span>
                                            </th>
                                            <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 150px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">退/换货状态</span></span>
                                            </th>

                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 150px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">小计</span></span>
                                            </th>
                                            <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 160px;">
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
                                                    <span style="vertical-align: inherit;">{{ $v->name }}</span></span>
                                            </td>
                                            <td> 
                                                 <img src="{{ $v->pic }}" alt="{{ $v->name }}" style="width: 100px;">
      
                                            </td>
                                            <td>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $v->price }}</span></span>
                                            </td>
                                            
                                            <td class="center">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ $v->cnt }}</span></span>
                                            </td>
                                            <td>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">
                                                        @if($v->type==0) 正常
                                                        @elseif($v->type==1) 退货
                                                        @elseif($v->type==2) 换货
                                                        @endif
                                                    </span>
                                                </span>
                                            </td>
                                            <td>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">{{ number_format($v->price * $v->cnt, 2) }}</span></span>
                                            </td>
                                           <td>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">
                                                    <a href="/admin/orders" class="btn btn-warning">返回</a>
                                                    <a href="javascript:;"  class="btn btn-warning" onclick="fahuo(this)" oid="{{ $v->id }}">
                                                        @if($v->status==0)发货
                                                        @elseif($v->status==1)已发货
                                                        @elseif($v->status==2)完成
                                                        @endif
                                                    </a></span></span>
                                                    <script>
                                                    
                                                        function fahuo(obj){
                                                            var id = $(obj).attr('oid');

                                                               $.get('/admin/zhuangtai',{'id':id},function(msg){
                                                                    var data = msg.trim();
                                                                    if (data == 'success') {
                                                                        $(obj).text('已发货');  
                                                                    }
                                                                },'html'); 
                                                           } 
   
                                                    </script>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr class="gradeA odd" role="row">
                                            <td class="sorting_1" colspan="8">
                                            <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;"> <strong>总数量&nbsp;:&nbsp;{{ $sum->cnt }}个商品&nbsp;&nbsp;</strong></span></span>
                                                 
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;"><strong>总金额&nbsp;:￥&nbsp;{{ $sum->sum }}元&nbsp;&nbsp;</strong></span></span>
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