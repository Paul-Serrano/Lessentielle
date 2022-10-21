<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:39:16
  from 'C:\xampp\htdocs\lessentielle\themes\essentielle\templates\_partials\tvcms-page-loader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352af14ea67f9_26569792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c483275e3acfb2863a3be84fa28f65690bb39e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lessentielle\\themes\\essentielle\\templates\\_partials\\tvcms-page-loader.tpl',
      1 => 1666002555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352af14ea67f9_26569792 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (Configuration::get('TVCMSCUSTOMSETTING_PAGE_LOADER')) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5118962456352af14ea43c2_05455418', 'page_loading');
}
}
/* {block 'page_loading'} */
class Block_5118962456352af14ea43c2_05455418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_loading' => 
  array (
    0 => 'Block_5118962456352af14ea43c2_05455418',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvcms-loading-overlay"><div class="tvcms-loading-inner"><img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"  height="51" width="205"/><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
themevolty/tv_loading.gif" alt="" height="101" width="114"/></div></div><?php
}
}
/* {/block 'page_loading'} */
}
