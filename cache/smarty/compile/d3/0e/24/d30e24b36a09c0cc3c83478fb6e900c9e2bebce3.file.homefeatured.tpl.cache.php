<?php /* Smarty version Smarty-3.1.19, created on 2017-08-08 11:49:31
         compiled from "C:\xampp\htdocs\vick\themes\default-bootstrap\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59205989a54bbfc717-96653931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd30e24b36a09c0cc3c83478fb6e900c9e2bebce3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vick\\themes\\default-bootstrap\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1460109876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59205989a54bbfc717-96653931',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5989a54bc70082_64205450',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5989a54bc70082_64205450')) {function content_5989a54bc70082_64205450($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
