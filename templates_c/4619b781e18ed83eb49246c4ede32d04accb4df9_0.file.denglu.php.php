<?php
/* Smarty version 3.1.31, created on 2017-02-04 02:09:51
  from "C:\phpstudy\WWW\rzpx\templates\denglu.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_589537ef881c99_66242103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4619b781e18ed83eb49246c4ede32d04accb4df9' => 
    array (
      0 => 'C:\\phpstudy\\WWW\\rzpx\\templates\\denglu.php',
      1 => 1486092740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589537ef881c99_66242103 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <style>
        body{font-family: "Microsoft YaHei";padding-top: 10%;}
        h2{margin: 0;line-height: 60px;color: white}
        table{width: 320px}
        tr{height: 40px;border: solid 1px lightgrey}
        input{height: 40px;width: 320px}
        button{height: 25px;width: 50px;font-family: "Microsoft YaHei";}
        #logo{height:60px;width: 330px;text-align: center}
        #btn{text-align: center;}
        #center{width: 330px; background-color: rgb(66,138,201);margin: 0 auto;border-radius: 5px;}
    </style>
</head>
<body>
    <div id="center">
        <div id="logo">
            <h2>沃邦系统操作培训</h2>
        </div>
        <div id="login">
            <form id="login_form" action="index.php" method="post">
                <table>
                    <tr><td><input type="text" title="" placeholder="请输入姓名" name="username"></td></tr>
                    <tr><td><input type="password" title="" placeholder="请输入授权码" name="password"></td></tr>
                    <tr><td id="btn"><button type="submit" id="login_btn">登录</button></td></tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html><?php }
}
