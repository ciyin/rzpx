<!--培训内容-->
<div style="margin-top: 5px">
    <!--新增用户按钮-->
    <div>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-plus"></span>
        </button>
        <div style="float: right">
            <form id="search_user">
                <input type="text" name="username" placeholder="请输入姓名搜索">
                <button type="button" onclick="select_user()" style="margin-left: 5px">搜索</button>
            </form>
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
                <td>城市</td>
                <td>创建人</td>
                <td>创建日期</td>
            </tr>
            </thead>
            <tbody id="user_list">





