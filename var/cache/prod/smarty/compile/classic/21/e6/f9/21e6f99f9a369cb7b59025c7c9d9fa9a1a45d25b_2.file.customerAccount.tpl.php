<?php
/* Smarty version 3.1.39, created on 2022-01-13 12:34:30
  from 'C:\xampp\htdocs\tendatgn\modules\psgdpr\views\templates\front\customerAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e00e46778061_27664141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21e6f99f9a369cb7b59025c7c9d9fa9a1a45d25b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tendatgn\\modules\\psgdpr\\views\\templates\\front\\customerAccount.tpl',
      1 => 1641979884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e00e46778061_27664141 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="psgdpr-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['front_controller']->value, ENT_QUOTES, 'UTF-8');?>
">
    <span class="link-item">
        <i class="material-icons">account_box</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GDPR - Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

    </span>
</a>
<?php }
}
