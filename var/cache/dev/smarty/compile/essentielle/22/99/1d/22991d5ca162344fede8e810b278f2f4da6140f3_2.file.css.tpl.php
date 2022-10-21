<?php
/* Smarty version 3.1.43, created on 2022-10-21 16:32:12
  from 'C:\xampp\htdocs\lessentielle\modules\wfmbandeau\views\templates\hook\css.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6352ad6c788cf6_68061461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22991d5ca162344fede8e810b278f2f4da6140f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lessentielle\\modules\\wfmbandeau\\views\\templates\\hook\\css.tpl',
      1 => 1666107971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6352ad6c788cf6_68061461 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['wfmbandeaupromo_show']->value) {?>
<style type="text/css">
	#top-fluid{
		width: 100%;
		height: 30px;
		position: relative;
		text-align: center;
		text-transform: uppercase;
		line-height: 30px;
		font-weight: normal;
		z-index: 100;
		font-weight: normal;
		margin: 0;
		padding: 0;
		<?php if ((isset($_smarty_tpl->tpl_vars['wfmbandeaupromo_size']->value)) && $_smarty_tpl->tpl_vars['wfmbandeaupromo_size']->value != '') {?>font-size: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wfmbandeaupromo_size']->value, ENT_QUOTES, 'UTF-8');?>
!important;<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['wfmbandeaupromo_color']->value)) && $_smarty_tpl->tpl_vars['wfmbandeaupromo_color']->value != '') {?>color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wfmbandeaupromo_color']->value, ENT_QUOTES, 'UTF-8');?>
!important;<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['wfmbandeaupromo_background']->value)) && $_smarty_tpl->tpl_vars['wfmbandeaupromo_background']->value != '') {?>background: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wfmbandeaupromo_background']->value, ENT_QUOTES, 'UTF-8');?>
!important;<?php }?>
	}
	#top-fluid p{
		vertical-align:middle;
		display:inline-block;
		line-height:1.3;
		margin: 0;
		<?php if ((isset($_smarty_tpl->tpl_vars['wfmbandeaupromo_size']->value)) && $_smarty_tpl->tpl_vars['wfmbandeaupromo_size']->value != '') {?>font-size: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wfmbandeaupromo_size']->value, ENT_QUOTES, 'UTF-8');?>
!important;<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['wfmbandeaupromo_color']->value)) && $_smarty_tpl->tpl_vars['wfmbandeaupromo_color']->value != '') {?>color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wfmbandeaupromo_color']->value, ENT_QUOTES, 'UTF-8');?>
!important;<?php }?>
	}
	#top-fluid a{
		text-decoration: none;
		font-weight:bold;
		<?php if ((isset($_smarty_tpl->tpl_vars['wfmbandeaupromo_color']->value)) && $_smarty_tpl->tpl_vars['wfmbandeaupromo_color']->value != '') {?>color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wfmbandeaupromo_color']->value, ENT_QUOTES, 'UTF-8');?>
!important;<?php }?>
	}
	#top-fluid strong, #top-fluid strong a{
		<?php if ((isset($_smarty_tpl->tpl_vars['wfmbandeaupromo_color_strong']->value)) && $_smarty_tpl->tpl_vars['wfmbandeaupromo_color_strong']->value != '') {?>color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wfmbandeaupromo_color_strong']->value, ENT_QUOTES, 'UTF-8');?>
!important;<?php }?>
	}
	/*@media only screen and (max-width: 1024px) {
		#bandeau-promo{
			font-size: 1em;
		}
	}
	@media only screen and (max-width: 768px) {
		#bandeau-promo{
			font-size: 0.8em;
		}
	}*/
	@media only screen and (max-width: 767px) {
		#top-fluid{
			<?php if ((isset($_smarty_tpl->tpl_vars['wfmbandeaupromo_size_mobile']->value)) && $_smarty_tpl->tpl_vars['wfmbandeaupromo_size_mobile']->value != '') {?>font-size: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wfmbandeaupromo_size_mobile']->value, ENT_QUOTES, 'UTF-8');?>
!important;<?php }?>
		}
	}
</style>
<?php }
}
}
