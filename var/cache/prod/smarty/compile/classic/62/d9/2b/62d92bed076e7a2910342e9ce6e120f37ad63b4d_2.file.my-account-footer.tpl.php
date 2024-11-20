<?php
/* Smarty version 4.2.1, created on 2024-11-17 21:42:02
  from 'C:\xampp\htdocs\tut\themes\classic\modules\ps_emailalerts\views\templates\hook\my-account-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_673a551aa9f708_33786087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62d92bed076e7a2910342e9ce6e120f37ad63b4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tut\\themes\\classic\\modules\\ps_emailalerts\\views\\templates\\hook\\my-account-footer.tpl',
      1 => 1731808769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673a551aa9f708_33786087 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li>
  <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'ps_emailalerts','controller'=>'account'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

  </a>
</li>
<?php }
}
