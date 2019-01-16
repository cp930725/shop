@extends('admin.layout.index')

@section('main')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    <span style="vertical-align: inherit;">
                        <span style="vertical-align: inherit;">信息面板</span></span>
                </div>
                <div class="panel-body">
                    @foreach($input as $key => $value)
                    <p>
                        <div style=" display: inline-block; width: 50px;">
                            <span style="vertical-align: inherit; margin-left: 300px;">
                                {{ $key }}
                            </span>
                        </div>
                        <i class="fa fa-long-arrow-right" style="margin-left: 310px;"></i>
                        <span style="vertical-align: inherit;">
                           {{ $value }} 
                        </span>
                    </p>
                    @endforeach
                </div>
                <div class="panel-footer ">
                    <span style="vertical-align: inherit;">
                        <span style="vertical-align: inherit;"><a href="/admin/logs" class="btn btn-info pull-right">返回</a></span></span>
                        <span class="clearfix"></span>
                </div>
            </div>
        </div>
    </div>
@endsection