<?php
/* Smarty version 3.1.31, created on 2017-01-23 10:39:17
  from "C:\phpStudy\WWW\rzpx\templates\users_list_3.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5885dd5553ee34_98601243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '997eec2f8cf632b980d4a5667a8545d84e33d8f5' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\rzpx\\templates\\users_list_3.php',
      1 => 1485167947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5885dd5553ee34_98601243 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
