<?php /* Smarty version Smarty-3.1.19, created on 2016-12-17 18:02:06
         compiled from "/Applications/MAMP/htdocs/secondista/adminsecond/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74825639658556f8ee80b39-69425991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '768bc2c234eee0b8deaf8b0abe9b4fdf510d14e9' => 
    array (
      0 => '/Applications/MAMP/htdocs/secondista/adminsecond/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1481992538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74825639658556f8ee80b39-69425991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58556f8eeaf577_09145776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58556f8eeaf577_09145776')) {function content_58556f8eeaf577_09145776($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
