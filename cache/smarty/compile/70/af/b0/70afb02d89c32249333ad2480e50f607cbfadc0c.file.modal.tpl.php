<?php /* Smarty version Smarty-3.1.19, created on 2017-01-29 08:49:24
         compiled from "C:\wamp\www\prestashop1611\prestashop\admin685v1m6ji\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7385588df2e42a4fc7-51908671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70afb02d89c32249333ad2480e50f607cbfadc0c' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop1611\\prestashop\\admin685v1m6ji\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1482140820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7385588df2e42a4fc7-51908671',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_588df2e42b0b40_43663638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588df2e42b0b40_43663638')) {function content_588df2e42b0b40_43663638($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
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
