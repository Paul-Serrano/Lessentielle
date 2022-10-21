<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:32:12
  from 'C:\xampp\htdocs\lessentielle\modules\tvcmsproductcompare\views\templates\front\display_nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352ad6cba3850_74522758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9069aa38e215f89a6862caa707edb0ee7b8e6691' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lessentielle\\modules\\tvcmsproductcompare\\views\\templates\\front\\display_nav.tpl',
      1 => 1666002550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352ad6cba3850_74522758 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tvcmsdesktop-view-compare"><a class="link_wishlist tvdesktop-view-compare tvcmscount-compare-product" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tvcmsproductcompare','productcomparelist'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Compare','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
"><div class="tvdesktop-compare-icon"><i class='material-icons'>&#xe043;</i><span class="count-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tot_comp_prod']->value, ENT_QUOTES, 'UTF-8');?>
</span></div><div class="tvdesktop-view-compare-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
</div></a></div><?php }
}
