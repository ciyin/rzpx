<?php
/* Smarty version 3.1.31, created on 2017-02-04 10:17:14
  from "C:\phpstudy\WWW\rzpx\templates\training_projects_4.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5895aa2adb57b9_99890165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8512e50d704cc9bfee66c775a79ba5ae4eb11b23' => 
    array (
      0 => 'C:\\phpstudy\\WWW\\rzpx\\templates\\training_projects_4.php',
      1 => 1486092740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5895aa2adb57b9_99890165 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
<tr id="projects">
    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['role'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['project'];?>
</td>
    <td><a href="index.php?controller=showPage&action=showProjectDetails&role=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" target="_blank">查看</a></td>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
