<?php
/* Smarty version 4.2.1, created on 2024-11-19 23:45:23
  from 'C:\xampp\htdocs\tut\modules\ps_facetedsearch\views\templates\admin\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_673d15038b5991_58953779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17a8116d238262be2f940267790b8894ad2cbefc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tut\\modules\\ps_facetedsearch\\views\\templates\\admin\\_partials\\header.tpl',
      1 => 1731808107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673d15038b5991_58953779 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
  <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Template name:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
  <div class="col-lg-9">
    <input type="text" id="layered_tpl_name" name="layered_tpl_name" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>
" />
    <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Only as a reminder','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</p>
  </div>
</div>
<?php }
}
