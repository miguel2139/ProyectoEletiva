<?php
/* Smarty version 4.2.1, created on 2024-11-19 23:45:22
  from 'C:\xampp\htdocs\tut\admin629yzffxd3wpvgn1gwr\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_673d1502d26b82_97434098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dc7694ca49ca609a498b53f6275afd177e5455d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tut\\admin629yzffxd3wpvgn1gwr\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1731806392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673d1502d26b82_97434098 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
