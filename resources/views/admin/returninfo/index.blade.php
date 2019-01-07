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
                            <div class="col-sm-12">
                                <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline text-center" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                             <th style="width: 100px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">用户</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">用户电话</span></span>
                                            </th>

                                            <th style="width: 100px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">收货人</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">收货人电话</span></span>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 100px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">收货人地址</span></span>
                                            </th>

                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 80px;">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">操作</span></span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeA odd" role="row">
                                            <td>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;"> {{ $order->ordersUserAddr->name }} </span></span>
                                            </td>
                                            <td>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;"> {{ $order->ordersUserAddr->phone }} </span></span>
                                            </td>

                                            <td>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;"> {{ $order->ordersUserAddr->name }} </span></span>
                                            </td>
                                            <td>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;"> {{ $order->ordersUserAddr->phone }} </span></span>
                                            </td>
                                            
                                            <td class="center">
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;"> {{ $order->ordersUserAddr->addr }} </span></span>
                                            </td>
                                           <td>
                                                <span style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;"><a href="/admin/returns" class="btn btn-warning">返回</a></span></span>
                                            </td>
                                        </tr>
                                          
                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
            
                    </div>
                </div>
            </div>
        </div>
    </div>

                            

@endsection