<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:43:18
  from 'module:thegiftcardviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352b006899867_47249388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aee3061d533ad89c01341572b9ae005ba703c12' => 
    array (
      0 => 'module:thegiftcardviewstemplates',
      1 => 1666267770,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352b006899867_47249388 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\lessentielle\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>
<!-- begin C:\xampp\htdocs\lessentielle/modules/thegiftcard/views/templates/front/giftcard.tpl -->
<?php if ($_smarty_tpl->tpl_vars['errors_nb']->value > 0) {?>
	<?php echo $_smarty_tpl->tpl_vars['errors_rendered']->value;
} else {
echo '<script'; ?>
 type="text/javascript">
var is17 = <?php if (version_compare((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null),'1.7','>=')) {?>true<?php } else { ?>false<?php }?>;
var pitch = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['pitch']->value), ENT_QUOTES, 'UTF-8');?>
;
var ajax_allowed = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['ajax_allowed']->value), ENT_QUOTES, 'UTF-8');?>
;
var attribute_anchor_separator = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['attribute_anchor_separator']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
var custom_amount_feature = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['isCustomAmountFeatureActive']->value), ENT_QUOTES, 'UTF-8');?>
;
var custom_amount_from = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['custom_amount_from']->value), ENT_QUOTES, 'UTF-8');?>
;
var custom_amount_to = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['custom_amount_to']->value), ENT_QUOTES, 'UTF-8');?>
;
var invalidAmountMsg = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select a valid amount','mod'=>'thegiftcard'),$_smarty_tpl ) );?>
";
var printAtHome = <?php echo htmlspecialchars(intval(GiftCardModel::PRINT_AT_HOME), ENT_QUOTES, 'UTF-8');?>
;
var sendToFriend = <?php echo htmlspecialchars(intval(GiftCardModel::SEND_TO_FRIEND), ENT_QUOTES, 'UTF-8');?>
;
<?php echo '</script'; ?>
>

<?php if ((isset($_smarty_tpl->tpl_vars['giftcard']->value)) && $_smarty_tpl->tpl_vars['giftcard']->value->id) {?>
<div id="giftcard_product">
	<div id="block_category">
	<?php if ((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value->id) {?>
		<div class="row content_scene_cat">
			<!-- Category image -->
			<div class="content_scene_cat_bg" <?php if ($_smarty_tpl->tpl_vars['category']->value->id_image) {?>style="background:url(<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['category']->value->link_rewrite,$_smarty_tpl->tpl_vars['category']->value->id_image),'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
) 0 bottom no-repeat; min-height:<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['categorySize']->value['height']), ENT_QUOTES, 'UTF-8');?>
px;" <?php }?>>
				<span class="category-name">
					<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->name,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

				</span>
				<?php if ($_smarty_tpl->tpl_vars['category']->value->description) {?>
				<div class="cat_desc">
					<div class="rte"><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</div>
				</div>
				<?php }?>
			</div>
		</div>
	<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['template_vars']->value && $_smarty_tpl->tpl_vars['amount_vars']->value && $_smarty_tpl->tpl_vars['active']->value) {?>
	<div id="block_templates" class="attributes" data-id-attribute-group="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['template_vars']->value['id_attribute_group']), ENT_QUOTES, 'UTF-8');?>
" data-rewrite-group-name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['template_vars']->value['rewrite_group_name'],'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
		<div class="row">
			<div class="col-lg-12">
				<div class="header">
					<i class="icon-photo"></i><span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a template','mod'=>'thegiftcard'),$_smarty_tpl ) );?>
</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="content">
					<ul class="nav nav-tabs" <?php if (count($_smarty_tpl->tpl_vars['template_vars']->value['tags']) < 2) {?> style="display:none;"<?php }?>>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template_vars']->value['tags'], 'count', false, 'tag', 'fo', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['count']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value => $_smarty_tpl->tpl_vars['count']->value) {
$_smarty_tpl->tpl_vars['count']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_fo']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_fo']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_fo']->value['index'];
?>
						<li <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fo']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fo']->value['first'] : null)) {?>class="active"<?php }?>>
							<a href="#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-toggle="gc_tab"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <span class="badge"><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['count']->value), ENT_QUOTES, 'UTF-8');?>
</span></a>
						</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
					<div class="tab-content row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template_vars']->value['tags'], 'count', false, 'tag', 'fo', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['count']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value => $_smarty_tpl->tpl_vars['count']->value) {
