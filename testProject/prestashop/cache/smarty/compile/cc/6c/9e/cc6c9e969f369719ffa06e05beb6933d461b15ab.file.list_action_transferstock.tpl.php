<?php /* Smarty version Smarty-3.1.19, created on 2017-01-29 14:38:09
         compiled from "C:\wamp\www\prestashop1611\prestashop\admin\themes\default\template\helpers\list\list_action_transferstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20381588df041b03443-28566561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc6c9e969f369719ffa06e05beb6933d461b15ab' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop1611\\prestashop\\admin\\themes\\default\\template\\helpers\\list\\list_action_transferstock.tpl',
      1 => 1482140820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20381588df041b03443-28566561',
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
  'unifunc' => 'content_588df041d0ebc0_94373877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588df041d0ebc0_94373877')) {function content_588df041d0ebc0_94373877($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-exchange"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
