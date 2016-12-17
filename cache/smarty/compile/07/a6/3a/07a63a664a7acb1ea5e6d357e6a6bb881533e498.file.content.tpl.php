<?php /* Smarty version Smarty-3.1.19, created on 2016-12-17 18:01:01
         compiled from "/Applications/MAMP/htdocs/secondista/adminsecond/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128792019258556f4d18ff24-38504801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07a63a664a7acb1ea5e6d357e6a6bb881533e498' => 
    array (
      0 => '/Applications/MAMP/htdocs/secondista/adminsecond/themes/default/template/content.tpl',
      1 => 1481992538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128792019258556f4d18ff24-38504801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58556f4d20c3c3_27800610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58556f4d20c3c3_27800610')) {function content_58556f4d20c3c3_27800610($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
