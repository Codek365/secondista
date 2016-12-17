<?php /* Smarty version Smarty-3.1.19, created on 2016-12-17 23:37:02
         compiled from "/Applications/MAMP/htdocs/secondista/themes/default-bootstrap/modules/referralprogram/views/templates/front/rules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1895489684585569aed568f6-20380948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11e14a86ea9842038c51c49f49685b16b6bdd74c' => 
    array (
      0 => '/Applications/MAMP/htdocs/secondista/themes/default-bootstrap/modules/referralprogram/views/templates/front/rules.tpl',
      1 => 1481992542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1895489684585569aed568f6-20380948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'paragraph' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585569aed90062_13572785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585569aed90062_13572785')) {function content_585569aed90062_13572785($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Applications/MAMP/htdocs/secondista/tools/smarty/plugins/modifier.replace.php';
?>

<h3><?php echo smartyTranslate(array('s'=>'Referral program rules','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>

<?php if (isset($_smarty_tpl->tpl_vars['xml']->value)) {?>
<div id="referralprogram_rules">
	<?php if (isset($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value})) {?><div class="rte"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value},"\'","'"),'\"','"');?>
</div><?php }?>
</div>
<?php }?>
<?php }} ?>
