<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:32:19
  from 'C:\xampp\htdocs\lessentielle\modules\tvcmswishlist\views\templates\front\tvcmswishlist-extra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352ad731162a7_99854310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '481d0abbf0432455971e07f86b0b11d1ebc720f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lessentielle\\modules\\tvcmswishlist\\views\\templates\\front\\tvcmswishlist-extra.tpl',
      1 => 1666002551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352ad731162a7_99854310 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tvproduct-wishlist"><input type="hidden" class="wishlist_prod_id" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php if ((isset($_smarty_tpl->tpl_vars['wishlists']->value)) && !empty($_smarty_tpl->tpl_vars['wishlists']->value) && count($_smarty_tpl->tpl_vars['wishlists']->value) > 1) {?><div class="buttons_bottom_block no-print panel-product-line panel-product-actions" data-toggle="tvtooltip" data-placement="top" data-html="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add To Wishlist','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
"><div id="wishlist_button"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlists']->value, 'wishlist');
$_smarty_tpl->tpl_vars['wishlist']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->do_else = false;
if ($_smarty_tpl->tpl_vars['wishlist']->value['default'] == '1') {?><a class="wishlist_button_extra" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( intval($_smarty_tpl->tpl_vars['id_product']->value),"htmlall","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
', $('#idCombination').val(), 1, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
); return false;"><div class="panel-product-line panel-product-actions tvproduct-wishlist-icon"><i class='material-icons'>&#xe87e;</i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add To Wishlist','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
</span></div></a><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php } else { ?><a href="#" class="tvquick-view-popup-wishlist wishlist_button" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( intval($_smarty_tpl->tpl_vars['id_product']->value),"htmlall","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
', $('#idCombination').val(), 1, 1); return false;" rel="nofollow" data-toggle="tvtooltip" data-placement="top" data-html="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add To Wishlist','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
"><div class="panel-product-line panel-product-actions tvproduct-wishlist-icon"><i class='material-icons'>&#xe87e;</i></div></a><?php }?></div><?php }
}
