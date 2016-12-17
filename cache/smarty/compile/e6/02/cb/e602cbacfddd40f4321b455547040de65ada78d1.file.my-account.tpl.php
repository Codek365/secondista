<?php /* Smarty version Smarty-3.1.19, created on 2016-12-17 23:37:00
         compiled from "/Applications/MAMP/htdocs/secondista/themes/default-bootstrap/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:449915554585569ace1b6e7-76067381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e602cbacfddd40f4321b455547040de65ada78d1' => 
    array (
      0 => '/Applications/MAMP/htdocs/secondista/themes/default-bootstrap/modules/blockwishlist/my-account.tpl',
      1 => 1481992542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '449915554585569ace1b6e7-76067381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585569ace3ec89_67094846',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585569ace3ec89_67094846')) {function content_585569ace3ec89_67094846($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
