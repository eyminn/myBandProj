<?php
/* Smarty version 3.1.30, created on 2016-10-03 12:29:06
  from "C:\wamp\www\BAE\myBand2\views\newsarticle.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f232f2dfc6a8_30475803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec5d0d2afc065c8009e930c18ad629b307e34a83' => 
    array (
      0 => 'C:\\wamp\\www\\BAE\\myBand2\\views\\newsarticle.tpl',
      1 => 1475490544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f232f2dfc6a8_30475803 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\wamp\\www\\BAE\\myBand2\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp\\www\\BAE\\myBand2\\libs\\plugins\\modifier.date_format.php';
?>

<section>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'oneItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->value) {
?>
		<article>
			<h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
			<h1><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],30);?>
</h1>
			<img src="img/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
">
			<p>Uploaded : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%d, %B, %G");?>
</p>
		</article>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</section>
<?php }
}
