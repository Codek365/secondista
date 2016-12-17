<?php /* Smarty version Smarty-3.1.19, created on 2016-12-17 23:37:03
         compiled from "/Applications/MAMP/htdocs/secondista/admin/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:699599769585569afaf7534-86089865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ff31cca411a57898c58c91b2d9cc61a8de4d1f6' => 
    array (
      0 => '/Applications/MAMP/htdocs/secondista/admin/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1481992538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '699599769585569afaf7534-86089865',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585569afafead9_91528657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585569afafead9_91528657')) {function content_585569afafead9_91528657($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
