<?php
/* Smarty version 3.1.31, created on 2017-02-04 02:10:00
  from "C:\phpstudy\WWW\rzpx\templates\users_list_2.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_589537f8da4856_41746779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed25639d0360f99613f4d2975865cac07fe8f7da' => 
    array (
      0 => 'C:\\phpstudy\\WWW\\rzpx\\templates\\users_list_2.php',
      1 => 1486092740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589537f8da4856_41746779 (Smarty_Internal_Template $_smarty_tpl) {
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