$_smarty_tpl->tpl_vars['count']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_fo']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_fo']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_fo']->value['index'];
?>
						<div class="tab-pane <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fo']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fo']->value['first'] : null)) {?>active<?php }?>" id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template_vars']->value['attributes'], 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
						<?php if (in_array($_smarty_tpl->tpl_vars['tag']->value,$_smarty_tpl->tpl_vars['template']->value['tags']) || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_fo']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fo']->value['first'] : null)) {?>
							<?php $_smarty_tpl->_assignInScope('imageIds', ((string)$_smarty_tpl->tpl_vars['giftcard']->value->id)."-".((string)$_smarty_tpl->tpl_vars['template']->value['attribute_value']));?>
							<?php if (!empty($_smarty_tpl->tpl_vars['template']->value['legend'])) {?>
								<?php $_smarty_tpl->_assignInScope('imageTitle', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['template']->value['legend'],'html','UTF-8' )));?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('imageTitle', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['giftcard']->value->name,'html','UTF-8' )));?>
							<?php }?>
							<div class="col-xs-4 col-md-3 img_attribute">
								<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fo']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fo']->value['first'] : null)) {?>
									<input type="radio" class="attribute_radio" name="template" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['template']->value['attribute_value']), ENT_QUOTES, 'UTF-8');?>
" <?php if (($_smarty_tpl->tpl_vars['template']->value['cover'])) {?> checked="checked"<?php }?> />
								<?php }?>
								<div <?php if (($_smarty_tpl->tpl_vars['template']->value['cover'])) {?>id="bigpic"<?php }?> class="product-image-container <?php if (($_smarty_tpl->tpl_vars['template']->value['cover'])) {?>selected<?php }?>" data-id="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['template']->value['attribute_value']), ENT_QUOTES, 'UTF-8');?>
" <?php if (($_smarty_tpl->tpl_vars['template']->value['auto'])) {?>data-auto="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['template']->value['auto']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
									<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['template']->value['thumbnail'],'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" class="imgm img-thumbnail" />
									<div class="view_larger" style="display:none">
										<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['giftcard']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value),'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-fancybox-group="other-views" class="fancybox" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imageTitle']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
											<i class="icon-zoom"></i>
										</a>
									</div>
								</div>
							</div>
						<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="block_amounts" class="attributes" data-id-attribute-group="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['amount_vars']->value['id_attribute_group']), ENT_QUOTES, 'UTF-8');?>
" data-rewrite-group-name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['amount_vars']->value['rewrite_group_name'],'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
		<div class="row">
			<div class="col-lg-12">
				<div class="header">
					<i class="icon-giftcard"></i><span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose the amount','mod'=>'thegiftcard'),$_smarty_tpl ) );?>
</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="content">
					<div class="form-group">
						<div class="form-content">
							<div class="input-group" style="width:120px;">
								<input type="hidden" name="amount" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['default_amount']->value), ENT_QUOTES, 'UTF-8');?>
"/>
								<span class="input-group-addon"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currencySign']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
								<select name="amount_select">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['amount_vars']->value['attributes'], 'amount', false, NULL, 'fo', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['amount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['amount']->value) {
$_smarty_tpl->tpl_vars['amount']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_fo']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_fo']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_fo']->value['index'];
?>
									<option value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['amount']->value['attribute_value']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['default_amount']->value == $_smarty_tpl->tpl_vars['amount']->value['attribute_value']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars(Tools::displayPrice(intval($_smarty_tpl->tpl_vars['amount']->value['attribute_value'])), ENT_QUOTES, 'UTF-8');?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php if ($_smarty_tpl->tpl_vars['isCustomAmountFeatureActive']->value) {?>
									<option value="-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Other amount','mod'=>'thegiftcard'),$_smarty_tpl ) );?>
</option>
								<?php }?>
								</select>
							</div>
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['isCustomAmountFeatureActive']->value) {?>
					<div class="form-group" style="display:none">
						<div class="form-label">
							<label for="amount_input">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom amount between','mod'=>'thegiftcard'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars(Tools::displayPrice(intval($_smarty_tpl->tpl_vars['custom_amount_from']->value)), ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'and','mod'=>'thegiftcard'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars(Tools::displayPrice(intval($_smarty_tpl->tpl_vars['custom_amount_to']->value)), ENT_QUOTES, 'UTF-8');?>
 :
								<span style="display: block; font-size: 11px; font-style: italic; color: #525252; text-align: left;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price range','mod'=>'thegiftcard'),$_smarty_tpl ) );?>
: <?php echo htmlspecialchars(Tools::displayPrice(intval($_smarty_tpl->tpl_vars['pitch']->value)), ENT_QUOTES, 'UTF-8');?>
</span>
							</label>
						</div>
						<div class="form-content">
							<div class="input-group" style="width:120px;">

								<input type="text"  name="amount_input" value=""/>
								<span class="input-group-addon"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currencySign']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
	<div id="block_customization">
		<div class="row">
			<div class="col-lg-12">
				<div class="header">
					<i class="icon-email"></i><span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose your sending method','mod'=>'thegiftcard'),$_smarty_tpl ) );?>
</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="content">
					<div class="form-group">
						<div class="form-inline mr-30">
							<input type="radio" class="attribute_radio_custom" name="sending_method" value="<?php echo htmlspecialchars(intval(GiftCardModel::PRINT_AT_HOME), ENT_QUOTES, 'UTF-8');?>
" checked="checked"/>
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print at home','mod'=>'thegiftcard'),$_smarty_tpl ) );?>
</span>
						</div>
						<?php if (intval($_smarty_tpl->tpl_vars['giftcard']->value->text_fields)) {?>
						<div class="form-inline">
							<input type="radio" class="attribute_radio_custom beneficiary" name="sending_method" value="<?php echo htmlspecialchars(intval(GiftCardModel::SEND_TO_FRIEND), ENT_QUOTES, 'UTF-8');?>
" />
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send to a friend','mod'=>'thegiftcard'),$_smarty_tpl ) );?>
</span>
						</div>
						<?php }?>
					</div>
					<?php if (intval($_smarty_tpl->tpl_vars['giftcard']->value->text_fields)) {?>
					<div id="card_text_fields" style="display:none">
					<?php echo smarty_function_counter(array('start'=>0,'assign'=>'customizationField'),$_smarty_tpl);?>

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizationFields']->value, 'field', false, NULL, 'customizationFields', array (
));
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
						<div class="form-group">
							<div class="form-label">
								<label for="textField<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['customizationField']->value), ENT_QUOTES, 'UTF-8');?>
