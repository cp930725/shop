@extends('admin.layout.index');

@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">修改密码</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/admin/pwd/reset">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('oldPwd') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">旧密码</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="oldPwd" value="" required autofocus>

                                @if ($errors->has('oldPwd'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('oldPwd') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pwd') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">新密码</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="pwd" required>

                                @if ($errors->has('pwd'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pwd') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pwd_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">确认密码</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="pwd_confirmation" required>

                                @if ($errors->has('pwd_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pwd_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    修改密码
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection