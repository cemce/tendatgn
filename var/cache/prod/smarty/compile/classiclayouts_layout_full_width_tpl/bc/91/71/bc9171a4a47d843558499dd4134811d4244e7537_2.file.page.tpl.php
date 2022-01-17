<?php
/* Smarty version 3.1.39, created on 2022-01-12 12:00:46
  from 'C:\xampp\htdocs\tendatgn\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61deb4de91e5e9_61384186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc9171a4a47d843558499dd4134811d4244e7537' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tendatgn\\themes\\classic\\templates\\page.tpl',
      1 => 1641978812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61deb4de91e5e9_61384186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204052149661deb4de91a0a6_15719585', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_53291827661deb4de91a844_67610427 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_135632792861deb4de91a464_75763100 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53291827661deb4de91a844_67610427', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_132862408561deb4de91cfa9_85176761 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_146501012261deb4de91d403_75730033 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_88117466661deb4de91cc98_30574973 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132862408561deb4de91cfa9_85176761', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146501012261deb4de91d403_75730033', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_37838595461deb4de91dd53_07882432 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_59653877561deb4de91da92_99827365 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37838595461deb4de91dd53_07882432', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_204052149661deb4de91a0a6_15719585 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_204052149661deb4de91a0a6_15719585',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_135632792861deb4de91a464_75763100',
  ),
  'page_title' => 
  array (
    0 => 'Block_53291827661deb4de91a844_67610427',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_88117466661deb4de91cc98_30574973',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_132862408561deb4de91cfa9_85176761',
  ),
  'page_content' => 
  array (
    0 => 'Block_146501012261deb4de91d403_75730033',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_59653877561deb4de91da92_99827365',
  ),
  'page_footer' => 
  array (
    0 => 'Block_37838595461deb4de91dd53_07882432',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135632792861deb4de91a464_75763100', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88117466661deb4de91cc98_30574973', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59653877561deb4de91da92_99827365', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
