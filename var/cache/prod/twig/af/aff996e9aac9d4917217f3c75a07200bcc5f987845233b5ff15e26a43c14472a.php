<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__0933432b733a9a05694b3aab12ef67e95254503c4b5dcfc84288a89352ac4069 */
class __TwigTemplate_21390d73296a2f640ca31cd6b0254a867b11a529abff6ee5f98806ecacbfe8ca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/tut/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/tut/img/app_icon.png\" />

<title>Productos • Tut</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es-es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'ES';
    var _PS_VERSION_ = '8.0.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '575ae2c8ef325dfc66d2784c1a926fed';
    var token_admin_orders = tokenAdminOrders = '134d19a9560e6e775059dc09d1dfbe58';
    var token_admin_customers = '6ead816baefc20ff7bcd7d695e9649f4';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '91255704d022e9eeeb5c27279ed7887d';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '725f0a7c42830f5a188eef7ff510582d';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/tut/admin629yzffxd3wpvgn1gwr/index.php/improve/modules/manage?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo';
    var admin_notification_get_link = '/tut/admin629yzffxd3wpvgn1gwr/index.php/common/notifications?_token=Hyf-oy3hvmNogZvSudvaWUR";
        // line 42
        echo "0Cb6TSEBHdx_N3YApVUo';
    var admin_notification_push_link = adminNotificationPushLink = '/tut/admin629yzffxd3wpvgn1gwr/index.php/common/notifications/ack?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización correcta';
    var search_product_msg = 'Buscar un producto';
  </script>



<link
      rel=\"preload\"
      href=\"/tut/admin629yzffxd3wpvgn1gwr/themes/new-theme/public/auto703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/tut/admin629yzffxd3wpvgn1gwr/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tut/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tut/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tut/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tut/admin629yzffxd3wpvgn1gwr/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tut/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tut/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tut/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/tut/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/tut\\/admin629yzffxd3wpvgn1gwr\\/\";
var baseDir = \"\\/tut\\/\";
var changeFormLanguageUrl = \"\\/tut\\/admin629yzffxd3wpvgn1gwr\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221";
        // line 72
        echo "e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/tut/admin629yzffxd3wpvgn1gwr/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/tut/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/tut/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/tut/js/admin.js?v=8.0.1\"></script>
<script type=\"text/javascript\" src=\"/tut/admin629yzffxd3wpvgn1gwr/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/tut/js/tools.js?v=8.0.1\"></script>
<script type=\"text/javascript\" src=\"/tut/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/tut/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/tut/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/tut/admin629yzffxd3wpvgn1gwr/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/tut/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/tut/m";
        // line 91
        echo "odules/ps_mbo/views/js/recommended-modules.js?v=4.5.3\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/tut\\/admin629yzffxd3wpvgn1gwr\\/index.php?controller=AdminGamification&token=4c8be8cfed9270016886949d1583e66c\";
            var current_id_tab = 10;
        </script>

