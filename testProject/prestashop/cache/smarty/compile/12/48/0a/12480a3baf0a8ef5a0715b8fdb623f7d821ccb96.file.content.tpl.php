<?php /* Smarty version Smarty-3.1.19, created on 2017-01-29 08:50:38
         compiled from "C:\wamp\www\prestashop1611\prestashop\admin1611\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17153588df32e2a5e54-06071599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12480a3baf0a8ef5a0715b8fdb623f7d821ccb96' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop1611\\prestashop\\admin1611\\themes\\default\\template\\content.tpl',
      1 => 1482140820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17153588df32e2a5e54-06071599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_588df32e2ccf51_18180233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588df32e2ccf51_18180233')) {function content_588df32e2ccf51_18180233($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
