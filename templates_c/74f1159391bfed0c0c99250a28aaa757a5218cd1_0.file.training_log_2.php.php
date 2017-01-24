<?php
/* Smarty version 3.1.31, created on 2017-01-24 07:44:02
  from "C:\phpStudy\WWW\rzpx\templates\training_log_2.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_588705c21f6a67_14540688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74f1159391bfed0c0c99250a28aaa757a5218cd1' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\rzpx\\templates\\training_log_2.php',
      1 => 1485237919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588705c21f6a67_14540688 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logs']->value, 'log');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['log']->value['name'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['log']->value['role'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['log']->value['city'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['log']->value['video'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['log']->value['watching_time'];?>
</td>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
