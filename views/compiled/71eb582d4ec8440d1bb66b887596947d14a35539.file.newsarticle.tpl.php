<?php /* Smarty version Smarty-3.1.18, created on 2016-10-03 12:21:16
         compiled from "views\newsarticle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1159657f22f433307c9-60492484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71eb582d4ec8440d1bb66b887596947d14a35539' => 
    array (
      0 => 'views\\newsarticle.tpl',
      1 => 1475490072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1159657f22f433307c9-60492484',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f22f43360498_93834384',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f22f43360498_93834384')) {function content_57f22f43360498_93834384($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\BAE\\myBand2\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\BAE\\myBand2\\libs\\plugins\\modifier.date_format.php';
?>
<section>
	<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
		<article>
			<h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
			<h1><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],30);?>
</h1>
			<img src="img/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
">
			<p>Uploaded : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%d %B %G");?>
</p>
		</article>
	<?php } ?>
</section>
<?php }} ?>
