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
                     <a href="/admin/cates/create" class="btn btn-primary">
                        <span style="vertical-align: inherit;">
                            <span style="vertical-align: inherit;"><span class="lnr lnr-text-align-left"></span>添加类别</span>
                        </span>
                    </a>
                </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
    <div class="row">
        <div class="col-sm-6">
            <div class="dataTables_length" id="dataTables-example_length">
                <form action="/admin/cates" method="get">
                <label>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">类别</font></font>
                    
                        <select name="paginate" aria-controls="dataTables-example" class="form-control input-sm">
                            <option value="10"  @if($num==10) selected @endif>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">10</font></font>
                            </option>
                            <option value="25" @if($num==25) selected @endif>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">25</font></font>
                            </option>
                            <option value="50" @if($num==50) selected @endif>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">50</font></font>
                            </option>
                            <option value="100" @if($num==100) selected @endif>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">100</font></font>
                            </option>
                        </select>

                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">条</font></font>
                        <input type="submit" name="" value="确定" class="btn btn-primary btn-sm">
                </label>
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <form action="/admin/cates" method="get">
                <div id="dataTables-example_filter" class="dataTables_filter">
                    <label>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">关键字搜索：</font></font>
                        <input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example" name="keyword" value="{{ $keyword }}"></label>
                        <input type="submit" name="" value="确定" class="btn btn-primary btn-sm">
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 20px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">ID</font></font>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 246px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">类名</font></font>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 50px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">父类ID</font></font>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">PATH</font></font>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 210px;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">操作</font></font>
                        </th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($cates as $k=>$v)
                    <tr class="gradeA odd" role="row">
                        <td class="sorting_1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$v->id}}</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$v->name}}</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$v->pid}}</font></font>
                        </td>
                        <td class="center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$v->path}}</font></font>
                        </td>
                        <td class="center text-center">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                	<a class="btn btn-primary" href="/admin/createcates/{{ $v->id }}">添加子类</a>
                                	<a class="btn btn-warning" href="/admin/cates/{{ $v->id }}/edit">修改</a>
                                    <form action="/admin/cates/{{ $v->id }}" method="post" style="display:inline-block;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                	   <input type="submit" class="btn btn-danger sub1" value="删除">
                                    </form>
                                </font></font>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 pull-right">
            <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
              
                {{ $cates->appends(['paginate' => $num, 'keyword'=>$keyword])->links() }}
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript">
    $('.sub1').click(function(){
        if(!confirm('您确定要删除吗?')) {
            return false;
        }
    });
</script>
@endsection