<?php
/* Smarty version 3.1.31, created on 2017-01-24 08:50:04
  from "C:\phpStudy\WWW\rzpx\templates\users_list_2.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5887153ceb97c0_38444498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bb2c56be24b4f3d2f5171d0a008126ec1d6ec67' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\rzpx\\templates\\users_list_2.php',
      1 => 1485244663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5887153ceb97c0_38444498 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php }
}
