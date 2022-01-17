<?php
/* Smarty version 3.1.39, created on 2022-01-13 12:34:43
  from 'C:\xampp\htdocs\tendatgn\modules\psgdpr\views\templates\front\pdf\personalData.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e00e53c17733_22593039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '443edee74ccafd69f2321ed76abfa9db282acc42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tendatgn\\modules\\psgdpr\\views\\templates\\front\\pdf\\personalData.tpl',
      1 => 1641979884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e00e53c17733_22593039 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['style_tab']->value;?>



<table width="100%" id="body" border="0" cellpadding="0" cellspacing="0" style="margin:0;">
    <!-- general customer info -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['generalInfo_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="30">&nbsp;</td>
    </tr>

    <!-- addresses tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['addresses_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>

    <!-- order list tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['orders_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="20">&nbsp;</td>
    </tr>

    <!-- cart list tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['carts_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>

    <!-- messages tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['messages_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>

    <!-- connections tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['connections_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>


    <!-- modules tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['modules_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>
</table>
<?php }
}
