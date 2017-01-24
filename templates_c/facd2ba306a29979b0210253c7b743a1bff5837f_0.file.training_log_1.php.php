<?php
/* Smarty version 3.1.31, created on 2017-01-24 08:08:19
  from "C:\phpStudy\WWW\rzpx\templates\training_log_1.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58870b737b5705_37734585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'facd2ba306a29979b0210253c7b743a1bff5837f' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\rzpx\\templates\\training_log_1.php',
      1 => 1485245284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58870b737b5705_37734585 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--培训内容-->
<div style="margin-top: 5px">
    <!--搜索-->
    <div style="float: right;margin-bottom: 5px">
        <form id="search_log">
            <input type="text" name="search_name" placeholder="请输入姓名进行查找">
            <button type="button" onclick="log()" style="margin-left: 5px">搜索</button>
        </form>
    </div>
    <div>
        <table class="table table-responsive">
            <thead>
            <tr style="background-color: gainsboro">
                <td>序号</td>
                <td>姓名</td>
                <td>角色</td>
                <td>城市</td>
                <td>观看内容</td>
                <td>观看时间</td>
            </tr>
            </thead>
            <tbody id="log_list"><?php }
}
