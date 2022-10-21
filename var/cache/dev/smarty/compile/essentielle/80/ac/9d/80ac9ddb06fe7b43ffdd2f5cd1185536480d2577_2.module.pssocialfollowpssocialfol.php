<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:32:13
  from 'module:pssocialfollowpssocialfol' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352ad6d116e06_41672940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:pssocialfollowpssocialfol',
      1 => 1666002554,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352ad6d116e06_41672940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin C:\xampp\htdocs\lessentielle/themes/essentielle/modules/ps_socialfollow/ps_socialfollow.tpl --><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3019125336352ad6d104c75_57100180', 'block_social');
?>
<!-- end C:\xampp\htdocs\lessentielle/themes/essentielle/modules/ps_socialfollow/ps_socialfollow.tpl --><?php }
/* {block 'block_social'} */
class Block_3019125336352ad6d104c75_57100180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_social' => 
  array (
    0 => 'Block_3019125336352ad6d104c75_57100180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="block-social tvcmsfooter-social-icon col-xl-4 col-md-12 col-sm-12"><ul id="footer_sub_menu_social_icon" class="tvfooter-social-icon-wrapper"><?php if (!empty(Configuration::get('BLOCKSOCIAL_FACEBOOK',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><li class="facebook"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_FACEBOOK'), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><span class="facebook-icon"></span></a></li><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_TWITTER',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><li class="twitter"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_TWITTER'), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Twitter','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><span class="twitter-icon"></span></a></li><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_YOUTUBE',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><li class="youtube"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_YOUTUBE'), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Youtube','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><span class="youtube-icon"></span></a></li><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_GOOGLE_PLUS',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><li class="googleplus"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_GOOGLE_PLUS'), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google plus','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><span class="googleplus-icon"></span></a></li><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_PINTEREST',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><li class="pinterest"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_PINTEREST'), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pinterest','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><span class="pinterest-icon"></span></a></li><?php }?></ul></div><?php
}
}
/* {/block 'block_social'} */
}
