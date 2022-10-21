<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:39:17
  from 'C:\xampp\htdocs\lessentielle\modules\tvcmsleftsideofferbanner\views\templates\front\display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352af152396d2_71732198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '161023756887cf6d3691a961f7cb11b192166a61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lessentielle\\modules\\tvcmsleftsideofferbanner\\views\\templates\\front\\display_home.tpl',
      1 => 1666002549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352af152396d2_71732198 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['AllPageShow']->value == 1) {
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_IMAGE_NAME'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
if (!empty($_prefixVariable1)) {?><div class="tvcmsleftsideofferbanners-one"><div class="tvbanner-wrapper tvone-banner-wrapper-info tvbanner1"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_LINK'], ENT_QUOTES, 'UTF-8');?>
" class="tvbanner-hover-wrapper" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value], ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_IMAGE_NAME'], ENT_QUOTES, 'UTF-8');?>
" class="tvimage-lazy img-responsive tv-img-responsive" alt="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Slider Offer Banner','mod'=>'tvcmsleftsideofferbanner'),$_smarty_tpl ) );
}?>" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_IMAGE_HEIGHT'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_IMAGE_WIDTH'], ENT_QUOTES, 'UTF-8');?>
" /></a><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value]) && $_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION_SIDE'] != 'none') {?><div class="tvcmsleftsideofferbanners-content <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION_SIDE'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value], ENT_QUOTES, 'UTF-8');?>
</div><?php }?></div></div><?php }
} elseif ($_smarty_tpl->tpl_vars['AllPageShow']->value == 0 && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_IMAGE_NAME'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
if (!empty($_prefixVariable2)) {?><div class="tvcmsleftsideofferbanners-one"><div class="tvbanner-wrapper tvone-banner-wrapper-info tvbanner1"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_LINK'], ENT_QUOTES, 'UTF-8');?>
" class="tvbanner-hover-wrapper" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value], ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_IMAGE_NAME'], ENT_QUOTES, 'UTF-8');?>
" class="tvimage-lazy tv-img-responsive img-responsive" alt="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Slider Offer Banner','mod'=>'tvcmsleftsideofferbanner'),$_smarty_tpl ) );
}?>" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_IMAGE_HEIGHT'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_IMAGE_WIDTH'], ENT_QUOTES, 'UTF-8');?>
" /></a><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value]) && $_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION_SIDE'] != 'none') {?><div class="tvcmsleftsideofferbanners-content <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION_SIDE'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value], ENT_QUOTES, 'UTF-8');?>
</div><?php }?></div></div><?php }
}
}
}
