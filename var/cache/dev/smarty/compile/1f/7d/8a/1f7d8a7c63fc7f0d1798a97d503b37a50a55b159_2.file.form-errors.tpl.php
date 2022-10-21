<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:43:18
  from 'C:\xampp\htdocs\lessentielle\themes\essentielle\templates\_partials\form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352b006689c52_22102723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f7d8a7c63fc7f0d1798a97d503b37a50a55b159' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lessentielle\\themes\\essentielle\\templates\\_partials\\form-errors.tpl',
      1 => 1666002555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352b006689c52_22102723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?><div class="help-block"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11882994396352b00667f396_05100005', 'form_errors');
?>
</div><?php }
}
/* {block 'form_errors'} */
class Block_11882994396352b00667f396_05100005 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_11882994396352b00667f396_05100005',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?><li class="alert alert-danger"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php
}
}
/* {/block 'form_errors'} */
}
