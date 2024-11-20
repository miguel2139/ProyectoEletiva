<?php
/* Smarty version 4.2.1, created on 2024-11-19 23:53:07
  from 'C:\xampp\htdocs\tut\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_673d16d3d5d9d2_66621499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3a8d241bf2599767cd0da6fcd6ca4783c7c5c6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tut\\themes\\classic\\templates\\page.tpl',
      1 => 1731808763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673d16d3d5d9d2_66621499 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2121793587673d16d3d5a9b0_37942007', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_983837906673d16d3d5b001_81301686 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_318564004673d16d3d5acd5_31246107 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_983837906673d16d3d5b001_81301686', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1168066578673d16d3d5c7e1_68346532 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_637744244673d16d3d5cb58_99724389 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_387234507673d16d3d5c570_10586014 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1168066578673d16d3d5c7e1_68346532', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_637744244673d16d3d5cb58_99724389', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1899019323673d16d3d5d2c7_58121448 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_308328405673d16d3d5d0a4_38681114 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1899019323673d16d3d5d2c7_58121448', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2121793587673d16d3d5a9b0_37942007 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2121793587673d16d3d5a9b0_37942007',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_318564004673d16d3d5acd5_31246107',
  ),
  'page_title' => 
  array (
    0 => 'Block_983837906673d16d3d5b001_81301686',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_387234507673d16d3d5c570_10586014',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1168066578673d16d3d5c7e1_68346532',
  ),
  'page_content' => 
  array (
    0 => 'Block_637744244673d16d3d5cb58_99724389',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_308328405673d16d3d5d0a4_38681114',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1899019323673d16d3d5d2c7_58121448',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_318564004673d16d3d5acd5_31246107', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_387234507673d16d3d5c570_10586014', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_308328405673d16d3d5d0a4_38681114', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
