<?php
/* Smarty version 3.1.39, created on 2022-01-12 12:02:21
  from 'C:\xampp\htdocs\tendatgn\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61deb53d9fc569_74307498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18a7898d259f82ef3021b47815f850a296df342b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tendatgn\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1641978812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61deb53d9fc569_74307498 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
