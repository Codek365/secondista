<?php /* Smarty version Smarty-3.1.19, created on 2016-12-17 23:36:54
         compiled from "/Applications/MAMP/htdocs/secondista/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284389174585569a6ad0cf8-33485909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de2b6e066ac4b74626ca52474a55d46d96b4d797' => 
    array (
      0 => '/Applications/MAMP/htdocs/secondista/admin/themes/default/template/content.tpl',
      1 => 1481992538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284389174585569a6ad0cf8-33485909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585569a6b69da4_12863035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585569a6b69da4_12863035')) {function content_585569a6b69da4_12863035($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
