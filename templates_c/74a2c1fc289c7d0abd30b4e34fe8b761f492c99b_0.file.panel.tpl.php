<?php
/* Smarty version 3.1.31, created on 2017-04-07 07:46:41
  from "C:\wamp64\www\tpl-project\view\panel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58e743e13b0fc5_81440765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74a2c1fc289c7d0abd30b4e34fe8b761f492c99b' => 
    array (
      0 => 'C:\\wamp64\\www\\tpl-project\\view\\panel.tpl',
      1 => 1491518622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e743e13b0fc5_81440765 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-heading">Panel heading</div>


    <table class="table">
        <tr>
            <th>Firstname</th>
            <th>Age</th>
            <th>edit</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->age;?>
</td>
                <td><a href="controller/edit.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">edit</a></td>
            </tr>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </table>
</div><?php }
}
