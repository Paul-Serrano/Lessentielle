<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:32:19
  from 'C:\xampp\htdocs\lessentielle\themes\essentielle\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352ad73028a24_30639357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0998b652efc6a289cd4ed0cde39bf3d7971c511b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lessentielle\\themes\\essentielle\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1666002554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-grid-view.tpl' => 1,
    'file:catalog/_partials/miniatures/product-grid-view2.tpl' => 1,
    'file:catalog/_partials/miniatures/product-list-view.tpl' => 1,
    'file:catalog/_partials/miniatures/product-catelog-view.tpl' => 1,
  ),
),false)) {
function content_6352ad73028a24_30639357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('col', '');
if (empty($_smarty_tpl->tpl_vars['tv_product_type']->value)) {
$_smarty_tpl->_assignInScope('col', 'col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 tv-grid-list-wrapper-info-box');
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20965542516352ad73023ff6_45771368', 'product_miniature_item');
}
/* {block 'product_miniature_item'} */
class Block_20965542516352ad73023ff6_45771368 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_20965542516352ad73023ff6_45771368',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="<?php if (!(isset($_smarty_tpl->tpl_vars['tab_slider']->value))) {?>item<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['double_row']->value) && $_smarty_tpl->tpl_vars['double_row']->value == true) {?>tvtab-first-product<?php }?> product-miniature js-product-miniature <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value, ENT_QUOTES, 'UTF-8');?>
 tvall-product-wrapper-info-box" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product"><div class="thumbnail-container"><?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-grid-view.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class_name'=>'grid','product'=>$_smarty_tpl->tpl_vars['product']->value,'image_size'=>'home_default'), 0, false);
if (empty($_smarty_tpl->tpl_vars['tv_product_type']->value)) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-grid-view2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class_name'=>'grid-2','product'=>$_smarty_tpl->tpl_vars['product']->value,'image_size'=>'medium_default'), 0, false);
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-list-view.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'image_size'=>'home_default'), 0, false);
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-catelog-view.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'image_size'=>'home_default'), 0, false);
}?></div></article><?php
}
}
/* {/block 'product_miniature_item'} */
}
