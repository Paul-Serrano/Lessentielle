<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:39:16
  from 'C:\xampp\htdocs\lessentielle\themes\essentielle\templates\catalog\_partials\product-activation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352af14ec4d14_85801458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0de6a59bfb569303067217c641ce79ff7d02c8cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lessentielle\\themes\\essentielle\\templates\\catalog\\_partials\\product-activation.tpl',
      1 => 1666002554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352af14ec4d14_85801458 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?><div class="alert alert-warning row" role="alert"><div class="container"><div class="row"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['admin_notifications'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?><div class="col-sm-12"><i class="material-icons float-xs-left">&#xE001;</i><p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><?php }
}
}
