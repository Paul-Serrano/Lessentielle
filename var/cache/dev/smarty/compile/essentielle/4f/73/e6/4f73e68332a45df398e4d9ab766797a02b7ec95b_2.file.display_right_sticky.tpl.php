<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:32:13
  from 'C:\xampp\htdocs\lessentielle\modules\tvcmsproductcompare\views\templates\front\display_right_sticky.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352ad6d0de810_25500718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f73e68332a45df398e4d9ab766797a02b7ec95b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lessentielle\\modules\\tvcmsproductcompare\\views\\templates\\front\\display_right_sticky.tpl',
      1 => 1666002550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352ad6d0de810_25500718 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvsticky-compare">
  	<a class="link_wishlist tvcmscount-compare-product" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tvcmsproductcompare','productcomparelist'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Compare','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
">
    	<i class='material-icons'>&#xE043;</i>
      	<div class="tvsticky-compare-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare ','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
(<span class="count-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tot_comp_prod']->value, ENT_QUOTES, 'UTF-8');?>
</span>)</div>
  	</a>
</div>
<?php }
}
