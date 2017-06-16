<?php /* Smarty version Smarty-3.1.19, created on 2017-01-29 08:59:33
         compiled from "C:\wamp\www\prestashop1611\prestashop\admin1611\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9302588df545786673-99328388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa489c8cca515c888377d90e6400cfb29d241620' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop1611\\prestashop\\admin1611\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1482140820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9302588df545786673-99328388',
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
  'unifunc' => 'content_588df5457b5484_80332513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588df5457b5484_80332513')) {function content_588df5457b5484_80332513($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
