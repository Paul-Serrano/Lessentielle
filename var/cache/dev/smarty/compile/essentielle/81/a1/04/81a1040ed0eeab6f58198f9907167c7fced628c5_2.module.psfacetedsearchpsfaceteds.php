<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:39:17
  from 'module:psfacetedsearchpsfaceteds' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352af151bc6f8_50788919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:psfacetedsearchpsfaceteds',
      1 => 1666002554,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352af151bc6f8_50788919 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\lessentielle/themes/essentielle/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets']))) {?><div id="search_filters_wrapper"><div id="search_filter_controls" class="hidden-md-up hidden-sm-down"><button class="btn btn-secondary ok"><i class="material-icons rtl-no-flip">&#xE876;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button></div><?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>
</div><?php }?><!-- end C:\xampp\htdocs\lessentielle/themes/essentielle/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php }
}
