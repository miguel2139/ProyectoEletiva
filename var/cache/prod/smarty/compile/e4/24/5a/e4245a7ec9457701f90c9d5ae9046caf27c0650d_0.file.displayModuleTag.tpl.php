<?php
/* Smarty version 4.2.1, created on 2024-11-19 21:36:25
  from 'C:\xampp\htdocs\tut\modules\psxdesign\views\templates\hook\displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_673cf6c9f061f0_45698513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4245a7ec9457701f90c9d5ae9046caf27c0650d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tut\\modules\\psxdesign\\views\\templates\\hook\\displayModuleTag.tpl',
      1 => 1731808511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673cf6c9f061f0_45698513 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
