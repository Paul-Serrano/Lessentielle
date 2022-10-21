<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:32:10
  from 'C:\xampp\htdocs\lessentielle\modules\tvcmscustomsetting\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352ad6aad0176_61876236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '694d3b21ad84f50136dd34bf8e42b3abf081a4c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lessentielle\\modules\\tvcmscustomsetting\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1666002549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352ad6aad0176_61876236 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15943390166352ad6aa793e8_85729044', "input");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_15943390166352ad6aa793e8_85729044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_15943390166352ad6aa793e8_85729044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tvcmsInstallDataForm') {?><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This action will remove all the Themevolty modules data and add the new settings like the demo page.','mod'=>"tvcmscustomsetting"),$_smarty_tpl ) );?>
<br/><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Please make sure you have a database backup.",'mod'=>"tvcmscustomsetting"),$_smarty_tpl ) );?>
</p><input type="checkbox" id="tvcmsInstallDataForm" name="tvcmsInstallDataForm"><label for="tvcmsInstallDataForm">Overwrite the Themevolty module's data.</label><input type="hidden" name="tvcmscustom_setting_tab_number" id='tvcmscustom-setting-tab-number' value="<?php echo $_smarty_tpl->tpl_vars['tab_number']->value;?>
"><?php }
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file_upload') {?><div class="col-lg-9"><div class="form-group"><div class="col-lg-9"><div class="dummyfile input-group"><input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
" type="file" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
" class="hide-file-upload" /><span class="input-group-addon"><i class="icon-file"></i></span><input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
-name" type="text" class="disabled" name="filename" readonly /><span class="input-group-btn"><button id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default"><i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</button></span></div></div></div><?php $_smarty_tpl->_assignInScope('width', '250');
$_smarty_tpl->_assignInScope('height', '275');?><div class="form-group"><div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
-images-thumbnails" class="col-lg-12"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'htmlall','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'htmlall','UTF-8' ));?>
" class="img-thumbnail" /><p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please Select Image.','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
 (Size:- <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['width']->value,'htmlall','UTF-8' ));?>
 X <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['height']->value,'htmlall','UTF-8' ));?>
 )</p></div></div><?php echo '<script'; ?>
>$(document).ready(function(){$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
-selectbutton').click(function(e){$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
').trigger('click');});$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
-name').click(function(e){$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
').trigger('click');});$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
').change(function(e){var val = $(this).val();var file = val.split(/[\\/]/);$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
-name').val(file[file.length-1]);});});<?php echo '</script'; ?>
></div><?php }
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'footer_img') {?><div class="col-lg-9"><div class="form-group"><div class="col-lg-9"><div class="dummyfile input-group"><input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
" type="file" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
" class="hide-file-upload" /><span class="input-group-addon"><i class="icon-file"></i></span><input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
-name" type="text" class="disabled" name="filename" readonly /><span class="input-group-btn"><button id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default"><i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</button></span></div></div></div><?php $_smarty_tpl->_assignInScope('width', '1915');
$_smarty_tpl->_assignInScope('height', '550');?><div class="form-group"><div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
-images-thumbnails" class="col-lg-12"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'htmlall','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'htmlall','UTF-8' ));?>
" class="img-thumbnail" /><p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select image.','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
 (Size:- <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['width']->value,'htmlall','UTF-8' ));?>
 X <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['height']->value,'htmlall','UTF-8' ));?>
 )</p></div></div><?php echo '<script'; ?>
