<?php
/* Smarty version 4.2.1, created on 2024-11-19 23:56:06
  from 'C:\xampp\htdocs\tut\modules\ps_mbo\views\templates\hook\dashboard-zone-one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_673d1786a34e80_83209504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44fd02cca736d3da29f100ea4415f44751a4d724' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tut\\modules\\ps_mbo\\views\\templates\\hook\\dashboard-zone-one.tpl',
      1 => 1731806780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673d1786a34e80_83209504 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
    if (typeof renderCdcError === 'function') {
      window.$(document).ready(function() {
        renderCdcError($('#cdc-tips-and-update-container'));
      });
    }
  } else {
    const renderTipsAndUpdate = window.mboCdc.renderDashboardTipsAndUpdate

    const dashboardTipsAndUpdateContext = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;

    renderTipsAndUpdate(dashboardTipsAndUpdateContext, '#cdc-tips-and-update-container')
  }
<?php echo '</script'; ?>
>

<section id="cdc-tips-and-update-container" class="cdc-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></section>
<?php }
}
