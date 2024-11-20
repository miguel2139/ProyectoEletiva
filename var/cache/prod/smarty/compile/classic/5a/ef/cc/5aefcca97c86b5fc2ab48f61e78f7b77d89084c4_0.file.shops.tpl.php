<?php
/* Smarty version 4.2.1, created on 2024-11-19 23:45:23
  from 'C:\xampp\htdocs\tut\modules\ps_facetedsearch\views\templates\admin\_partials\shops.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_673d15039f3319_26861365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5aefcca97c86b5fc2ab48f61e78f7b77d89084c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tut\\modules\\ps_facetedsearch\\views\\templates\\admin\\_partials\\shops.tpl',
      1 => 1731808107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673d15039f3319_26861365 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['asso_shops']->value))) {?>
  <div class="form-group">
    <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose shop association:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
    <div class="col-lg-9"><?php echo $_smarty_tpl->tpl_vars['asso_shops']->value;?>
</div>
  </div>
<?php }
}
}
