<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__fcb0b7f91998cc1b4e975176571edb62be36e5395b9698cc31855e22f2089d6f */
class __TwigTemplate_7e9046c1416a587fc2c8d4242df18a61890ea763b72b3ee5d99b7d5d30ff0f7a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__fcb0b7f91998cc1b4e975176571edb62be36e5395b9698cc31855e22f2089d6f"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__fcb0b7f91998cc1b4e975176571edb62be36e5395b9698cc31855e22f2089d6f"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/lessentielle/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/lessentielle/img/app_icon.png\" />

<title>Modification : Cartes cadeaux • L'Essentielle</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCategories';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.8.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '57fc0e6565b506bb5c164b1701a9ffad';
    var token_admin_orders = tokenAdminOrders = '667955fecbb2aa79f1aa553db1e492e3';
    var token_admin_customers = '428a82751f69b66dafc8bc9713262dc9';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '29ef6cd0bda281d321e525b2d09100fd';
    var currentIndex = 'index.php?controller=AdminCategories';
    var employee_token = 'eb1891c314fb4fe8b91ecc36b3c34ed4';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/lessentielle/admin3601jtunn/index.php/improve/modules/catalog/recommended?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ';
    var admin_notification_get_link = '/le";
        // line 42
        echo "ssentielle/admin3601jtunn/index.php/common/notifications?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ';
    var admin_notification_push_link = adminNotificationPushLink = '/lessentielle/admin3601jtunn/index.php/common/notifications/ack?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/lessentielle/admin3601jtunn/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/lessentielle/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/lessentielle/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/lessentielle/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/lessentielle/admin3601jtunn/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/lessentielle/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/lessentielle/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/lessentielle/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/lessentielle/js/jquery/ui/themes/base/jquery.ui.core.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/lessentielle/js/jquery/ui/themes/base/jquery.ui.theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/lessentielle\\/admin3601jtunn\\/\";
var baseDir = \"\\/lessentielle\\/\";
var changeFormLanguageUrl = \"\\/lessentielle\\/admin3601jtunn\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=6bTrJsJiuKobdLkninx697kJc";
        // line 64
        echo "Ja4B5d-dlgz50kCNTQ\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/lessentielle/admin3601jtunn/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/js/admin.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/admin3601jtunn/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/js/tools.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/admin3601jtunn/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/modules";
        // line 83
        echo "/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/js/jquery/ui/jquery.ui.core.min.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/js/jquery/ui/jquery.ui.widget.min.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/js/jquery/ui/jquery.ui.mouse.min.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/js/jquery/ui/jquery.ui.sortable.min.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/lessentielle\\/admin3601jtunn\\/index.php?controller=AdminGamification&token=64504b282a3728363db97b0b3851b63f\";
            var current_id_tab = 11;
        </script>

