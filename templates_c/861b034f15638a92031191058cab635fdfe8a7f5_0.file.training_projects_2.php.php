<?php
/* Smarty version 3.1.31, created on 2017-01-24 03:00:32
  from "C:\phpStudy\WWW\rzpx\templates\training_projects_2.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5886c350c51804_72893360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '861b034f15638a92031191058cab635fdfe8a7f5' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\rzpx\\templates\\training_projects_2.php',
      1 => 1485226474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5886c350c51804_72893360 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr id="projects">
    <td>1</td>
    <td><?php echo $_smarty_tpl->tpl_vars['result']->value['role'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['result']->value['project'];?>
</td>
    <td><a href="index.php?controller=showPage&action=showProjectDetails" target="_blank">查看</a></td>
</tr><?php }
}