">
								<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['name'])) {?>
									<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

								<?php }?>
								</label>
							</div>
							<div class="form-content">
								<?php if ($_smarty_tpl->tpl_vars['field']->value['id_customization_field'] == Configuration::get("GIFTCARD_CUST_DATE_".((string)(intval($_smarty_tpl->tpl_vars['giftcard']->value->id))))) {?>
								<div class="input-group" style="width:120px;">
									<input class="datepicker" type="text" name="textField<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['field']->value['id_customization_field']), ENT_QUOTES, 'UTF-8');?>
" value="" id="textField<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['customizationField']->value), ENT_QUOTES, 'UTF-8');?>
" />
									<span class="input-group-addon"><i class="icon-calendar"></i></span>
								</div>
								<?php } else { ?>
								<textarea name="textField<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['field']->value['id_customization_field']), ENT_QUOTES, 'UTF-8');?>
" class="form-control customization_block_input" id="textField<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['customizationField']->value), ENT_QUOTES, 'UTF-8');?>
" rows="3" cols="20"></textarea>
								<?php }?>
							</div>
						</div>
					<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				<?php }?>
				</div>
			</div>
		</div>
	</div>
	<div id="block_button">
		<div class="row">
			<?php if ($_smarty_tpl->tpl_vars['isPDFFeatureActive']->value) {?>
			<div class="col-lg-6">
				<div class="content">
					<button type="button" class="tvall-inner-btn full-width" js-action="preview">
						<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview','mod'=>'thegiftcard'),$_smarty_tpl ) );?>
</span>
					</button>
				</div>
			</div>
			<?php }?>
			<div class="col-lg-<?php if ($_smarty_tpl->tpl_vars['isPDFFeatureActive']->value) {?>6<?php } else { ?>12<?php }?>">
				<div class="content">
					<form id="buy_block" data-action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('thegiftcard','page'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post">
						<input type="hidden" name="token" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['static_token']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
						<input type="hidden" name="id_product" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['giftcard']->value->id), ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id" />
						<input type="hidden" name="add" value="1" />
						<input type="hidden" name="qty" value="1" />
						<button type="button" class="tvall-inner-btn <?php if ($_smarty_tpl->tpl_vars['isPDFFeatureActive']->value) {?>full-width<?php }?>" js-action="add-to-cart">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','mod'=>'thegiftcard'),$_smarty_tpl ) );?>
</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php } else { ?>
		<?php if (!$_smarty_tpl->tpl_vars['active']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The gift card is not available for this currency yet','mod'=>'thegiftcard'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No gift card for the moment..','mod'=>'thegiftcard'),$_smarty_tpl ) );
}?>
	<?php }?>
</div>
<?php }
}?>
<!-- end C:\xampp\htdocs\lessentielle/modules/thegiftcard/views/templates/front/giftcard.tpl --><?php }
}