";
        // line 96
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr admincategories\"
  data-base-url=\"/lessentielle/admin3601jtunn/index.php\"  data-token=\"6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminDashboard&amp;token=e57d901febcc6db73e51509cc8133f04\"></a>
      <span id=\"shop_version\">1.7.8.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminOrders&amp;token=667955fecbb2aa79f1aa553db1e492e3\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e7294ec77997f2d0d1a5fe6b5ba58a1e\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/lessentielle/admin3601jtunn/index.php/improve/modules/manage?token=d69b9fd7327fe71a770c6758d404a12b\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=7ededfcf1c7d0d49017dcca4414ea797\"
                 data-item=\"No";
        // line 131
        echo "uveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/lessentielle/admin3601jtunn/index.php/sell/catalog/products/new?token=d69b9fd7327fe71a770c6758d404a12b\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/lessentielle/admin3601jtunn/index.php/sell/catalog/categories/new?token=d69b9fd7327fe71a770c6758d404a12b\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminModules&amp;&amp;configure=tvcmsblog&amp;token=f297b1ca146f8a4c61692561b444eea4\"
                 data-item=\"ThemeVolty Settings\"
      >ThemeVolty Settings</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"6\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/categories/33/edit?-dlgz50kCNTQ\"
        data-post-link=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminQuickAccesses&token=4718ec10704c66516f25021030e5a576\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Cat&eacute;gories - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminQuickAccesses&token=4718ec10704c66516f25021030e5a576\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dro";
        // line 169
        echo "pdown-form collapsed\"
      method=\"post\"
      action=\"/lessentielle/admin3601jtunn/index.php?controller=AdminSearch&amp;token=1cac25070fc73ce414fbea0e6481cc41\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i cla";
        // line 187
        echo "ss=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
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
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Votre boutique est en mode de débogage.</strong></p><p class='text-left'>Tous les messages et erreurs PHP sont affichés. Lorsque vous n'en avez plus besoin, <strong>désactivez</strong> ce mode.</p>\"
             href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/performance/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Mode debug</span>
          </a>
        </div>
      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/lessentielle/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notificati";
        // line 228
        echo "ons-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
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
              Commandes<span id=\"_nb_new_orders_\"></span>
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
              Clients<span id=\"_nb_new_customers_\"></span>
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
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/lessentielle/admin3601jtunn/ind";
        // line 280
        echo "ex.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=f5288a12dcc90951331669f5504bbc88\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
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
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
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
      
      <div class=\"component\" id=\"header-employee-co";
        // line 327
        echo "ntainer\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/lessentielle/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir Paul</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/employees/1/edit?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> Place de marché de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;utm_mediu";
        // line 348
        echo "m=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centre d'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminLogin&amp;logout=1&amp;token=92b42af7d0c3d4b23aabce3948267712\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/employees/toggle-navigation?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminDashboard&amp;token=e57d901febcc6db73e51509cc8133f04\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/lessentielle/admin3601jtunn/index.php/sell/orders/?_token=6bTrJsJiuKo";
        // line 392
        echo "bdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/orders/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/orders/invoices/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/orders/cre";
        // line 422
        echo "dit-slips/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/orders/delivery-slips/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminCarts&amp;token=f5288a12dcc90951331669f5504bbc88\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/lessentielle/admin3601jtunn/index.php/sell/catalog/products?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                   ";
        // line 454
        echo "                                 <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/catalog/products?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/catalog/categories?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/catalog/monitoring/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                       ";
        // line 483
        echo "                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminAttributesGroups&amp;token=cb75b691f263bab9840214c3169f1ba3\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/catalog/brands/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/attachments/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Ad";
        // line 511
        echo "minCartRules&amp;token=7ededfcf1c7d0d49017dcca4414ea797\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/stocks/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/lessentielle/admin3601jtunn/index.php/sell/customers/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"";
        // line 543
        echo "subtab-AdminCustomers\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/customers/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/addresses/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminCustomerThreads&amp;token=29ef6cd0bda281d321e525b2d09100fd\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                     ";
        // line 573
        echo " 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminCustomerThreads&amp;token=29ef6cd0bda281d321e525b2d09100fd\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/customer-service/order-messages/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminReturn&amp;token=7b3686bfb7a2691bd7df8994ba96ad30\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/lessentielle/admin3601jtunn/index.";
        // line 604
        echo "php/modules/metrics/legacy/stats?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/modules/metrics/legacy/stats?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/modules/metrics?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
    ";
        // line 637
        echo "      
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/lessentielle/admin3601jtunn/index.php/improve/modules/manage?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/modules/manage?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/modules/a";
        // line 669
        echo "ddons/modules/catalog?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Catalogue de modules
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/lessentielle/admin3601jtunn/index.php/improve/design/themes/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/design/themes/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                                     ";
        // line 698
        echo "                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/modules/addons/themes/catalog?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/design/mail_theme/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Thème d&#039;email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/design/cms-pages/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/design/modules/positions/?_token=6bTrJsJiuKob";
        // line 726
        echo "dLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminImages&amp;token=85235cc2be4e4deb116bdbfeb5f6867d\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/modules/link-widget/list?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminCarriers&amp;token=2d21cccc32f67c7374523da23f01219d\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons s";
        // line 758
        echo "ub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminCarriers&amp;token=2d21cccc32f67c7374523da23f01219d\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/shipping/preferences/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"191\" id=\"subtab-AdminColissimoDashboard\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminColissimoDashboard&amp;token=20ea8d8eb5d95855f3a46be4c17b8b44\" class=\"link\"> Colissimo - Tableau de bord
                                </a>
                              </li>

                                                  ";
        // line 787
        echo "                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"192\" id=\"subtab-AdminColissimoAffranchissement\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminColissimoAffranchissement&amp;token=dafcf81f8b6f375b5101601b3ead6ba3\" class=\"link\"> Colissimo - Affranchissement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"193\" id=\"subtab-AdminColissimoDepositSlip\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminColissimoDepositSlip&amp;token=8c59c66ff7259f84d43305b50403dfa3\" class=\"link\"> Colissimo - Bordereaux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"194\" id=\"subtab-AdminColissimoColiship\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminColissimoColiship&amp;token=f41ddd7e7d1b8ead6f2e6084bf5bf33c\" class=\"link\"> Colissimo - Coliship
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"195\" id=\"subtab-AdminColissimoCustomsDocuments\">
                 ";
        // line 815
        echo "               <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminColissimoCustomsDocuments&amp;token=cf7d9102169933e82c8f344b16238b50\" class=\"link\"> Colissimo - Documents
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/lessentielle/admin3601jtunn/index.php/improve/payment/payment_methods?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/payment/payment_methods?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Modes de paiement
                                </a>
                              </li>

                                                                                  
                           ";
        // line 845
        echo "   
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/payment/preferences?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/lessentielle/admin3601jtunn/index.php/improve/international/localization/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/international/localization/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Localisation
";
        // line 874
        echo "                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/international/zones/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/international/taxes/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/international/translations/settings?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
             ";
        // line 907
        echo "     <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminPsfacebookModule&amp;token=ad026168f372ad01df4f1e80287af8cc\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminPsfacebookModule&amp;token=ad026168f372ad01df4f1e80287af8cc\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=21a1be23d40b8752701c92f64a01b84c\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
  ";
        // line 935
        echo "                                      </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"178\" id=\"subtab-Adminxprtdashboard\">
                    <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmspost&amp;token=6181726fda4239219cc08e24a2aba626\" class=\"link\">
                      <i class=\"material-icons mi-\"></i>
                      <span>
                      ThemeVolty Blog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-178\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"179\" id=\"subtab-Admintvcmspost\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmspost&amp;token=6181726fda4239219cc08e24a2aba626\" class=\"link\"> Blog Posts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"180\" id=\"subtab-Admintvcmscategory\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmscategory&amp;token=1a7765ea681b11576d64208e5768ef0a\" class=\"link\"> Blog Categ";
        // line 963
        echo "ories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-Admintvcmscomment\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmscomment&amp;token=070423957cb88809b281af9d23a7e0f7\" class=\"link\"> Blog Comments
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"182\" id=\"subtab-Admintvcmsimagetype\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsimagetype&amp;token=bca4b9d584bdc1591f4772b856322ad0\" class=\"link\"> Blog Image Type
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/lessentielle/admin3601jtunn/index.php/configure/shop/preferences/preferences?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class";
        // line 1000
        echo "=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/shop/preferences/preferences?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/shop/order-preferences/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/";
        // line 1030
        echo "lessentielle/admin3601jtunn/index.php/configure/shop/product-preferences/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/shop/customer-preferences/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/shop/contacts/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/shop/seo-urls/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                   ";
        // line 1060
        echo "                         
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminSearchConf&amp;token=396ba938245d6e67ffb98c4c32e8d345\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminGamification&amp;token=64504b282a3728363db97b0b3851b63f\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/system-information/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                      ";
        // line 1089
        echo "      </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/system-information/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/performance/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/administration/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-Admi";
        // line 1118
        echo "nEmails\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/emails/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/import/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/employees/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/sql-requests/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                          ";
        // line 1148
        echo "    
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/logs/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/webservice-keys/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/feature-flags/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Fonctionnalités Expérimentales
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"152\" id=\"tab-AdminThemeVolty\">
           ";
        // line 1180
        echo "     <span class=\"title\">ThemeVolty Extension</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"153\" id=\"subtab-AdminThemeVoltyModules\">
                    <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmscategorychainslider&amp;token=07c0259019f75fd02bf3b11c34ff0e41\" class=\"link\">
                      <i class=\"material-icons mi-\"></i>
                      <span>
                      ThemeVolty Configure
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-153\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"154\" id=\"subtab-Admintvcmscategorychainslider\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmscategorychainslider&amp;token=07c0259019f75fd02bf3b11c34ff0e41\" class=\"link\"> Category Chain Slider
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-Admintvcmscategoryproduct\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Adm";
        // line 1210
        echo "intvcmscategoryproduct&amp;token=463b3e189b310dd784bd3848e1b55ada\" class=\"link\"> Tab Category Product Slider
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-Admintvcmscustomcssjs\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmscustomcssjs&amp;token=ddfa9fd4c6cf781d8f8827a3f327a578\" class=\"link\"> Custom Css And Js
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-Admintvcmscustomerservices\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmscustomerservices&amp;token=cc225ec4af2be88d5256aa3e2b2bddae\" class=\"link\"> Customer Services
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"159\" id=\"subtab-Admintvcmsfooterlogo\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsfooterlogo&amp;token=c0868d23f0a71abc997bc187c076b837\" class=\"link\"> Footer Logo
                                </a>
                              </li>

                                                                                  
                              
         ";
        // line 1240
        echo "                                                   
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-Admintvcmsfooterproduct\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsfooterproduct&amp;token=a6605925fd5dab8b3fd7a239cd9a20a5\" class=\"link\"> Footer Product
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-Admintvcmspaymenticon\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmspaymenticon&amp;token=0bc0ad6408519e771eb13638f0b41754\" class=\"link\"> Payment Icon
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-Admintvcmsstockinfo\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsstockinfo&amp;token=707f5bfc06b103e3daf17eeccf392e57\" class=\"link\"> Stock Indicator
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-Admintvcmstabproducts\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmstabproducts&amp;token=c341d0a49d92bb10c";
        // line 1266
        echo "2c63001c035fb59\" class=\"link\"> Tab Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"164\" id=\"subtab-Admintvcmscategoryslider\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmscategoryslider&amp;token=60c47652d56eb4aad0d82c4f6928cb3a\" class=\"link\"> Category Slider
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"165\" id=\"subtab-Admintvcmswishlist\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmswishlist&amp;token=384a69b168dcbc91264c7a1c10983593\" class=\"link\"> Customer&#039;s Wishlist
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"166\" id=\"subtab-Admintvcmsinfinitescroll\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsinfinitescroll&amp;token=42216c0ed0a67b99cab4bc1e4ea9f98c\" class=\"link\"> Infinite Scroll
                                </a>
                              </li>

                                                                                  
                              
                                                            
      ";
        // line 1297
        echo "                        <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-Admintvcmsfootercategory\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsfootercategory&amp;token=939ad72f48961811e067e322dc59095a\" class=\"link\"> Footer Cateogry
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-Admintvcmsproductcomments\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsproductcomments&amp;token=ca53ba1ab1270b0d0e0f02efb1807cb2\" class=\"link\"> Product Comment
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-Admintvcmsleftsideofferbanner\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsleftsideofferbanner&amp;token=11396dccf63049ea17066154e9d959fd\" class=\"link\"> Left Side Offer Banner
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"171\" id=\"subtab-Admintvcmssizechart\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmssizechart&amp;token=5e1f6edc4e0cc5248626dd898978af97\" clas";
        // line 1322
        echo "s=\"link\"> Size Chart [Size/Chart/Table]
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"172\" id=\"subtab-Admintvcmsbrandlist\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsbrandlist&amp;token=bc287e725e72c21b3ddbb4530de0cb43\" class=\"link\"> Brand List
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"173\" id=\"subtab-Admintvcmsproductpopup\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsproductpopup&amp;token=2cbd2aa431d5301fc826316154c75bf0\" class=\"link\"> Product Popup
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"174\" id=\"subtab-Admintvcmsvideotab\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsvideotab&amp;token=52989600e82e9dde2f73aa1e6e6b8402\" class=\"link\"> Product Video
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"l";
        // line 1353
        echo "ink-leveltwo\" data-submenu=\"175\" id=\"subtab-Admintvcmstwoofferbanner\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmstwoofferbanner&amp;token=60352b3aae3fe556f48a6466ca0449fc\" class=\"link\"> Two Offer Banner
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"176\" id=\"subtab-Admintvcmsmegamenu\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsmegamenu&amp;token=d07b49dd5036c44a7150d09fc7ea2201\" class=\"link\"> Mega Menu
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"177\" id=\"subtab-Admintvcmstestimonial\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmstestimonial&amp;token=249c5a88d2d0f07c37abc4ca5794bce7\" class=\"link\"> Testimonial
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"183\" id=\"subtab-Admintvcmsblogdisplayposts\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsblogdisplayposts&amp;token=2d14e69c877b8ea28845e35251a77245\" class=\"link\"> Blog on Home Page
                                </a>
   ";
        // line 1380
        echo "                           </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"184\" id=\"subtab-Admintvcmsslider\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsslider&amp;token=2759e2f4481758e9e621d4bf7c5d4767\" class=\"link\"> Main Slider
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"185\" id=\"subtab-Admintvcmsmultibanner1\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsmultibanner1&amp;token=c92fa6e4a276bbcad5cc8897cadb4aa4\" class=\"link\"> MultiBanner 1
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"186\" id=\"subtab-Admintvcmsnewsletterpopup\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsnewsletterpopup&amp;token=d88d40841dddcaad3f0e7fa05cb70afd\" class=\"link\"> Newsletter Popup
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
               ";
        // line 1412
        echo "   <li class=\"link-levelone\" data-submenu=\"158\" id=\"subtab-Admintvcmscustomsetting\">
                    <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmscustomsetting&amp;token=539ef33191655d607bd7f187b3a23e2f\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Custom Setting
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Catalogue</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/lessentielle/admin3601jtunn/index.php/sell/catalog/categories?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" aria-current=\"page\">Catégories</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Modification : Cartes cadeaux          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help\" href=\"https://help.prestashop.com/fr/doc/AdminCategories?version=1.7.8.7&amp;country=fr\" title=\"Aide\">
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button clas";
        // line 1472
        echo "s=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help\" href=\"https://help.prestashop.com/fr/doc/AdminCategories?version=1.7.8.7&amp;country=fr\" title=\"Aide\">
              Aide
            </a>
                        </div>
    </div>
  </div>
  <!-- begin C:\\xampp\\htdocs\\lessentielle/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Modules et services recommandés',
        'Close': 'Fermer',
      },
      recommendedModulesUrl: '/lessentielle/admin3601jtunn/index.php/modules/addons/modules/recommended?tabClassName=AdminCategories&_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end C:\\xampp\\htdocs\\lessentielle/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1515
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminDashboard&amp;token=e57d901febcc6db73e51509cc8133f04\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=paul%40webforme.fr&amp;firstname=Paul&amp;lastname=Serrano&amp;website=http%3A%2F%2Flocalhost%2Flessentielle%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/lessentielle/admin3601jtunn/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
";
        // line 1563
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=paul%40webforme.fr&amp;firstname=Paul&amp;lastname=Serrano&amp;website=http%3A%2F%2Flocalhost%2Flessentielle%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button ";
        // line 1603
        echo "id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1623
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 96
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1515
    public function block_content_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1623
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__fcb0b7f91998cc1b4e975176571edb62be36e5395b9698cc31855e22f2089d6f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1889 => 1623,  1824 => 1515,  1791 => 96,  1776 => 1623,  1754 => 1603,  1712 => 1563,  1658 => 1515,  1613 => 1472,  1551 => 1412,  1517 => 1380,  1488 => 1353,  1455 => 1322,  1428 => 1297,  1395 => 1266,  1367 => 1240,  1335 => 1210,  1303 => 1180,  1269 => 1148,  1237 => 1118,  1206 => 1089,  1175 => 1060,  1143 => 1030,  1111 => 1000,  1072 => 963,  1042 => 935,  1012 => 907,  977 => 874,  946 => 845,  914 => 815,  884 => 787,  853 => 758,  819 => 726,  789 => 698,  758 => 669,  724 => 637,  689 => 604,  656 => 573,  624 => 543,  590 => 511,  560 => 483,  529 => 454,  495 => 422,  463 => 392,  417 => 348,  394 => 327,  345 => 280,  291 => 228,  248 => 187,  228 => 169,  188 => 131,  148 => 96,  133 => 83,  112 => 64,  88 => 42,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/lessentielle/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/lessentielle/img/app_icon.png\" />

