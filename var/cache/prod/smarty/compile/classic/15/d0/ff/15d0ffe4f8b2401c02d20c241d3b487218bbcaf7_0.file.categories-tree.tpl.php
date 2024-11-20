<?php
/* Smarty version 4.2.1, created on 2024-11-19 23:45:23
  from 'C:\xampp\htdocs\tut\modules\ps_facetedsearch\views\templates\admin\_partials\categories-tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_673d1503950fe2_07380692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15d0ffe4f8b2401c02d20c241d3b487218bbcaf7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tut\\modules\\ps_facetedsearch\\views\\templates\\admin\\_partials\\categories-tree.tpl',
      1 => 1731808107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673d1503950fe2_07380692 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
  <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories used for this template:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
  <div class="col-lg-9">
    <?php if (trim($_smarty_tpl->tpl_vars['categories_tree']->value) != '') {?>
      <?php echo $_smarty_tpl->tpl_vars['categories_tree']->value;?>

    <?php } else { ?>
      <div class="alert alert-warning">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories selection is disabled because you have no categories or you are in a "all shops" context.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

      </div>
    <?php }?>
  </div>
</div>
<?php }
}