";
        // line 98
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es adminproducts\"
  data-base-url=\"/tut/admin629yzffxd3wpvgn1gwr/index.php\"  data-token=\"Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminDashboard&amp;token=42ec92f03eefd2138929381b021fc744\"></a>
      <span id=\"shop_version\">8.0.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=50615a73483035afa563926ff8272249\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php/improve/modules/manage?token=26cb98764837091bf7ba5636a7322530\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/catalog/categories/new?token=26cb98764837091bf7ba5636a7322530\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/catalog/products/new?token=26cb98764837091bf7ba5636a7322530\"
                 data-item=\"N";
        // line 133
        echo "uevo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=e296e416d93d0ae162f9633087a171ce\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/orders?token=26cb98764837091bf7ba5636a7322530\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"145\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products/last?-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\"
        data-post-link=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminQuickAccesses&token=4cf529bdecf7dbfa53bd77192e66e09f\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Productos - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminQuickAccesses&token=4cf529bdecf7dbfa53bd77192e66e09f\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminSearch&amp;token=acd279b1e4e2721e02a2aef9eb3b98f1\"
      role=\"search\">
  <input t";
        // line 173
        echo "ype=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-";
        // line 188
        echo "icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acceso rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=50615a73483035afa563926ff8272249\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php/improve/modules/manage?token=26cb98764837091bf7ba5636a7322530\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/catalog/categories/new?token=26cb98764837091bf7ba5636a7322530\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/catalog/products/new?token=26cb98764837091bf7ba5636a7322530\"
             data-item=\"Nuevo\"
    >Nuevo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=Ad";
        // line 225
        echo "minCartRules&amp;addcart_rule&amp;token=e296e416d93d0ae162f9633087a171ce\"
             data-item=\"Nuevo cupón de descuento\"
    >Nuevo cupón de descuento</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/orders?token=26cb98764837091bf7ba5636a7322530\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"31\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/products/last?-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\"
      data-post-link=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminQuickAccesses&token=4cf529bdecf7dbfa53bd77192e66e09f\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"Productos - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Añadir página actual al Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminQuickAccesses&token=4cf529bdecf7dbfa53bd77192e66e09f\">
    <i class=\"material-icons\">settings</i>
    Administrar accesos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/tut/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver mi tienda</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-";
        // line 270
        echo "notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus &lt;strong&gt;&lt;a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=c677104d8209aaabe4e6187aafeabaac\"&gt;carritos abandonados&lt;/a&g";
        // line 320
        echo "t;&lt;/strong&gt;?&lt;br&gt;?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" dat";
        // line 369
        echo "a-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/tut/img/pr/default.jpg\" alt=\"Miguel\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, Miguel</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/advanced/employees/1/edit?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gestione tu cuenta PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/es/cursos?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=training-es&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formación
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/es/expertos?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=expert-es&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Encuentra un experto
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_toke";
        // line 396
        echo "n=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo&utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=addons-es&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> PrestaShop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=help-center-es&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centro de ayuda
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminLogin&amp;logout=1&amp;token=ed765b5787f14b7ff8c059479a896b7d\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/advanced/employees/toggle-navigation?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminDashboard&amp;token=42ec92f03eefd2138929381b021fc744\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDas";
        // line 432
        echo "hboard\">
              <a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminDashboard&amp;token=42ec92f03eefd2138929381b021fc744\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/orders/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/orders/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Pedidos
                                </a>
                              </li>

                 ";
        // line 470
        echo "                                                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/orders/invoices/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/orders/credit-slips/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/orders/delivery-slips/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminCarts&amp;token=c67";
        // line 498
        echo "7104d8209aaabe4e6187aafeabaac\" class=\"link\"> Carritos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/catalog/products?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/catalog/products?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li";
        // line 530
        echo " class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/catalog/categories?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/catalog/monitoring/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminAttributesGroups&amp;token=a333e7bb6f8ff8c9ec9c4601ba082e58\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/catalog/brands/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

          ";
        // line 559
        echo "                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/attachments/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminCartRules&amp;token=e296e416d93d0ae162f9633087a171ce\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/stocks/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/tut/";
        // line 590
        echo "admin629yzffxd3wpvgn1gwr/index.php/sell/customers/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/customers/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/addresses/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                          ";
        // line 620
        echo "            
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminCustomerThreads&amp;token=91255704d022e9eeeb5c27279ed7887d\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminCustomerThreads&amp;token=91255704d022e9eeeb5c27279ed7887d\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/customer-service/order-messages/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                       ";
        // line 649
        echo "                                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminReturn&amp;token=8d49228f8ef113451b6afa78303788f8\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/modules/metrics/legacy/stats?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/modules/metrics/legac";
        // line 678
        echo "y/stats?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Estadísticas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"159\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/modules/metrics?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/modules/mbo/modules/catalog/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                   ";
        // line 716
        echo "                           <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"151\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/modules/mbo/modules/catalog/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/improve/modules/manage?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Administrador de módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=06094fdff36071f9a02a9dfd252c13c2\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      D";
        // line 743
        echo "iseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=06094fdff36071f9a02a9dfd252c13c2\" class=\"link\"> Modulos del tema
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/modules/mbo/themes/catalog/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Catálogo de Temas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/modules/improve/design/themes?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Personalización";
        // line 770
        echo "
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/improve/design/mail_theme/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/improve/design/cms-pages/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/improve/design/modules/positions/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                         ";
        // line 802
        echo "       <a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminImages&amp;token=de86a8b2e5170a6be3f64e29e94e8e0b\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/modules/link-widget/list?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Lista de enlaces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminCarriers&amp;token=53f248474aa49ddd24c600fd05ab5187\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
       ";
        // line 833
        echo "                                                     
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminCarriers&amp;token=53f248474aa49ddd24c600fd05ab5187\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/improve/shipping/preferences/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminMbeConfiguration&amp;token=c4178e794cf203b9954e49cd33318c7b\" class=\"link\"> MBE - Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminMbeShipping&amp;token=373fafe88e7cc2669aa6f49f312d39d6\" class=\"link\"> MBE -";
        // line 859
        echo " Listado de envíos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/improve/payment/payment_methods?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/improve/payment/payment_methods?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-subm";
        // line 891
        echo "enu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/improve/payment/preferences?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/improve/international/localization/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/improve/international/localization/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Localización
                                </a>
                              </li>

                                                     ";
        // line 921
        echo "                             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/improve/international/zones/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/improve/international/taxes/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/improve/international/translations/settings?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"139\" id=\"subtab-Marketing\">
                    <a href=\"h";
        // line 952
        echo "ttp://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=aab8d23c69a7f63b8aa6829f050c8b71\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-139\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=aab8d23c69a7f63b8aa6829f050c8b71\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminPsfacebookModule&amp;token=547bc67baeedf8dab78d5bdaae7c4277\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
   ";
        // line 982
        echo "                   
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/shop/preferences/preferences?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/shop/preferences/preferences?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" ";
        // line 1016
        echo "id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/shop/order-preferences/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Configuración de pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/shop/product-preferences/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/shop/customer-preferences/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Configuración de clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/shop/contacts/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Contacto
                                </a>
                              </li>