>$(document).ready(function(){$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
-selectbutton').click(function(e){$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
').trigger('click');});$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
-name').click(function(e){$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
').trigger('click');});$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
').change(function(e){var val = $(this).val();var file = val.split(/[\\/]/);$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
-name').val(file[file.length-1]);});});<?php echo '</script'; ?>
></div><?php }
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file_upload_2') {?><div class="col-lg-9"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?><div class="translatable-field lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>><?php }?><div class="form-group"><div class="col-lg-9"><div class="dummyfile input-group"><input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" type="file" name="tvcmscustomsetting_left_image_name_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" class="hide-file-upload" /><span class="input-group-addon"><i class="icon-file"></i></span><input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
-name" type="text" class="disabled" name="filename" readonly /><span class="input-group-btn"><button id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default"><i class="icon-folder-open"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</button></span></div></div><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?><div class="col-lg-3"><button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'htmlall','UTF-8' ));?>
<span class="caret"></span></button><ul class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?><li><a href="javascript:hideOtherLanguage(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'],'htmlall','UTF-8' ));?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }?></div><?php $_smarty_tpl->_assignInScope('width', '450');
$_smarty_tpl->_assignInScope('height', '588');?><div class="form-group"><div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' )),'htmlall','UTF-8' ));?>
-images-thumbnails" class="col-lg-12"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path']->value,'htmlall','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'htmlall','UTF-8' ));?>
" class="img-thumbnail" /><p class="help-block">Please Select Image. (Size:- <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['width']->value,'htmlall','UTF-8' ));?>
 X <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['height']->value,'htmlall','UTF-8' ));?>
 )</p></div></div><?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?></div><?php }
