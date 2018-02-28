@extends('home.layout.index')
@section('content')
    @foreach ($res as $v)
        <ul class="fs12">
            <li>
                <label>手机号码：</label>
                <span>{{ $v->tel }}</span>
            </li>
            <li>
                <label>登录密码：</label>
                <span>{{ $v->passwd }}</span>
                <i class="icon edit-icon" ng-click="showChangePassword()"></i>
            </li>
            <li>
                <label>订单信息：</label>
                <span>总计0单</span>
                <span>成功0单</span>
            </li>
        </ul>
    @endforeach 
<dh-dialog class="disnone" header="修改登录密码" height="500" show="showChangePass">
        <div ng-controller="changePasswordCtrl" class="change-password-box">
            <div class="form-group">
                <label>当前密码</label>
                <div>
                    <input type="password" ng-class="{error:user.passwordMessage}" onpaste="return false" maxlength="10" placeholder="请输入当前使用的登录密码" ng-model="user.password" />
                    <span class="vaildate-error" ng-if="user.passwordMessage">
                        <span ng-bind="user.passwordMessage"></span>
                    </span>
                </div>
            </div>
            <div class="form-group mb10">
                <label>新的密码</label>
                <div>
                    <input type="password" ng-class="{error:user.newPasswordMessage}" onpaste="return false" maxlength="10"  placeholder="请输入 6-10个字符" ng-model="user.newPassword" />
                    <span class="vaildate-error" ng-if="user.newPasswordMessage">
                        <span ng-bind="user.newPasswordMessage"></span>
                    </span>
                </div>
            </div>
            <div class="form-group mb20">
                <div>
                    <input type="password" ng-class="{error:user.newPassword2Message}" onpaste="return false" maxlength="10"  placeholder="请再次输入新的密码" ng-model="user.newPassword2"/>
                    <span class="vaildate-error" ng-if="user.newPassword2Message">
                        <span ng-bind="user.newPassword2Message"></span>
                    </span>
                </div>
            </div>
            <div class="tr">
                <button class="btn small-btn btn-success" ng-click="changePassSubmit()" ng-disabled="isSubmit" ng-bind="submitText"></button>
                <button class="btn small-btn btn-cancel" ng-click="changePassCancel()">取消</button>
            </div>
        </div>
    </dh-dialog>
    <dh-dialog class="disnone" type="alert" height="500" index="1001" header="" show="requestSuccess">
        <div class="alert-box">
            <p>修改密码成功</p>
            <p class="fs12">3秒后自动关闭</p>
        </div>
    </dh-dialog>
    <dh-dialog class="disnone" type="alert" height="500" index="1001" header="" show="requestError">
        <div class="alert-box error">
            <p>修改密码失败</p>
        </div>
    </dh-dialog>
@endsection