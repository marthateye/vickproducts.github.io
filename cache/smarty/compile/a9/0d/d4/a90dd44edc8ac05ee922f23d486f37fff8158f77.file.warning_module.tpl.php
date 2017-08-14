<?php /* Smarty version Smarty-3.1.19, created on 2017-08-02 22:03:25
         compiled from "C:\xampp\htdocs\vick\adminVick\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:838959824c2d5d2e98-84572464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a90dd44edc8ac05ee922f23d486f37fff8158f77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vick\\adminVick\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1460109876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '838959824c2d5d2e98-84572464',
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
  'unifunc' => 'content_59824c2d65d337_63437645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59824c2d65d337_63437645')) {function content_59824c2d65d337_63437645($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