echo '<script'; ?>
>$(document).ready(function(){$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],"htmlall","UTF-8" ));?>
-selectbutton').click(function(e){$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],"htmlall","UTF-8" ));?>
').trigger('click');});$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],"htmlall","UTF-8" ));?>
-name').click(function(e){$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],"htmlall","UTF-8" ));?>
').trigger('click');});$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],"htmlall","UTF-8" ));?>
').change(function(e){var val = $(this).val();var file = val.split(/[\\/]/);$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],"htmlall","UTF-8" ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],"htmlall","UTF-8" ));?>
-name').val(file[file.length-1]);});});<?php echo '</script'; ?>
><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file_upload_3') {?><div class="col-lg-9"><div class="form-group"><div class="col-lg-9"><div class="tvcmsall-pattern-show"><?php $_smarty_tpl->_assignInScope('i', 1);
while ($_smarty_tpl->tpl_vars['i']->value <= 21) {
$_smarty_tpl->_assignInScope('tmp', ('pattern').($_smarty_tpl->tpl_vars['i']->value));?><div class="tvall-pattern-show <?php if ($_smarty_tpl->tpl_vars['background_pattern']->value == $_smarty_tpl->tpl_vars['tmp']->value) {?>tvcms_custom_setting_active<?php }?>" id="pattern<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" style="background:url(<?php echo $_smarty_tpl->tpl_vars['front_pattern_path']->value;?>
pattern/pattern<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
.png)"></div><?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
}?>
<div class="col-lg-12 tvall-pattern-custom-pattern" style="padding: 0;"><input type="file" name="tvcmscustomsetting_custom_pattern" title="Add One Custom Pattern"><input type="hidden" id="tvcmscustomsetting_pattern" name="tvcmscustomsetting_pattern" value="<?php echo $_smarty_tpl->tpl_vars['background_pattern']->value;?>
"></div></div></div></div><p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose Your Pattern or Update Your Custom Pattern.','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</p></div><?php }
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file_upload_4') {?><div class="col-lg-9"><div class="form-group"><div class="col-lg-9"><div class="tvcmsall-pattern-show"><?php $_smarty_tpl->_assignInScope('custom_body_pattern', '');
$_smarty_tpl->_assignInScope('i', 1);
while ($_smarty_tpl->tpl_vars['i']->value <= 21) {
$_smarty_tpl->_assignInScope('tmp', ('pattern').($_smarty_tpl->tpl_vars['i']->value));?><div class="tvall-body-pattern-show <?php if ($_smarty_tpl->tpl_vars['body_background_pattern']->value == $_smarty_tpl->tpl_vars['tmp']->value) {?>tvcms_custom_setting_body_active<?php }?>" id="pattern<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" style="background:url(<?php echo $_smarty_tpl->tpl_vars['front_pattern_path']->value;?>
pattern/pattern<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
.png)"></div><?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
}?>
<div class="col-lg-12 tvall-pattern-custom-pattern" style="padding: 0;"><input type="file" name="tvcmscustomsetting_custom_body_pattern" title="Add One Custom Pattern"><input type="hidden" id="tvcmscustomsetting_body_pattern" name="tvcmscustomsetting_body_pattern" value="<?php echo $_smarty_tpl->tpl_vars['body_background_pattern']->value;?>
"></div></div></div></div><p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose Your Pattern or Update Your Custom Pattern.','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</p></div><?php }
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'custom_theme_option') {?><div class="col-lg-9" id="TVCMSCUSTOMSETTING_THEME_OPTION"><div class="form-group"><div class="col-lg-12"><input type="radio" id="TVCMSCUSTOMSETTING_THEME_OPTION1" name="TVCMSCUSTOMSETTING_THEME_OPTION" value="" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == '') {?> checked <?php }?>><div class="color-wrapper theme1"><div class="first"></div></div><p><label for="TVCMSCUSTOMSETTING_THEME_OPTION1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme 1','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</label></p><input type="radio" id="TVCMSCUSTOMSETTING_THEME_OPTION_CUSTOM" name="TVCMSCUSTOMSETTING_THEME_OPTION" value="theme_custom" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == 'theme_custom') {?> checked <?php }?>><div class="color-wrapper theme_custom"><div class="first" style="background-color: <?php echo Configuration::get('TVCMSCUSTOMSETTING_THEME_COLOR_1');?>
"></div></div><p><label for="TVCMSCUSTOMSETTING_THEME_OPTION_CUSTOM"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</label></p></div><p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose front side theme.','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</p></div></div><?php }
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'dark_mode') {?><div class="col-lg-9" id="TVCMSCUSTOMSETTING_DARKMODE_THEME_OPTION"><div class="form-group ttvcustom-image"><div class="col-lg-12"><table><tr><td><div class="lightModeWrapper"><label for="TVCMSCUSTOMSETTING_LIHGT_MODE_INPUT"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
light-icon.png" alt="Light Mode"></label><p><label for="TVCMSCUSTOMSETTING_LIHGT_MODE_INPUT"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Light','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</label><br/><input type="radio" id="TVCMSCUSTOMSETTING_LIHGT_MODE_INPUT" name="TVCMSCUSTOMSETTING_DARK_MODE_INPUT" value="0" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == 0) {?> checked <?php }?>></p></div></td><td><div class="darkModeWrapper" alt="Dark Mode"><label for="TVCMSCUSTOMSETTING_DARK_MODE_INPUT"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
dark-icon.png" ></label><p><label for="TVCMSCUSTOMSETTING_DARK_MODE_INPUT"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Dark','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</label><br/><input type="radio" id="TVCMSCUSTOMSETTING_DARK_MODE_INPUT" name="TVCMSCUSTOMSETTING_DARK_MODE_INPUT" value="1" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == 1) {?> checked <?php }?>></p></div></td></tr></table><p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose front side theme.','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</p></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'header_desktop_layout_radio') {?><div class="col-lg-10" id="TVCMSHEADERCUSTOMLAYOUT"><div class="form-group"><div class="col-lg-12 tvcms-layout-wrapper"><?php $_smarty_tpl->_assignInScope('arr_desk_name', $_smarty_tpl->tpl_vars['fields_value']->value['header_layout_list']);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_desk_name']->value, 'i', false, NULL, 'index', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']++;
$_smarty_tpl->_assignInScope('desk_name', "desk-header-".((string)$_smarty_tpl->tpl_vars['i']->value));?><div class="col-lg-4 tvmcs-radio-manage"><p><input type="radio" id="header_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_layout_configuration" name="TVCMSHEADERCUSTOMLAYOUT" value="<?php echo $_smarty_tpl->tpl_vars['desk_name']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == ((string)$_smarty_tpl->tpl_vars['desk_name']->value)) {?> checked <?php }?>><label for="header_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_layout_configuration"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Header','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
 <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index'] : null)+1;?>
</label></p><label for="header_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_layout_configuration"><img src="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['layout_img_path'];?>
hlayouts/<?php echo $_smarty_tpl->tpl_vars['desk_name']->value;?>
.png"></label></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select desktop header layout style.','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</p></div></div><?php }
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'header_mobile_layout_radio') {?><div class="col-lg-10" id="TVCMSHEADERCUSTOMLAYOUT_MOBILE"><div class="form-group"><div class="col-lg-12 tvcms-layout-wrapper"><?php $_smarty_tpl->_assignInScope('arr_desk_name', $_smarty_tpl->tpl_vars['fields_value']->value['mob_header_layout_list']);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_desk_name']->value, 'i', false, NULL, 'index', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']++;
$_smarty_tpl->_assignInScope('mob_name', "mobile-header-".((string)$_smarty_tpl->tpl_vars['i']->value));?><div class="col-lg-4 tvmcs-radio-manage"><p><input type="radio" id="header_mobile_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_layout_configuration" name="TVCMSHEADERCUSTOMLAYOUT_MOBILE" value="<?php echo $_smarty_tpl->tpl_vars['mob_name']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == ((string)$_smarty_tpl->tpl_vars['mob_name']->value)) {?> checked <?php }?>><label for="header_mobile_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_layout_configuration"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Header ','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
 <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index'] : null)+1;?>
 </label></p><label for="header_mobile_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_layout_configuration"><img src="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['layout_img_path'];?>
