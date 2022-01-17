<?php
/* Smarty version 3.1.39, created on 2022-01-12 12:00:46
  from 'C:\xampp\htdocs\tendatgn\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61deb4debe3e81_61262644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5901949d2cdb135105a5128a1034274ab5f475e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tendatgn\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1641978812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61deb4debe3e81_61262644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\tendatgn\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\a5\\90\\19\\a5901949d2cdb135105a5128a1034274ab5f475e_2.file.helpers.tpl.php',
    'uid' => 'a5901949d2cdb135105a5128a1034274ab5f475e',
    'call_name' => 'smarty_template_function_renderLogo_37106615061deb4deb90c29_98537201',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_37106615061deb4deb90c29_98537201 */
if (!function_exists('smarty_template_function_renderLogo_37106615061deb4deb90c29_98537201')) {
function smarty_template_function_renderLogo_37106615061deb4deb90c29_98537201(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      loading="lazy"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_37106615061deb4deb90c29_98537201 */
}
