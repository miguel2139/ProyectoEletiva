<?php
/* Smarty version 4.2.1, created on 2024-11-19 23:45:23
  from 'C:\xampp\htdocs\tut\modules\ps_facetedsearch\views\templates\admin\_functions\show_limit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_673d15037b5c26_47220717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43f95a560b113e9bba21fbad914228261be12c17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tut\\modules\\ps_facetedsearch\\views\\templates\\admin\\_functions\\show_limit.tpl',
      1 => 1731808107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673d15037b5c26_47220717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'get_limit_select' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\tut\\var\\cache\\prod\\smarty\\compile\\classic\\43\\f9\\5a\\43f95a560b113e9bba21fbad914228261be12c17_0.file.show_limit.tpl.php',
    'uid' => '43f95a560b113e9bba21fbad914228261be12c17',
    'call_name' => 'smarty_template_function_get_limit_select_1446223577673d1503690285_68837089',
  ),
));
?>

<?php }
/* smarty_template_function_get_limit_select_1446223577673d1503690285_68837089 */
if (!function_exists('smarty_template_function_get_limit_select_1446223577673d1503690285_68837089')) {
function smarty_template_function_get_limit_select_1446223577673d1503690285_68837089(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('element'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php $_smarty_tpl->_assignInScope('name', ((string)$_smarty_tpl->tpl_vars['element']->value)."_filter_show_limit");?>
  <select name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
    <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No limit','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</option>
    <?php
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? 20+1 - (2) : 2-(20)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 2, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration === 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration === $_smarty_tpl->tpl_vars['index']->total;?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</option>
    <?php }
}
?>
  </select>
<?php
}}
/*/ smarty_template_function_get_limit_select_1446223577673d1503690285_68837089 */
}
