<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:32:12
  from 'C:\xampp\htdocs\lessentielle\themes\essentielle\templates\_partials\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352ad6cd91024_65575189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a956b7b426b138970f309cb33f281fcb92a418ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lessentielle\\themes\\essentielle\\templates\\_partials\\breadcrumb.tpl',
      1 => 1666002554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352ad6cd91024_65575189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb"><ol itemscope itemtype="http://schema.org/BreadcrumbList"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14625862246352ad6cd7e7f8_84415136', 'breadcrumb');
?>
</ol></nav><?php }
/* {block 'breadcrumb_item'} */
class Block_20386158506352ad6cd7f536_47692932 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span></a><meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"></li><?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_14625862246352ad6cd7e7f8_84415136 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_14625862246352ad6cd7e7f8_84415136',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_20386158506352ad6cd7f536_47692932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20386158506352ad6cd7f536_47692932', 'breadcrumb_item', $this->tplIndex);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-tvcmsattrsearch-productsearch') {?><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Search','d'=>'Shop.Theme.Action'),$_smarty_tpl ) );?>
</span></a><meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"></li><?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-tvcmswishlist-mywishlist') {?><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Wishlist','d'=>'Shop.Theme.Action'),$_smarty_tpl ) );?>
</span></a><meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"></li><?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-tvcmsproductcompare-productcomparelist') {?><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Compare','d'=>'Shop.Theme.Action'),$_smarty_tpl ) );?>
</span></a><meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"></li><?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'cart') {?><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
</span></a><meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"></li><?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'my-account') {?><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Action'),$_smarty_tpl ) );?>
</span></a><meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"></li><?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'identity') {?><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Identity','d'=>'Shop.Theme.Action'),$_smarty_tpl ) );?>
</span></a><meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"></li><?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'addresses') {?><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address','d'=>'Shop.Theme.Action'),$_smarty_tpl ) );?>
</span></a><meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"></li><?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'history') {?><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history','d'=>'Shop.Theme.Action'),$_smarty_tpl ) );?>
</span></a><meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"></li><?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'order-slip') {?><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order slip','d'=>'Shop.Theme.Action'),$_smarty_tpl ) );?>
</span></a><meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"></li><?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'authentication') {?><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Action'),$_smarty_tpl ) );?>
</span></a><meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"></li><?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'order-confirmation') {?><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Order Is Confirmed','d'=>'Shop.Theme.Action'),$_smarty_tpl ) );?>
</span></a><meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"></li><?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'stores') {?><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stores','d'=>'Shop.Theme.Action'),$_smarty_tpl ) );?>
</span></a><meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"></li><?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'new-products') {?><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span itemprop="name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','d'=>'Shop.Theme.Action'),$_smarty_tpl ) );?>
</span></a><meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"></li><?php }
}
}
/* {/block 'breadcrumb'} */
}