hlayouts/<?php echo $_smarty_tpl->tpl_vars['mob_name']->value;?>
.png"></label></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select mobile header layout style.','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</p></div></div><?php }
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'footer_layout_radio') {?><div class="col-lg-10" id="TVCMSFOOTERCUSTOMLAYOUT"><div class="form-group"><div class="col-lg-12 tvcms-layout-wrapper"><?php $_smarty_tpl->_assignInScope('arr_desk_name', $_smarty_tpl->tpl_vars['fields_value']->value['footer_layout_list']);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_desk_name']->value, 'i', false, NULL, 'index', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']++;
$_smarty_tpl->_assignInScope('footer_prod_name', "footer-".((string)$_smarty_tpl->tpl_vars['i']->value));?><div class="col-lg-4 tvmcs-radio-manage"><p><input type="radio" id="footer_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_layout_configuration" name="TVCMSFOOTERCUSTOMLAYOUT" value="<?php echo $_smarty_tpl->tpl_vars['footer_prod_name']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == ((string)$_smarty_tpl->tpl_vars['footer_prod_name']->value)) {?> checked <?php }?>><label for="footer_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_layout_configuration"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Footer','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
 <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index'] : null)+1;?>
 </label></p><label for="footer_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_layout_configuration"><img src="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['layout_img_path'];?>
flayouts/<?php echo $_smarty_tpl->tpl_vars['footer_prod_name']->value;?>
.png"></label></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select footer layout style.','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</p></div></div><?php }
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'header_product_layout_radio') {?><div class="col-lg-9" id="TVCMSPRODUCTCUSTOM_LAYOUT"><div class="form-group"><div class="col-lg-12 tvcms-layout-wrapper"><?php $_smarty_tpl->_assignInScope('arr_desk_name', $_smarty_tpl->tpl_vars['fields_value']->value['product_layout_list']);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_desk_name']->value, 'i', false, NULL, 'index', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']++;
$_smarty_tpl->_assignInScope('prod_name', "product-".((string)$_smarty_tpl->tpl_vars['i']->value));?><div class="col-lg-4 tvmcs-radio-manage"><p><input type="radio" id="prod_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_layout_configuration" name="TVCMSPRODUCTCUSTOM_LAYOUT" value="<?php echo $_smarty_tpl->tpl_vars['prod_name']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == ((string)$_smarty_tpl->tpl_vars['prod_name']->value)) {?> checked <?php }?>><label for="prod_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_layout_configuration"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layout','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
 <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['index'] : null)+1;?>
 </label></p><label for="prod_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_layout_configuration"><img src="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['layout_img_path'];?>
pdlayouts/<?php echo $_smarty_tpl->tpl_vars['prod_name']->value;?>
.png"></label></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select product page layout style.','mod'=>'tvcmscustomsetting'),$_smarty_tpl ) );?>
</p></div></div><?php }
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'custom_color') {?><div class="col-lg-9"><div class="form-group"><div class="col-lg-2"><div class="row"><div class="input-group"><input type="text" data-hex="true" class="color mColorPickerInput mColorPicker" name="TVCMSCUSTOMSETTING_THEME_COLOR_1" value="#0f0010" id="color_0" style="background-color: rgb(255, 255, 255); color: black;"></div></div></div></div></div><?php }
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
}
}
/* {/block "input"} */
}
