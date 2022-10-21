<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:32:18
  from 'C:\xampp\htdocs\lessentielle\themes\essentielle\templates\_partials\tvcms-main-title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352ad72f3f436_46085743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '603d2d91cceb23e9b5cc503da09168d1b2c29c17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lessentielle\\themes\\essentielle\\templates\\_partials\\tvcms-main-title.tpl',
      1 => 1666002555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352ad72f3f436_46085743 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_status']) {?><div class='tvcmsmain-title-wrapper clearfix'><div class="tvcms-main-title"><?php if ($_smarty_tpl->tpl_vars['main_heading']->value['main_sub_title']) {?><div class='tvmain-sub-title'><h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['short_desc'], ENT_QUOTES, 'UTF-8');?>
</h4></div><?php }
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_title']) {?><div class='tvmain-title'><h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['title'], ENT_QUOTES, 'UTF-8');?>
</h2></div><?php }
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_description']) {?><div class='tvmain-desc'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['desc'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?></div></div><?php }
}
}
