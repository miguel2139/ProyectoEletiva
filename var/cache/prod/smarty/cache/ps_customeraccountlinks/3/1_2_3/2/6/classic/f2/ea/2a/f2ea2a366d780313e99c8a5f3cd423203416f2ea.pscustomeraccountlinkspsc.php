<?php
/* Smarty version 4.2.1, created on 2024-11-19 18:50:08
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_673d2430858841_73066284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1731808770,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_673d2430858841_73066284 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\tut\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\29\\b3\\7a\\29b37a170cd5212cbd2c1e6f7ea7688b703c982d_2.file.helpers.tpl.php',
    'uid' => '29b37a170cd5212cbd2c1e6f7ea7688b703c982d',
    'call_name' => 'smarty_template_function_renderLogo_1997161691673a551841b6c9_23158413',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/tut/mi-cuenta" rel="nofollow">
      Su cuenta
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Su cuenta</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://localhost/tut/datos-personales" title="Información" rel="nofollow">Información</a></li>
                  <li><a href="http://localhost/tut/direccion" title="Añadir primera dirección" rel="nofollow">Añadir primera dirección</a></li>
                          <li><a href="http://localhost/tut/historial-compra" title="Pedidos" rel="nofollow">Pedidos</a></li>
                          <li><a href="http://localhost/tut/facturas-abono" title="Facturas por abono" rel="nofollow">Facturas por abono</a></li>
                                  <li><a href="http://localhost/tut/seguimiento-pedido" title="Devoluciones de mercancía" rel="nofollow">Devoluciones de mercancía</a></li>
                  <li>
    <a href="http://localhost/tut/module/blockwishlist/lists" title="Mi lista de deseos" rel="nofollow">
      Lista de deseos
    </a>
  </li>
<li>
  <a href="//localhost/tut/module/ps_emailalerts/account" title="Mis alertas">
    Mis alertas
  </a>
</li>

        <li><a href="http://localhost/tut/?mylogout=" title="Cerrar sesión" rel="nofollow">Cerrar sesión</a></li>
       
	</ul>
</div>
<?php }
}
