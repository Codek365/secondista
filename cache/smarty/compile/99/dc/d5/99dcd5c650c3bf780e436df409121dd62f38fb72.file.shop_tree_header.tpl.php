<?php /* Smarty version Smarty-3.1.19, created on 2016-12-17 23:37:03
         compiled from "/Applications/MAMP/htdocs/secondista/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1146791802585569af86eb76-90102015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99dcd5c650c3bf780e436df409121dd62f38fb72' => 
    array (
      0 => '/Applications/MAMP/htdocs/secondista/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl',
      1 => 1481992538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1146791802585569af86eb76-90102015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585569af88b757_61945043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585569af88b757_61945043')) {function content_585569af88b757_61945043($_smarty_tpl) {?>
<div class="panel-heading">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-sitemap"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<div class="pull-right">
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
	</div>
</div><?php }} ?>
