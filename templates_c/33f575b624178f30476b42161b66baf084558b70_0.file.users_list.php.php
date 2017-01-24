<?php
/* Smarty version 3.1.31, created on 2017-01-23 10:26:33
  from "C:\phpStudy\WWW\rzpx\templates\users_list_1.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5885da593834d7_11893016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33f575b624178f30476b42161b66baf084558b70' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\rzpx\\templates\\users_list_1.php',
      1 => 1485166726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5885da593834d7_11893016 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--培训内容-->
<div style="margin-top: 5px" id="user_list">
    <!--新增用户按钮-->
    <div>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-plus"></span>
        </button>
        <div style="float: right">
            <input type="text" name="search_user" placeholder="请输入姓名搜索"><input type="button" value="搜索" style="margin-left: 5px">
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
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lists']->value, 'list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['list']->value['email'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['list']->value['password'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['list']->value['role'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['list']->value['city'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['list']->value['created_by'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['list']->value['created_at'];?>
</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

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
                    <form role="form" id="add_user">
                        <div class="form-group">
                            <label for="user">姓名</label>
                            <input type="text" class="form-control" id="user" placeholder="请输入中文姓名" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">邮箱</label>
                            <input type="text" class="form-control" id="email" placeholder="该输入个人邮箱" name="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">授权码</label>
                            <input type="text" class="form-control" id="pwd" placeholder="请输入授权码用于登录" name="password">
                        </div>
                        <div class="checkbox">
                            <span>城市：</span>
                            <label class="radio-inline">
                                <input type="radio" name="city" id="shanghai" value="上海"> 上海
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="city" id="guangzhou" value="广州"> 广州
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="city" id="dalian" value="大连"> 大连
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="city" id="changchun" value="长春"> 长春
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="city" id="shenyang" value="沈阳"> 沈阳
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="city" id="beijing" value="北京"> 北京
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="city" id="chengdu" value="成都"> 成都
                            </label>
                        </div>
                        <div class="checkbox">
                            <span>岗位：</span>
                            <label class="radio-inline">
                                <input type="radio" name="roles_id" value="1"> 督导
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="roles_id" value="2"> cr
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="roles_id" value="3"> 前台
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="roles_id" value="4"> 顾问
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="roles_id" value="5"> 教务
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="roles_id" value="6"> 财务
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="roles_id" value="7"> 副校长
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="roles_id" value="8"> 校长
                            </label>
                        </div>
                        <div style="height: 30px">
                            <button type="button" class="btn btn-primary" style="float: right;margin-left: 5px" onclick="add()">提交</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal" style="float: right">取消</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
