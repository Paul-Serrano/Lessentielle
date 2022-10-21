<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:43:18
  from 'module:thegiftcardviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352b0066b7939_84932220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f7fc09c8f5aff3e1dd8f171fab919974ef095b9' => 
    array (
      0 => 'module:thegiftcardviewstemplates',
      1 => 1666263313,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:thegiftcard/views/templates/front/giftcard.tpl' => 1,
  ),
),false)) {
function content_6352b0066b7939_84932220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin C:\xampp\htdocs\lessentielle/modules/thegiftcard/views/templates/front/layout.tpl -->


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2379367156352b0066b3bd6_41242980', 'page_content');
?>

<!-- end C:\xampp\htdocs\lessentielle/modules/thegiftcard/views/templates/front/layout.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content'} */
class Block_2379367156352b0066b3bd6_41242980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_2379367156352b0066b3bd6_41242980',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('module:thegiftcard/views/templates/front/giftcard.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'page_content'} */
}
