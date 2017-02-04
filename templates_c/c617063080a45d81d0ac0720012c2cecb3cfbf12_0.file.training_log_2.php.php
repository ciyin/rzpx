<?php
/* Smarty version 3.1.31, created on 2017-02-04 10:20:04
  from "C:\phpstudy\WWW\rzpx\templates\training_log_2.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5895aad49bf1e8_16643627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c617063080a45d81d0ac0720012c2cecb3cfbf12' => 
    array (
      0 => 'C:\\phpstudy\\WWW\\rzpx\\templates\\training_log_2.php',
      1 => 1486092740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5895aad49bf1e8_16643627 (Smarty_Internal_Template $_smarty_tpl) {
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
