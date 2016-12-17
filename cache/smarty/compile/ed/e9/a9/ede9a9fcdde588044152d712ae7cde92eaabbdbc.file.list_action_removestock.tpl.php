<?php /* Smarty version Smarty-3.1.19, created on 2016-12-17 23:37:06
         compiled from "/Applications/MAMP/htdocs/secondista/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:554403291585569b2e953a8-92470320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ede9a9fcdde588044152d712ae7cde92eaabbdbc' => 
    array (
      0 => '/Applications/MAMP/htdocs/secondista/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1481992538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '554403291585569b2e953a8-92470320',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585569b2eb3ae1_12738853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585569b2eb3ae1_12738853')) {function content_585569b2eb3ae1_12738853($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-circle-arrow-down"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
