<?php
/* Smarty version 3.1.31, created on 2017-01-24 05:10:30
  from "C:\phpStudy\WWW\rzpx\templates\training_projects_4.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5886e1c6d32413_10143803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed35c1f81025d07a090f65e722770947738cd865' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\rzpx\\templates\\training_projects_4.php',
      1 => 1485234616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5886e1c6d32413_10143803 (Smarty_Internal_Template $_smarty_tpl) {
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
