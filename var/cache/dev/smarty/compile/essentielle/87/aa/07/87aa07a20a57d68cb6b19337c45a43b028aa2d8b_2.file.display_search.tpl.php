<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:32:12
  from 'C:\xampp\htdocs\lessentielle\modules\tvcmssearch\views\templates\front\display_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352ad6cb3c3c0_59597549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87aa07a20a57d68cb6b19337c45a43b028aa2d8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lessentielle\\modules\\tvcmssearch\\views\\templates\\front\\display_search.tpl',
      1 => 1666002550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352ad6cb3c3c0_59597549 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="search-widget tvcmsheader-search" data-search-controller-url="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_controller_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><div class="tvsearch-top-wrapper"><div class="tvheader-sarch-display"><div class="tvheader-search-display-icon"><div class="tvsearch-open"><i class="material-icons shopping-cart">&#xe8b6;</i></div><div class="tvsearch-close"><i class="material-icons shopping-cart">&#xe5cd;</i></div></div></div><div class="tvsearch-header-display-wrappper tvsearch-header-display-full"><form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_controller_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="controller" value="search" /><div class="tvheader-top-search"><div class="tvheader-top-search-wrapper-info-box"><input type="text" name="s" class='tvcmssearch-words' placeholder="<?php if (Configuration::get('TVCMSCUSTOMSETTING_SEARCH_PLACEHOLDER_TEXT',$_smarty_tpl->tpl_vars['language']->value['id'])) {
echo htmlspecialchars(Configuration::get('TVCMSCUSTOMSETTING_SEARCH_PLACEHOLDER_TEXT',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');
}?>" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'tvcmssearch'),$_smarty_tpl ) );?>
" autocomplete="off" /></div></div><div class="tvheader-top-search-wrapper"><button type="submit" class="tvheader-search-btn" aria-label="Search"><i class='material-icons'>&#xe8b6;</i></button></div></form><div class='tvsearch-result'></div></div></div></div><?php }
}
