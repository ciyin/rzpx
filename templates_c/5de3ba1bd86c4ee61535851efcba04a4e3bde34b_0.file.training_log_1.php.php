<?php
/* Smarty version 3.1.31, created on 2017-02-04 10:20:04
  from "C:\phpstudy\WWW\rzpx\templates\training_log_1.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5895aad496e160_68385828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5de3ba1bd86c4ee61535851efcba04a4e3bde34b' => 
    array (
      0 => 'C:\\phpstudy\\WWW\\rzpx\\templates\\training_log_1.php',
      1 => 1486092740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5895aad496e160_68385828 (Smarty_Internal_Template $_smarty_tpl) {
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
