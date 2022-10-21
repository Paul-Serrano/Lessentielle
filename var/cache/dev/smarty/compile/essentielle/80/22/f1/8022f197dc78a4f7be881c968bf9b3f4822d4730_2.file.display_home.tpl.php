<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:32:12
  from 'C:\xampp\htdocs\lessentielle\modules\tvcmsmultibanner1\views\templates\front\display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352ad6cd62e87_93624747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8022f197dc78a4f7be881c968bf9b3f4822d4730' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lessentielle\\modules\\tvcmsmultibanner1\\views\\templates\\front\\display_home.tpl',
      1 => 1666002549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352ad6cd62e87_93624747 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('num_of_rec', '1');
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_IMAGE_NAME', ('TVCMSMULTIBANNER1_IMAGE_NAME_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('num_of_rec', '2');
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_IMAGE_NAME', ('TVCMSMULTIBANNER1_IMAGE_NAME_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('num_of_rec', '3');
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER3_IMAGE_NAME', ('TVCMSMULTIBANNER1_IMAGE_NAME_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
if (!empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_IMAGE_NAME']->value][$_smarty_tpl->tpl_vars['language_id']->value]) || !empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_NAME']->value][$_smarty_tpl->tpl_vars['language_id']->value]) || !empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER3_IMAGE_NAME']->value][$_smarty_tpl->tpl_vars['language_id']->value])) {?><div class="tvcmsmultibanners container-fluid"><div class="container"><div class="tvmultibanner row"><?php $_smarty_tpl->_assignInScope('num_of_rec', '1');
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_IMAGE_NAME', ('TVCMSMULTIBANNER1_IMAGE_NAME_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_CAPTION', ('TVCMSMULTIBANNER1_CAPTION_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_IMAGE_WIDTH', ('TVCMSMULTIBANNER1_IMAGE_WIDTH_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_IMAGE_HEIGHT', ('TVCMSMULTIBANNER1_IMAGE_HEIGHT_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_CAPTION_SIDE', ('TVCMSMULTIBANNER1_CAPTION_SIDE_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_LINK', ('TVCMSMULTIBANNER1_LINK_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_IMAGE_NAME']->value]) {?><div class="tvmultibanner1-wrapper col-sm-4 tvmultibanner-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['num_of_rec']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><a class="tvbanner-hover-wrapper" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_LINK']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Multibanner','mod'=>'tvcmsmultibanner1'),$_smarty_tpl ) );
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['num_of_rec']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
views/img/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_IMAGE_NAME']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"  class="img-responsive tv-img-responsive" alt="" width="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_IMAGE_WIDTH']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_IMAGE_HEIGHT']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" loading="lazy"/></a><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_CAPTION_SIDE']->value][$_smarty_tpl->tpl_vars['language_id']->value] != 'none') {?><div class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_CAPTION_SIDE']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 tvmultibanner-content"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_CAPTION']->value][$_smarty_tpl->tpl_vars['language_id']->value];?>
</div><?php }?></div><?php }
$_smarty_tpl->_assignInScope('num_of_rec', '2');
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_IMAGE_NAME', ('TVCMSMULTIBANNER1_IMAGE_NAME_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_CAPTION', ('TVCMSMULTIBANNER1_CAPTION_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_IMAGE_WIDTH', ('TVCMSMULTIBANNER1_IMAGE_WIDTH_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_IMAGE_HEIGHT', ('TVCMSMULTIBANNER1_IMAGE_HEIGHT_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_CAPTION_SIDE', ('TVCMSMULTIBANNER1_CAPTION_SIDE_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_LINK', ('TVCMSMULTIBANNER1_LINK_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_IMAGE_NAME']->value]) {?><div class="tvmultibanner2-wrapper col-sm-4 tvmultibanner-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['num_of_rec']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><a class='tvbanner-hover-wrapper' href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_LINK']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Multibanner','mod'=>'tvcmsmultibanner1'),$_smarty_tpl ) );
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['num_of_rec']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
views/img/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_IMAGE_NAME']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img-responsive tv-img-responsive" alt="" width="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_IMAGE_WIDTH']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_IMAGE_HEIGHT']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" loading="lazy"/></a><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_CAPTION_SIDE']->value][$_smarty_tpl->tpl_vars['language_id']->value] != 'none') {?><div class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_CAPTION_SIDE']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 tvmultibanner-content"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_CAPTION']->value][$_smarty_tpl->tpl_vars['language_id']->value];?>
</div><?php }?></div><?php }
$_smarty_tpl->_assignInScope('num_of_rec', '3');
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_IMAGE_NAME', ('TVCMSMULTIBANNER1_IMAGE_NAME_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_CAPTION', ('TVCMSMULTIBANNER1_CAPTION_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_IMAGE_WIDTH', ('TVCMSMULTIBANNER1_IMAGE_WIDTH_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_IMAGE_HEIGHT', ('TVCMSMULTIBANNER1_IMAGE_HEIGHT_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_CAPTION_SIDE', ('TVCMSMULTIBANNER1_CAPTION_SIDE_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER1_LINK', ('TVCMSMULTIBANNER1_LINK_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_IMAGE_NAME']->value]) {?><div class="tvmultibanner3-wrapper col-sm-4 tvmultibanner-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['num_of_rec']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><a class="tvbanner-hover-wrapper" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_LINK']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Multibanner','mod'=>'tvcmsmultibanner1'),$_smarty_tpl ) );
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['num_of_rec']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
views/img/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_IMAGE_NAME']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"  class="img-responsive tv-img-responsive" alt="" width="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_IMAGE_WIDTH']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_IMAGE_HEIGHT']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" loading="lazy"/></a><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_CAPTION_SIDE']->value][$_smarty_tpl->tpl_vars['language_id']->value] != 'none') {?><div class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_CAPTION_SIDE']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 tvmultibanner-content"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER1_CAPTION']->value][$_smarty_tpl->tpl_vars['language_id']->value];?>
</div><?php }?></div><?php }?></div></div></div><?php }
}
}
