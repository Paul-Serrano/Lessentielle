<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:49:52
  from 'module:psbannerpsbanner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352b19076df97_84034866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64034093fbda864710a2c0f526b37f921e53ee39' => 
    array (
      0 => 'module:psbannerpsbanner.tpl',
      1 => 1666363789,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352b19076df97_84034866 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\lessentielle/themes/essentielle/modules/ps_banner/ps_banner.tpl --><div class="banner"><?php if ((isset($_smarty_tpl->tpl_vars['banner_img']->value))) {?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid"><div class="banner-content"><h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
</h1><hr><div class="banner-txt"><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_text']->value, ENT_QUOTES, 'UTF-8');?>
</p></div><button class="tvall-inner-btn"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8');?>
"><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_btn_text']->value, ENT_QUOTES, 'UTF-8');?>
</p></a></button></div><?php } else { ?><h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
</h1><div class="banner-content"><button class="tvall-inner-btn"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8');?>
"><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_btn_text']->value, ENT_QUOTES, 'UTF-8');?>
</p></a></button><?php }?></div></div><!-- end C:\xampp\htdocs\lessentielle/themes/essentielle/modules/ps_banner/ps_banner.tpl --><?php }
}
