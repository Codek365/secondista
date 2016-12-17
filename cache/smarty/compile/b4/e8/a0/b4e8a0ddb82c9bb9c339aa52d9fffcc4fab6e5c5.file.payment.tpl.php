<?php /* Smarty version Smarty-3.1.19, created on 2016-12-17 23:36:58
         compiled from "/Applications/MAMP/htdocs/secondista/themes/default-bootstrap/modules/bankwire/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15136013585569aa29afb0-53429471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4e8a0ddb82c9bb9c339aa52d9fffcc4fab6e5c5' => 
    array (
      0 => '/Applications/MAMP/htdocs/secondista/themes/default-bootstrap/modules/bankwire/views/templates/hook/payment.tpl',
      1 => 1481992542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15136013585569aa29afb0-53429471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585569aa2c1733_12343510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585569aa2c1733_12343510')) {function content_585569aa2c1733_12343510($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
		<p class="payment_module">
			<a class="bankwire" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>
</span>
			</a>
		</p>
	</div>
</div>
<?php }} ?>
