<?php
/* Smarty version 3.1.31, created on 2017-01-24 08:58:43
  from "C:\phpStudy\WWW\rzpx\templates\users_list_1.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_588717437be1f3_73775352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da2d6b10603bc9a991e1a92e1d6e0d942ac7d8bc' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\rzpx\\templates\\users_list_1.php',
      1 => 1485248275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588717437be1f3_73775352 (Smarty_Internal_Template $_smarty_tpl) {
?>
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





<?php }
}