";
        // line 1045
        echo "                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/shop/seo-urls/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminSearchConf&amp;token=0f8f1217dee4e9a852bb97429e3e471b\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/advanced/system-information/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                           ";
        // line 1074
        echo "         keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/advanced/system-information/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/advanced/performance/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/advanced/administration/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                    ";
        // line 1104
        echo "                                        
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/advanced/emails/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/advanced/import/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/advanced/employees/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/advanced/sql-requests/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Base de datos
                                </a>
                 ";
        // line 1132
        echo "             </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/advanced/logs/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/advanced/webservice-keys/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/advanced/feature-flags/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Características nuevas y experimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=";
        // line 1161
        echo "\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/configure/advanced/security/?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Catálogo</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/catalog/products?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" aria-current=\"page\">Productos</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Productos          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/catalog/products/new?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\"                  title=\"Crear un nuevo producto: CTRL + P\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Nuevo
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
           ";
        // line 1211
        echo "        title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminProducts%253Fversion%253D8.0.1%2526country%253Des/Ayuda?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/sell/catalog/products/new?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\"              title=\"Crear un nuevo producto: CTRL + P\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Nuevo
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminProducts%253Fversion%253D8.0.1%2526country%253Des/Ayuda?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>";
        // line 1252
        echo "
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Optimizar el catálogo de productos',
        'Close': 'Cerrar',
      },
      recommendedModulesUrl: '/tut/admin629yzffxd3wpvgn1gwr/index.php/modules/mbo/modules/recommended/?tabClassName=AdminProducts&recommendation_format=modal&_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1281
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost/tut/admin629yzffxd3wpvgn1gwr/index.php?controller=AdminDashboard&amp;token=42ec92f03eefd2138929381b021fc744\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <div id=\"module-modal-addons-connect\" class=\"modal  modal-vcenter fade\" role=\"dialog\" tabindex=\"-1\" aria-labelledby=\"module-modal-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Conectarse a Addons Marketplace</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
                  <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                      Vincula tu tienda a tu cuenta de Addons para recibir automáticamente actualizaciones importantes de los módulos que hayas adquirido. ¿Aún no tiene una cuenta?
                      <a href=\"https://authv2.prestashop.com/register?_ga=2.183749797.2029715227.1645605306-2047387021.1643627469&amp;_gac=1.81371877.1644238612.CjwKCAiAo4OQBhBBEiwA5KWu_5UzrywbBPo4PKIYESy7K-noavdo7Z4riOZMJEoM9mE1IE3gks0thxoCZOwQAvD_BwE\" target=\"_blank\">Regístrate ahora</a>
                  </p>
                  <p>
                      Si has creado tu cuenta utilizando Google, sigue el procedimiento de contraseña olvidada de Addons Marketplace para crear tu contraseña : 
   ";
        // line 1324
        echo "                   <a href=\"https://authv2.prestashop.com/password/request \" target=\"_blank\">Restablecer contraseña</a>
                  </p>
                  <form id=\"addons-connect-form\"
                        action=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/modules/mbo/addons/login?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\"
                        method=\"POST\"
                        data-error-message=\"An error occurred while processing your request.\"
                  >
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-email\">Dirección de correo electrónico</label>
                    <input name=\"username_addons\" type=\"email\" class=\"form-control\" id=\"module-addons-connect-email\" placeholder=\"Email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-password\">Contraseña</label>
                    <input name=\"password_addons\" type=\"password\" class=\"form-control\" id=\"module-addons-connect-password\" placeholder=\"Password\">
                  </div>
                  <div class=\"md-checkbox md-checkbox-inline\">
                    <label>
                      <input type=\"checkbox\" name=\"addons_remember_me\">
                      <i class=\"md-checkbox-control\"></i>
                        Recordar datos
                    </label>
                  </div>
                  <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">¡Vamos!</button>
                    <div id=\"addons_login_btn\" class=\"spinner\" style=\"display:none;\"></div>
                  </div>
                </form>
                <p class=\"text-center py-3\">
                    <a href=\"https://authv2.prestashop.com/password/request \" target=\"_blank\">¿Olvidó su contraseña?</a>
                </p>
              </div>
          </div>
              </div>
    </div>
  </div>
