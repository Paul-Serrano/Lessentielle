<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:32:12
  from 'C:\xampp\htdocs\lessentielle\modules\wfmbandeau\views\templates\hook\wfmbandeau.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352ad6ca88769_72509486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9b3de107be163fec9aefe0a5a687df408259260' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lessentielle\\modules\\wfmbandeau\\views\\templates\\hook\\wfmbandeau.tpl',
      1 => 1666107971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352ad6ca88769_72509486 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['wfmbandeaupromo_show']->value) {?>
	<div id="top-fluid" class="fluid-bg">
        <div class="container">  
            <div id="top" class="column full">
				<p>
					<?php if ((isset($_smarty_tpl->tpl_vars['wfmbandeaupromo_link']->value)) && $_smarty_tpl->tpl_vars['wfmbandeaupromo_link']->value != '') {?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wfmbandeaupromo_link']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['wfmbandeaupromo_link']->value == '#popupli') {?> id="trigger"<?php }?>>
					<?php }?>
						<?php echo $_smarty_tpl->tpl_vars['wfmbandeaupromo_text']->value;?>

					<?php if ((isset($_smarty_tpl->tpl_vars['wfmbandeaupromo_link']->value)) && $_smarty_tpl->tpl_vars['wfmbandeaupromo_link']->value != '') {?>
						</a>
					<?php }?>
				</p>
			</div>
		</div>
	</div>
<?php }
}
}
