<?php
/* Smarty version 3.1.39, created on 2022-01-13 12:34:43
  from 'C:\xampp\htdocs\tendatgn\modules\psgdpr\views\templates\front\pdf\personalData.modules-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e00e53b1b742_60674271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9275af4893ff408944046e15e1e324ffea04b866' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tendatgn\\modules\\psgdpr\\views\\templates\\front\\pdf\\personalData.modules-tab.tpl',
      1 => 1641979884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e00e53b1b742_60674271 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module', false, 'key');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 : <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</h2>
<br>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module']->value, 'table');
$_smarty_tpl->tpl_vars['table']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['table']->value) {
$_smarty_tpl->tpl_vars['table']->do_else = false;
?>
<table id="summary-tab" width="100%">
    <tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value, 'value', false, 'index');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
        <th class="header" valign="middle"><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</th>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tr>

    <tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value, 'value', false, 'index');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
        <td class="center white"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'html','UTF-8' ));?>
</td>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tr>
</table>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
