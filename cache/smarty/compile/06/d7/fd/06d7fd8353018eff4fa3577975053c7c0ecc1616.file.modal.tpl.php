<?php /* Smarty version Smarty-3.1.19, created on 2017-07-31 20:40:43
         compiled from "C:\xampp\htdocs\vick\adminVick\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19318597f95cb9a4848-37731024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06d7fd8353018eff4fa3577975053c7c0ecc1616' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vick\\adminVick\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1460109876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19318597f95cb9a4848-37731024',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_597f95cb9a9e49_43018660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597f95cb9a9e49_43018660')) {function content_597f95cb9a9e49_43018660($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
