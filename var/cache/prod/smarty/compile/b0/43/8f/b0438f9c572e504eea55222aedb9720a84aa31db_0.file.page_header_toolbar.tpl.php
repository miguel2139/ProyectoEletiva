<?php
/* Smarty version 4.2.1, created on 2024-11-18 07:55:22
  from 'C:\xampp\htdocs\tut\admin629yzffxd3wpvgn1gwr\themes\new-theme\template\controllers\orders\page_header_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_673ae4da9cdb88_12058949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0438f9c572e504eea55222aedb9720a84aa31db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tut\\admin629yzffxd3wpvgn1gwr\\themes\\new-theme\\template\\controllers\\orders\\page_header_toolbar.tpl',
      1 => 1731806412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673ae4da9cdb88_12058949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1026062437673ae4da9c67e1_80893084', 'pageTitle');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page_header_toolbar.tpl');
}
/* {block 'pageTitle'} */
class Block_1026062437673ae4da9c67e1_80893084 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_1026062437673ae4da9c67e1_80893084',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (!(isset($_smarty_tpl->tpl_vars['use_regular_h1_structure']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('use_regular_h1_structure', true);?>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['use_regular_h1_structure']->value) {?>
    <h1 class="title">
      <?php if (is_array($_smarty_tpl->tpl_vars['title']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( end($_smarty_tpl->tpl_vars['title']->value) ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value ));
}?>
    </h1>
  <?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

  <?php }
}
}
/* {/block 'pageTitle'} */
}
