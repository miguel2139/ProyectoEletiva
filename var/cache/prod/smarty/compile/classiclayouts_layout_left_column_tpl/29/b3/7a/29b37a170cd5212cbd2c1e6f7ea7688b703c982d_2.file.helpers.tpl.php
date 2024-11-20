<?php
/* Smarty version 4.2.1, created on 2024-11-18 06:14:29
  from 'C:\xampp\htdocs\tut\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_673acd3565d1c4_12769495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29b37a170cd5212cbd2c1e6f7ea7688b703c982d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tut\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1731808764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673acd3565d1c4_12769495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\tut\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\29\\b3\\7a\\29b37a170cd5212cbd2c1e6f7ea7688b703c982d_2.file.helpers.tpl.php',
    'uid' => '29b37a170cd5212cbd2c1e6f7ea7688b703c982d',
    'call_name' => 'smarty_template_function_renderLogo_807708913673acd355951a5_20474829',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_807708913673acd355951a5_20474829 */
if (!function_exists('smarty_template_function_renderLogo_807708913673acd355951a5_20474829')) {
function smarty_template_function_renderLogo_807708913673acd355951a5_20474829(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_807708913673acd355951a5_20474829 */
}
