<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:32:10
  from 'C:\xampp\htdocs\lessentielle\modules\tvcmscustomsetting\views\templates\admin\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352ad6aa1e9e5_04924559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b2df6fa27a72436cce1058c3e5524830be4e47b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lessentielle\\modules\\tvcmscustomsetting\\views\\templates\\admin\\index.tpl',
      1 => 1666002549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352ad6aa1e9e5_04924559 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tvadmincustom-setting"><div class="tvadmincustom-setting-all-tabs"><?php if ($_smarty_tpl->tpl_vars['show_fields']->value['form_1'] == true) {?><div tab-number='#fieldset_0' class="tvadmincustom-setting-tab <?php if ($_smarty_tpl->tpl_vars['tab_number']->value == '#fieldset_0') {?>tvadmincustom-setting-active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme Configuration','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['form_2'] == true) {?><div tab-number='#fieldset_1_1' class="tvadmincustom-setting-tab <?php if ($_smarty_tpl->tpl_vars['tab_number']->value == '#fieldset_1_1') {?>tvadmincustom-setting-active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'App Link','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['form_3'] == true) {?><div tab-number='#fieldset_2_2' class="tvadmincustom-setting-tab <?php if ($_smarty_tpl->tpl_vars['tab_number']->value == '#fieldset_2_2') {?>tvadmincustom-setting-active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom Titles','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['form_4'] == true) {?><div tab-number='#fieldset_3_3' class="tvadmincustom-setting-tab <?php if ($_smarty_tpl->tpl_vars['tab_number']->value == '#fieldset_3_3') {?>tvadmincustom-setting-active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layout Configuration','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['form_5'] == true) {?><div tab-number='#fieldset_4_4' class="tvadmincustom-setting-tab <?php if ($_smarty_tpl->tpl_vars['tab_number']->value == '#fieldset_4_4') {?>tvadmincustom-setting-active<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import Sample Data','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</div><?php }?></div></div><?php }
}
