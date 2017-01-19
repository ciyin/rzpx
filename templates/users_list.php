<!--培训内容-->
<div style="margin-top: 5px">
    <!--新增用户按钮-->
    <div>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-plus"></span>
        </button>
        <div style="float: right">
            <input type="text" name="search"><input type="button" value="搜索" style="margin-left: 5px">
        </div>
    </div>
    <!--用户列表-->
    <div style="margin-top: 5px">
        <table class="table">
            <thead>
            <tr style="background: gainsboro">
                <td>序号</td>
                <td>姓名</td>
                <td>邮箱</td>
                <td>授权码</td>
                <td>角色</td>
                <td>创建人</td>
                <td>创建日期</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>刘丹霞</td>
                <td>123333@qq.com</td>
                <td>123</td>
                <td>ta</td>
                <td>admin</td>
                <td>2017/1/17 12:00</td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--新增用户表单-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">添加用户</h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="user">姓名</label>
                            <input type="text" class="form-control" id="user" placeholder="请输入中文姓名" name="user">
                        </div>
                        <div class="form-group">
                            <label for="username">邮箱</label>
                            <input type="text" class="form-control" id="username" placeholder="该邮箱用于登录" name="email">
                        </div>
                        <div class="checkbox">
                            <span>城市：</span>
                            <label class="radio-inline">
                                <input type="radio" name="city" id="shanghai" value="shanghai"> 上海
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="city" id="guangzhou" value="guangzhou"> 广州
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="city" id="dalian" value="dalian"> 大连
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="city" id="changchun" value="changchun"> 长春
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="city" id="shenyang" value="shenyang"> 沈阳
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="city" id="beijing" value="beijing"> 北京
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="city" id="chengdu" value="chengdu"> 成都
                            </label>
                        </div>
                        <div class="checkbox">
                            <span>岗位：</span>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="role[]" value="1"> 督导
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="role[]" value="2"> cr
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="role[]" value="3"> 前台
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="role[]" value="4"> 顾问
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="role[]" value="5"> 教务
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="role[]" value="6"> 财务
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="role[]" value="7"> 副校长
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="role[]" value="8"> 校长
                            </label>
                        </div>
                        <div style="margin-bottom: 5px">
                            <button type="button" class="btn btn-default">生成授权码</button>
                            <input name="password" value=function()>
                        </div>
                        <div style="height: 30px">
                            <button type="submit" class="btn btn-primary" style="float: right;margin-left: 5px">提交</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal" style="float: right">取消</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>