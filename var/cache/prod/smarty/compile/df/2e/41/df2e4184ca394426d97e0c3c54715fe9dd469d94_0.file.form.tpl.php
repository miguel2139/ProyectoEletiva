<?php
/* Smarty version 4.2.1, created on 2024-11-19 21:42:05
  from 'C:\xampp\htdocs\tut\admin629yzffxd3wpvgn1gwr\themes\default\template\controllers\features\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_673cf81d430ba0_40658967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df2e4184ca394426d97e0c3c54715fe9dd469d94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tut\\admin629yzffxd3wpvgn1gwr\\themes\\default\\template\\controllers\\features\\helpers\\form\\form.tpl',
      1 => 1731806396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673cf81d430ba0_40658967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1870225673cf81d42a747_97553024', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_1870225673cf81d42a747_97553024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_1870225673cf81d42a747_97553024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'name') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFeatureForm",'id_feature'=>$_smarty_tpl->tpl_vars['form_id']->value),$_smarty_tpl ) );?>

	<?php }
}
}
/* {/block "input_row"} */
}
