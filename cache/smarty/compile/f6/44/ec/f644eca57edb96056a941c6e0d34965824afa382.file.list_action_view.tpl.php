<?php /* Smarty version Smarty-3.1.19, created on 2017-07-31 20:44:45
         compiled from "C:\xampp\htdocs\vick\adminVick\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25396597f96bd2507d3-25373928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f644eca57edb96056a941c6e0d34965824afa382' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vick\\adminVick\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1460109876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25396597f96bd2507d3-25373928',
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
  'unifunc' => 'content_597f96bd264479_10688535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597f96bd264479_10688535')) {function content_597f96bd264479_10688535($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
