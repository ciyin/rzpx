<?php
/* Smarty version 3.1.31, created on 2017-01-24 09:17:17
  from "C:\phpStudy\WWW\rzpx\templates\header.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58871b9d52d930_15945022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a89df508f4ac10dc3af637d607fce75fa49a8212' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\rzpx\\templates\\header.php',
      1 => 1485249425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58871b9d52d930_15945022 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <style>
        body{font-family: "Microsoft YaHei"}
    </style>
</head>
<body>
<!--header-->
<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-xs-10">
                <ul class="nav nav-pills" role="tablist">
                   <?php echo $_smarty_tpl->tpl_vars['tabs']->value;?>

<!--                    <li><a>用户列表</a></li>-->
<!--                    <li class="active"><a>培训内容</a></li>-->
<!--                    <li><a>培训记录</a></li>-->
                </ul>
            </div>
            <div class="col-lg-2 col-md-2 col-md-2">
                <div style="line-height: 40px">
                    <span>用户名：</span>
                    <span><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</span>
                    <span><a href="index.php?controller=login&action=logout">退出</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--container-->
<div class="container"><?php }
}
