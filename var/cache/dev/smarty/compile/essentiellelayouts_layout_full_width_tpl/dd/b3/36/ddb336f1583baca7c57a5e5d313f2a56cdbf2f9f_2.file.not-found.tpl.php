<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:32:12
  from 'C:\xampp\htdocs\lessentielle\themes\essentielle\templates\errors\not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352ad6cdacfe9_82183857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddb336f1583baca7c57a5e5d313f2a56cdbf2f9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lessentielle\\themes\\essentielle\\templates\\errors\\not-found.tpl',
      1 => 1666002554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352ad6cdacfe9_82183857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13606082276352ad6cdaa528_88511288', 'page_content');
?>
</section><?php }
/* {block 'search'} */
class Block_3973557726352ad6cdab683_37186231 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_18815712936352ad6cdac2a2_83593835 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_13606082276352ad6cdaa528_88511288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_13606082276352ad6cdaa528_88511288',
  ),
  'search' => 
  array (
    0 => 'Block_3973557726352ad6cdab683_37186231',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_18815712936352ad6cdac2a2_83593835',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3973557726352ad6cdab683_37186231', 'search', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18815712936352ad6cdac2a2_83593835', 'hook_not_found', $this->tplIndex);
}
}
/* {/block 'page_content'} */
}
