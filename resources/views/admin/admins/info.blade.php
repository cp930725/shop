@extends('admin.layout.index')

@section('main')
<div class="col-xs-12 col-sm-6 col-md-8" style="margin-left: 200px">
    <!-- PROFILE HEADER -->
    <div class="profile-header">
        <div class="overlay"></div>
        <div class="profile-main">
            <img src="/uploads/{{ $admin->adminInfo->face }}" class="img-circle" alt="{{ $admin->adminInfo->nickname }}">
            <h3 class="name">{{ $admin->adminInfo->nickname }}</h3>
            <span class="online-status status-available">在线</span></div>
        <div class="profile-stat">
            <div class="row">
                <div class="col-md-4 stat-item">账号
                    <span>{{ $admin->admin }}</span></div>
                <div class="col-md-4 stat-item">权限
                    <span> @if($admin->auth == 0)
                            超级管理员
                            @elseif($admin->auth == 1)
                            普通管理员
                            @elseif($admin->auth == 2)
                            客服
                            @endif</span></div>
                <div class="col-md-4 stat-item">状态
                    <span>@if($admin->status == 0)
                        正常
                        @elseif($admin->status == 1)
                        禁用
                        @endif</span></div>
            </div>
        </div>
    </div>
    <!-- END PROFILE HEADER -->
    <!-- PROFILE DETAIL -->
    <div class="profile-detail">
        <div class="profile-info">
            <h4 class="heading">基本信息</h4>
            <ul class="list-unstyled list-justify">
                <li>编号
                    <span>{{ $admin->adminInfo->service }}</span></li>
                <li>入职时间
                    <span>{{ $admin->created_at }}</span></li>
                <li>性别
                    <span> @if($admin->sex == 0)
                            男
                            @elseif($admin->sex == 1)
                            女
                            @endif</span></li>    
                <li>手机号
                    <span>{{ $admin->phone }}</span></li>
                <li>住址
                    <span>{{ $admin->adminInfo->city }}</span></li>
            </ul>
        </div>
        
        
        <div class="text-center">
            <a href="/admin/admins/{{ $admin->id }}/edit" class="btn btn-info">编辑个人信息</a></div>
    </div>
    <!-- END PROFILE DETAIL --></div>
                            

@endsection