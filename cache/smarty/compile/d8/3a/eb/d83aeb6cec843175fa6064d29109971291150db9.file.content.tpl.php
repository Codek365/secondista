<?php /* Smarty version Smarty-3.1.19, created on 2016-12-17 18:00:32
         compiled from "/Applications/MAMP/htdocs/secondista/admin723ej27u3/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123367057458556f306c81e9-12754203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd83aeb6cec843175fa6064d29109971291150db9' => 
    array (
      0 => '/Applications/MAMP/htdocs/secondista/admin723ej27u3/themes/default/template/content.tpl',
      1 => 1481992538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123367057458556f306c81e9-12754203',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58556f306f7f74_55362290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58556f306f7f74_55362290')) {function content_58556f306f7f74_55362290($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
