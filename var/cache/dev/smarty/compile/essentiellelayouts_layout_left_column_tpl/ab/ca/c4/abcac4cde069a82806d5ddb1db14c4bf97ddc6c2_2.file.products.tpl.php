<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:39:17
  from 'C:\xampp\htdocs\lessentielle\themes\essentielle\templates\catalog\_partials\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352af1533f6f6_04861263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abcac4cde069a82806d5ddb1db14c4bf97ddc6c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lessentielle\\themes\\essentielle\\templates\\catalog\\_partials\\products.tpl',
      1 => 1666002554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_6352af1533f6f6_04861263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list" class="tvall-block-box-shadows"><div class="tvgrid-list-view-product"><div class="products"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13296380916352af1533d573_38037920', 'product_miniature');
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2691121976352af1533e437_65498336', 'pagination');
?>
</div><?php }
/* {block 'product_miniature'} */
class Block_13296380916352af1533d573_38037920 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_13296380916352af1533d573_38037920',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
}
}
/* {/block 'product_miniature'} */
/* {block 'pagination'} */
class Block_2691121976352af1533e437_65498336 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_2691121976352af1533e437_65498336',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
}
}
/* {/block 'pagination'} */
}