</div>
<div id=\"module-modal-addons-logout\" ";
        // line 1360
        echo "class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Confirmar el cierre de sesión</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    Estás a punto de salir de tu cuenta en Addons. Podrías perderte actualizaciones importantes de los Complementos que has comprado.
                  </p>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"Cancelar\">
          <a class=\"btn btn-primary uppercase\" href=\"/tut/admin629yzffxd3wpvgn1gwr/index.php/modules/mbo/addons/logout?_token=Hyf-oy3hvmNogZvSudvaWUR0Cb6TSEBHdx_N3YApVUo\" id=\"module-modal-addons-logout-ack\">Sí, quiero salir</a>
      </div>

        </div>
    </div>
</div>

</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1393
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 98
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1281
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1393
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__0933432b733a9a05694b3aab12ef67e95254503c4b5dcfc84288a89352ac4069";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1572 => 1393,  1551 => 1281,  1540 => 98,  1531 => 1393,  1496 => 1360,  1458 => 1324,  1409 => 1281,  1378 => 1252,  1335 => 1211,  1283 => 1161,  1252 => 1132,  1222 => 1104,  1190 => 1074,  1159 => 1045,  1128 => 1016,  1092 => 982,  1060 => 952,  1027 => 921,  995 => 891,  961 => 859,  933 => 833,  900 => 802,  866 => 770,  837 => 743,  808 => 716,  768 => 678,  737 => 649,  706 => 620,  674 => 590,  641 => 559,  610 => 530,  576 => 498,  546 => 470,  506 => 432,  468 => 396,  439 => 369,  388 => 320,  336 => 270,  289 => 225,  250 => 188,  233 => 173,  191 => 133,  151 => 98,  142 => 91,  121 => 72,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0933432b733a9a05694b3aab12ef67e95254503c4b5dcfc84288a89352ac4069", "");
    }
}