<title>Modification : Cartes cadeaux • L\\'Essentielle</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminCategories\\';
    var iso_user = \\'fr\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'fr\\';
    var full_cldr_language_code = \\'fr-FR\\';
    var country_iso_code = \\'FR\\';
    var _PS_VERSION_ = \\'1.7.8.7\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'Une nouvelle commande a été passée sur votre boutique.\\';
    var order_number_msg = \\'Numéro de commande : \\';
    var total_msg = \\'Total : \\';
    var from_msg = \\'Du \\';
    var see_order_msg = \\'Afficher cette commande\\';
    var new_customer_msg = \\'Un nouveau client s\\\\\\'est inscrit sur votre boutique\\';
    var customer_name_msg = \\'Nom du client : \\';
    var new_msg = \\'Un nouveau message a été posté sur votre boutique.\\';
    var see_msg = \\'Lire le message\\';
    var token = \\'57fc0e6565b506bb5c164b1701a9ffad\\';
    var token_admin_orders = tokenAdminOrders = \\'667955fecbb2aa79f1aa553db1e492e3\\';
    var token_admin_customers = \\'428a82751f69b66dafc8bc9713262dc9\\';
    var token_admin_customer_threads = tokenAdminCustomerThreads = \\'29ef6cd0bda281d321e525b2d09100fd\\';
    var currentIndex = \\'index.php?controller=AdminCategories\\';
    var employee_token = \\'eb1891c314fb4fe8b91ecc36b3c34ed4\\';
    var choose_language_translate = \\'Choisissez la langue :\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/lessentielle/admin3601jtunn/index.php/improve/modules/catalog/recommended?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\\';
    var admin_notification_get_link = \\'/le' | raw }}{{ 'ssentielle/admin3601jtunn/index.php/common/notifications?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/lessentielle/admin3601jtunn/index.php/common/notifications/ack?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Mise à jour réussie\\';
    var errorLogin = \\'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.\\';
    var search_product_msg = \\'Rechercher un produit\\';
  </script>

      <link href=\"/lessentielle/admin3601jtunn/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/lessentielle/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/lessentielle/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/lessentielle/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/lessentielle/admin3601jtunn/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/lessentielle/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/lessentielle/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/lessentielle/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/lessentielle/js/jquery/ui/themes/base/jquery.ui.core.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/lessentielle/js/jquery/ui/themes/base/jquery.ui.theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/lessentielle\\\\/admin3601jtunn\\\\/\";
var baseDir = \"\\\\/lessentielle\\\\/\";
var changeFormLanguageUrl = \"\\\\/lessentielle\\\\/admin3601jtunn\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=6bTrJsJiuKobdLkninx697kJc' | raw }}{{ 'Ja4B5d-dlgz50kCNTQ\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\\\u20ac\",\"numberSymbols\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\\\u00a0\\\\u00a4\",\"negativePattern\":\"-#,##0.00\\\\u00a0\\\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/lessentielle/admin3601jtunn/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/js/admin.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/admin3601jtunn/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/js/tools.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/admin3601jtunn/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/modules' | raw }}{{ '/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/js/jquery/ui/jquery.ui.core.min.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/js/jquery/ui/jquery.ui.widget.min.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/js/jquery/ui/jquery.ui.mouse.min.js\"></script>
<script type=\"text/javascript\" src=\"/lessentielle/js/jquery/ui/jquery.ui.sortable.min.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\\\/\\\\/localhost\\\\/lessentielle\\\\/admin3601jtunn\\\\/index.php?controller=AdminGamification&token=64504b282a3728363db97b0b3851b63f\";
            var current_id_tab = 11;
        </script>

' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-fr admincategories\"
  data-base-url=\"/lessentielle/admin3601jtunn/index.php\"  data-token=\"6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminDashboard&amp;token=e57d901febcc6db73e51509cc8133f04\"></a>
      <span id=\"shop_version\">1.7.8.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminOrders&amp;token=667955fecbb2aa79f1aa553db1e492e3\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e7294ec77997f2d0d1a5fe6b5ba58a1e\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/lessentielle/admin3601jtunn/index.php/improve/modules/manage?token=d69b9fd7327fe71a770c6758d404a12b\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=7ededfcf1c7d0d49017dcca4414ea797\"
                 data-item=\"No' | raw }}{{ 'uveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/lessentielle/admin3601jtunn/index.php/sell/catalog/products/new?token=d69b9fd7327fe71a770c6758d404a12b\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/lessentielle/admin3601jtunn/index.php/sell/catalog/categories/new?token=d69b9fd7327fe71a770c6758d404a12b\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminModules&amp;&amp;configure=tvcmsblog&amp;token=f297b1ca146f8a4c61692561b444eea4\"
                 data-item=\"ThemeVolty Settings\"
      >ThemeVolty Settings</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"6\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/categories/33/edit?-dlgz50kCNTQ\"
        data-post-link=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminQuickAccesses&token=4718ec10704c66516f25021030e5a576\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Cat&eacute;gories - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l\\'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminQuickAccesses&token=4718ec10704c66516f25021030e5a576\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dro' | raw }}{{ 'pdown-form collapsed\"
      method=\"post\"
      action=\"/lessentielle/admin3601jtunn/index.php?controller=AdminSearch&amp;token=1cac25070fc73ce414fbea0e6481cc41\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i cla' | raw }}{{ 'ss=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=\\'text-left\\'><strong>Votre boutique est en mode de débogage.</strong></p><p class=\\'text-left\\'>Tous les messages et erreurs PHP sont affichés. Lorsque vous n\\'en avez plus besoin, <strong>désactivez</strong> ce mode.</p>\"
             href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/performance/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Mode debug</span>
          </a>
        </div>
      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/lessentielle/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notificati' | raw }}{{ 'ons-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
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
              Commandes<span id=\"_nb_new_orders_\"></span>
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
              Clients<span id=\"_nb_new_customers_\"></span>
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
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/lessentielle/admin3601jtunn/ind' | raw }}{{ 'ex.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=f5288a12dcc90951331669f5504bbc88\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s\\'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l\\'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l\\'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-co' | raw }}{{ 'ntainer\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/lessentielle/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir Paul</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/employees/1/edit?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> Place de marché de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;utm_mediu' | raw }}{{ 'm=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centre d\\'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminLogin&amp;logout=1&amp;token=92b42af7d0c3d4b23aabce3948267712\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/employees/toggle-navigation?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminDashboard&amp;token=e57d901febcc6db73e51509cc8133f04\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/lessentielle/admin3601jtunn/index.php/sell/orders/?_token=6bTrJsJiuKo' | raw }}{{ 'bdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/orders/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/orders/invoices/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/orders/cre' | raw }}{{ 'dit-slips/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/orders/delivery-slips/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminCarts&amp;token=f5288a12dcc90951331669f5504bbc88\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/lessentielle/admin3601jtunn/index.php/sell/catalog/products?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                   ' | raw }}{{ '                                 <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/catalog/products?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/catalog/categories?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/catalog/monitoring/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                       ' | raw }}{{ '                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminAttributesGroups&amp;token=cb75b691f263bab9840214c3169f1ba3\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/catalog/brands/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/attachments/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Ad' | raw }}{{ 'minCartRules&amp;token=7ededfcf1c7d0d49017dcca4414ea797\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/stocks/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/lessentielle/admin3601jtunn/index.php/sell/customers/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"' | raw }}{{ 'subtab-AdminCustomers\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/customers/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/addresses/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminCustomerThreads&amp;token=29ef6cd0bda281d321e525b2d09100fd\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                     ' | raw }}{{ ' 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminCustomerThreads&amp;token=29ef6cd0bda281d321e525b2d09100fd\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/sell/customer-service/order-messages/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminReturn&amp;token=7b3686bfb7a2691bd7df8994ba96ad30\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/lessentielle/admin3601jtunn/index.' | raw }}{{ 'php/modules/metrics/legacy/stats?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/modules/metrics/legacy/stats?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/modules/metrics?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
    ' | raw }}{{ '      
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/lessentielle/admin3601jtunn/index.php/improve/modules/manage?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/modules/manage?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/modules/a' | raw }}{{ 'ddons/modules/catalog?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Catalogue de modules
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/lessentielle/admin3601jtunn/index.php/improve/design/themes/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/design/themes/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                                     ' | raw }}{{ '                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/modules/addons/themes/catalog?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/design/mail_theme/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Thème d&#039;email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/design/cms-pages/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/design/modules/positions/?_token=6bTrJsJiuKob' | raw }}{{ 'dLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminImages&amp;token=85235cc2be4e4deb116bdbfeb5f6867d\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/modules/link-widget/list?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminCarriers&amp;token=2d21cccc32f67c7374523da23f01219d\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons s' | raw }}{{ 'ub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminCarriers&amp;token=2d21cccc32f67c7374523da23f01219d\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/shipping/preferences/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"191\" id=\"subtab-AdminColissimoDashboard\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminColissimoDashboard&amp;token=20ea8d8eb5d95855f3a46be4c17b8b44\" class=\"link\"> Colissimo - Tableau de bord
                                </a>
                              </li>

                                                  ' | raw }}{{ '                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"192\" id=\"subtab-AdminColissimoAffranchissement\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminColissimoAffranchissement&amp;token=dafcf81f8b6f375b5101601b3ead6ba3\" class=\"link\"> Colissimo - Affranchissement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"193\" id=\"subtab-AdminColissimoDepositSlip\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminColissimoDepositSlip&amp;token=8c59c66ff7259f84d43305b50403dfa3\" class=\"link\"> Colissimo - Bordereaux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"194\" id=\"subtab-AdminColissimoColiship\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminColissimoColiship&amp;token=f41ddd7e7d1b8ead6f2e6084bf5bf33c\" class=\"link\"> Colissimo - Coliship
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"195\" id=\"subtab-AdminColissimoCustomsDocuments\">
                 ' | raw }}{{ '               <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminColissimoCustomsDocuments&amp;token=cf7d9102169933e82c8f344b16238b50\" class=\"link\"> Colissimo - Documents
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/lessentielle/admin3601jtunn/index.php/improve/payment/payment_methods?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/payment/payment_methods?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Modes de paiement
                                </a>
                              </li>

                                                                                  
                           ' | raw }}{{ '   
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/payment/preferences?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/lessentielle/admin3601jtunn/index.php/improve/international/localization/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/international/localization/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Localisation
' | raw }}{{ '                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/international/zones/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/international/taxes/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/improve/international/translations/settings?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
             ' | raw }}{{ '     <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminPsfacebookModule&amp;token=ad026168f372ad01df4f1e80287af8cc\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminPsfacebookModule&amp;token=ad026168f372ad01df4f1e80287af8cc\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=21a1be23d40b8752701c92f64a01b84c\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
  ' | raw }}{{ '                                      </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"178\" id=\"subtab-Adminxprtdashboard\">
                    <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmspost&amp;token=6181726fda4239219cc08e24a2aba626\" class=\"link\">
                      <i class=\"material-icons mi-\"></i>
                      <span>
                      ThemeVolty Blog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-178\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"179\" id=\"subtab-Admintvcmspost\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmspost&amp;token=6181726fda4239219cc08e24a2aba626\" class=\"link\"> Blog Posts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"180\" id=\"subtab-Admintvcmscategory\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmscategory&amp;token=1a7765ea681b11576d64208e5768ef0a\" class=\"link\"> Blog Categ' | raw }}{{ 'ories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-Admintvcmscomment\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmscomment&amp;token=070423957cb88809b281af9d23a7e0f7\" class=\"link\"> Blog Comments
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"182\" id=\"subtab-Admintvcmsimagetype\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsimagetype&amp;token=bca4b9d584bdc1591f4772b856322ad0\" class=\"link\"> Blog Image Type
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/lessentielle/admin3601jtunn/index.php/configure/shop/preferences/preferences?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class' | raw }}{{ '=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/shop/preferences/preferences?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/shop/order-preferences/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/' | raw }}{{ 'lessentielle/admin3601jtunn/index.php/configure/shop/product-preferences/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/shop/customer-preferences/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/shop/contacts/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/shop/seo-urls/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                   ' | raw }}{{ '                         
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminSearchConf&amp;token=396ba938245d6e67ffb98c4c32e8d345\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminGamification&amp;token=64504b282a3728363db97b0b3851b63f\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/system-information/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                      ' | raw }}{{ '      </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/system-information/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/performance/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/administration/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-Admi' | raw }}{{ 'nEmails\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/emails/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/import/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/employees/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/sql-requests/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                          ' | raw }}{{ '    
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/logs/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/webservice-keys/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/lessentielle/admin3601jtunn/index.php/configure/advanced/feature-flags/?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" class=\"link\"> Fonctionnalités Expérimentales
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"152\" id=\"tab-AdminThemeVolty\">
           ' | raw }}{{ '     <span class=\"title\">ThemeVolty Extension</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"153\" id=\"subtab-AdminThemeVoltyModules\">
                    <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmscategorychainslider&amp;token=07c0259019f75fd02bf3b11c34ff0e41\" class=\"link\">
                      <i class=\"material-icons mi-\"></i>
                      <span>
                      ThemeVolty Configure
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-153\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"154\" id=\"subtab-Admintvcmscategorychainslider\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmscategorychainslider&amp;token=07c0259019f75fd02bf3b11c34ff0e41\" class=\"link\"> Category Chain Slider
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-Admintvcmscategoryproduct\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Adm' | raw }}{{ 'intvcmscategoryproduct&amp;token=463b3e189b310dd784bd3848e1b55ada\" class=\"link\"> Tab Category Product Slider
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-Admintvcmscustomcssjs\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmscustomcssjs&amp;token=ddfa9fd4c6cf781d8f8827a3f327a578\" class=\"link\"> Custom Css And Js
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-Admintvcmscustomerservices\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmscustomerservices&amp;token=cc225ec4af2be88d5256aa3e2b2bddae\" class=\"link\"> Customer Services
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"159\" id=\"subtab-Admintvcmsfooterlogo\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsfooterlogo&amp;token=c0868d23f0a71abc997bc187c076b837\" class=\"link\"> Footer Logo
                                </a>
                              </li>

                                                                                  
                              
         ' | raw }}{{ '                                                   
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-Admintvcmsfooterproduct\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsfooterproduct&amp;token=a6605925fd5dab8b3fd7a239cd9a20a5\" class=\"link\"> Footer Product
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-Admintvcmspaymenticon\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmspaymenticon&amp;token=0bc0ad6408519e771eb13638f0b41754\" class=\"link\"> Payment Icon
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-Admintvcmsstockinfo\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsstockinfo&amp;token=707f5bfc06b103e3daf17eeccf392e57\" class=\"link\"> Stock Indicator
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-Admintvcmstabproducts\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmstabproducts&amp;token=c341d0a49d92bb10c' | raw }}{{ '2c63001c035fb59\" class=\"link\"> Tab Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"164\" id=\"subtab-Admintvcmscategoryslider\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmscategoryslider&amp;token=60c47652d56eb4aad0d82c4f6928cb3a\" class=\"link\"> Category Slider
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"165\" id=\"subtab-Admintvcmswishlist\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmswishlist&amp;token=384a69b168dcbc91264c7a1c10983593\" class=\"link\"> Customer&#039;s Wishlist
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"166\" id=\"subtab-Admintvcmsinfinitescroll\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsinfinitescroll&amp;token=42216c0ed0a67b99cab4bc1e4ea9f98c\" class=\"link\"> Infinite Scroll
                                </a>
                              </li>

                                                                                  
                              
                                                            
      ' | raw }}{{ '                        <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-Admintvcmsfootercategory\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsfootercategory&amp;token=939ad72f48961811e067e322dc59095a\" class=\"link\"> Footer Cateogry
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-Admintvcmsproductcomments\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsproductcomments&amp;token=ca53ba1ab1270b0d0e0f02efb1807cb2\" class=\"link\"> Product Comment
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-Admintvcmsleftsideofferbanner\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsleftsideofferbanner&amp;token=11396dccf63049ea17066154e9d959fd\" class=\"link\"> Left Side Offer Banner
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"171\" id=\"subtab-Admintvcmssizechart\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmssizechart&amp;token=5e1f6edc4e0cc5248626dd898978af97\" clas' | raw }}{{ 's=\"link\"> Size Chart [Size/Chart/Table]
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"172\" id=\"subtab-Admintvcmsbrandlist\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsbrandlist&amp;token=bc287e725e72c21b3ddbb4530de0cb43\" class=\"link\"> Brand List
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"173\" id=\"subtab-Admintvcmsproductpopup\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsproductpopup&amp;token=2cbd2aa431d5301fc826316154c75bf0\" class=\"link\"> Product Popup
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"174\" id=\"subtab-Admintvcmsvideotab\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsvideotab&amp;token=52989600e82e9dde2f73aa1e6e6b8402\" class=\"link\"> Product Video
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"l' | raw }}{{ 'ink-leveltwo\" data-submenu=\"175\" id=\"subtab-Admintvcmstwoofferbanner\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmstwoofferbanner&amp;token=60352b3aae3fe556f48a6466ca0449fc\" class=\"link\"> Two Offer Banner
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"176\" id=\"subtab-Admintvcmsmegamenu\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsmegamenu&amp;token=d07b49dd5036c44a7150d09fc7ea2201\" class=\"link\"> Mega Menu
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"177\" id=\"subtab-Admintvcmstestimonial\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmstestimonial&amp;token=249c5a88d2d0f07c37abc4ca5794bce7\" class=\"link\"> Testimonial
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"183\" id=\"subtab-Admintvcmsblogdisplayposts\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsblogdisplayposts&amp;token=2d14e69c877b8ea28845e35251a77245\" class=\"link\"> Blog on Home Page
                                </a>
   ' | raw }}{{ '                           </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"184\" id=\"subtab-Admintvcmsslider\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsslider&amp;token=2759e2f4481758e9e621d4bf7c5d4767\" class=\"link\"> Main Slider
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"185\" id=\"subtab-Admintvcmsmultibanner1\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsmultibanner1&amp;token=c92fa6e4a276bbcad5cc8897cadb4aa4\" class=\"link\"> MultiBanner 1
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"186\" id=\"subtab-Admintvcmsnewsletterpopup\">
                                <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmsnewsletterpopup&amp;token=d88d40841dddcaad3f0e7fa05cb70afd\" class=\"link\"> Newsletter Popup
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
               ' | raw }}{{ '   <li class=\"link-levelone\" data-submenu=\"158\" id=\"subtab-Admintvcmscustomsetting\">
                    <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=Admintvcmscustomsetting&amp;token=539ef33191655d607bd7f187b3a23e2f\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Custom Setting
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Catalogue</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/lessentielle/admin3601jtunn/index.php/sell/catalog/categories?_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\" aria-current=\"page\">Catégories</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Modification : Cartes cadeaux          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help\" href=\"https://help.prestashop.com/fr/doc/AdminCategories?version=1.7.8.7&amp;country=fr\" title=\"Aide\">
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button clas' | raw }}{{ 's=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help\" href=\"https://help.prestashop.com/fr/doc/AdminCategories?version=1.7.8.7&amp;country=fr\" title=\"Aide\">
              Aide
            </a>
                        </div>
    </div>
  </div>
  <!-- begin C:\\\\xampp\\\\htdocs\\\\lessentielle/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        \\'Recommended Modules and Services\\': \\'Modules et services recommandés\\',
        \\'Close\\': \\'Fermer\\',
      },
      recommendedModulesUrl: \\'/lessentielle/admin3601jtunn/index.php/modules/addons/modules/recommended?tabClassName=AdminCategories&_token=6bTrJsJiuKobdLkninx697kJcJa4B5d-dlgz50kCNTQ\\',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end C:\\\\xampp\\\\htdocs\\\\lessentielle/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n\\'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/lessentielle/admin3601jtunn/index.php?controller=AdminDashboard&amp;token=e57d901febcc6db73e51509cc8133f04\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=paul%40webforme.fr&amp;firstname=Paul&amp;lastname=Serrano&amp;website=http%3A%2F%2Flocalhost%2Flessentielle%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/lessentielle/admin3601jtunn/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d\\'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
' | raw }}{{ '\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n\\'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class=\\'text-justify\\'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=paul%40webforme.fr&amp;firstname=Paul&amp;lastname=Serrano&amp;website=http%3A%2F%2Flocalhost%2Flessentielle%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button ' | raw }}{{ 'id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__fcb0b7f91998cc1b4e975176571edb62be36e5395b9698cc31855e22f2089d6f", "");
    }
}
