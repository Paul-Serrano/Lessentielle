<?php
/**
 * pm_advancedcookiebanner
 *
 * @author    Presta-Module.com <support@presta-module.com> - http://www.presta-module.com
 * @copyright Presta-Module 2021 - http://www.presta-module.com
 * @license   Commercial
 * @version   2.1.6
 *
 *           ____     __  __
 *          |  _ \   |  \/  |
 *          | |_) |  | |\/| |
 *          |  __/   | |  | |
 *          |_|      |_|  |_|
 */

if (!defined('_PS_VERSION_')) {
    exit;
}
include_once(_PS_ROOT_DIR_ . '/modules/pm_advancedcookiebanner/class/AcbCookie.php');
include_once(_PS_ROOT_DIR_ . '/modules/pm_advancedcookiebanner/lib/crawler-detect/CrawlerDetect.php');
class pm_advancedcookiebanner extends Module
{
    protected $config_form = false;
    public static $module_prefix = 'ACB';
    protected $_copyright_link = array(
        'link'    => '',
        'img'    => '//www.presta-module.com/img/logo-module.JPG'
    );
    protected $defaultContentClasses = 'col-xs-12 col-sm-10 col-md-10 col-lg-10';
    protected $defaultButtonClasses = 'col-xs-12 col-sm-2 col-md-2 col-lg-2';
    protected $defaultButtonColor = '#009ad0';
    protected $defaultButtonColor17 = '#2fb5d2';
    const ADVANCED_CSS_FILE = 'views/css/pm_advancedcookiebanner_advanced.css';
    const HISTORIZATION_TABLE_SQL_INSTALL = 'sql/install_history_table.sql';
    const REMOVED_COOKIES_FAQ_URL = 'https://faq.presta-module.com/faq/454';
    public function __construct()
    {
        $this->name = 'pm_advancedcookiebanner';
        $this->tab = 'front_office_features';
        $this->version = '2.1.6';
        $this->author = 'Presta-Module';
        $this->need_instance = 0;
        $this->bootstrap = true;
        $this->module_key = '314ba095714c0f077d7b38b4fd24efbb';
        $this->default_texts_button = array(
            'bg' => 'Кликвайки върху този бутон, вие приемате нашите Общи условия.',
            'cs' => 'Kliknutím na toto tlačítko souhlasíte s našimi smluvními podmínkami.',
            'da' => 'ed at klikke på denne knap accepterer du vores vilkår og betingelser.',
            'de' => 'Mit einem Klick auf diesen Button akzeptieren Sie unsere Allgemeinen Geschäftsbedingungen.',
            'et' => 'Sellele nupule klõpsates nõustute meie tingimustega.',
            'el' => 'Κάνοντας κλικ σε αυτό το κουμπί, αποδέχεστε τους όρους και τις προϋποθέσεις μας.',
            'en' => 'By clicking on this button, you accept our terms and conditions.',
            'es' => 'Al hacer clic en este botón, acepta nuestros términos y condiciones.',
            'fr' => 'En cliquant sur ce bouton, vous acceptez nos conditions générales.',
            'ga' => 'Trí chliceáil ar an gcnaipe seo, glacann tú lenár dtéarmaí agus na coinníollacha.',
            'hr' => 'Klikom na ovaj gumb prihvaćate naše uvjete i odredbe.',
            'it' => 'Cliccando su questo pulsante, accetti i nostri termini e condizioni.',
            'lv' => 'Noklikšķinot uz šīs pogas, jūs piekrītat mūsu noteikumiem un nosacījumiem.',
            'lt' => 'Spustelėdami šį mygtuką, sutinkate su mūsų taisyklėmis ir nuostatomis.',
            'hu' => 'A gombra kattintva elfogadja a feltételeinket.',
            'mt' => 'Billi tikklikkja fuq din il-buttuna, taċċetta t-termini u l-kundizzjonijiet tagħna.',
            'nl' => 'Door op deze knop te klikken, gaat u akkoord met onze algemene voorwaarden.',
            'pl' => 'Klikając ten przycisk, akceptujesz nasze warunki.',
            'pt' => 'Ao clicar neste botão, você aceita nossos termos e condições.',
            'ro' => 'Făcând clic pe acest buton, acceptați termenii și condițiile noastre.',
            'sk' => 'Kliknutím na toto tlačidlo akceptujete naše zmluvné podmienky.',
            'si' => 'S klikom na ta gumb sprejmete naše pogoje in pogoje.',
            'fi' => 'Napsauttamalla tätä painiketta hyväksyt ehdot ja ehdot.',
            'sv' => 'Genom att klicka på den här knappen accepterar du våra användarvillkor.',
        );
        $languagesAliases = array(
            'gl' => 'es',
            'ca' => 'es',
            'eu' => 'es',
            'ag' => 'es',
            've' => 'es',
            'mx' => 'es',
            'pe' => 'es',
            'cb' => 'es',
            'br' => 'pt',
        );
        $this->defaultExclusionList = array(
            'ganalytics',
            'ps_ganalytics',
            'gadwords',
            'ps_gadwords',
            'blocksharefb',
            'socialsharing',
            'ps_socialsharing',
            'socialfollow',
            'ps_socialfollow',
            'sharebuttons',
            'ps_sharebuttons',
            'blockfacebook',
            'ps_blockfacebook',
        );
        foreach ($languagesAliases as $isoLang => $aliasIsoLang) {
            $this->default_texts_button[$isoLang] = $this->default_texts_button[$aliasIsoLang];
        }
        parent::__construct();
        $this->displayName = $this->l('Advanced Cookie Banner');
        $this->description = $this->l('Add the best cookie approval experience to your shop, and easily block cookies');
        $this->ps_versions_compliancy = array('min' => '1.5.5.0', 'max' => '1.7.99.99');
        $doc_url_tab = array();
        $doc_url_tab['fr'] = '#/fr/advanced-cookie-banner/';
        $doc_url_tab['en'] = '#/en/advanced-cookie-banner-2/';
        $doc_url = $doc_url_tab['en'];
        if ($this->context->language->iso_code == 'fr') {
            $doc_url = $doc_url_tab['fr'];
        }
        $this->_support_link = array(
            
            array('link' => 'https://addons.prestashop.com/contact-form.php?id_product=24853', 'target' => '_blank', 'label' => $this->l('Support contact')),
        );
    }
    public function install()
    {
        Configuration::updateValue('PM_'.self::$module_prefix.'_BG_COLOR', '#000000');
        Configuration::updateValue('PM_'.self::$module_prefix.'_FONT_COLOR', '#ffffff');
        Configuration::updateValue('PM_'.self::$module_prefix.'_FONT_SIZE', '15');
        Configuration::updateValue('PM_'.self::$module_prefix.'_TEXT_ALIGN', 'left');
        Configuration::updateValue('PM_'.self::$module_prefix.'_BORDER_COLOR', '#ffffff');
        Configuration::updateValue('PM_'.self::$module_prefix.'_BORDER_SIZE', '0');
        Configuration::updateValue('PM_'.self::$module_prefix.'_POSITION', 2);
        Configuration::updateValue('PM_'.self::$module_prefix.'_OPACITY', '75');
        Configuration::updateValue('PM_'.self::$module_prefix.'_BUTTON_FONT_SIZE', '14');
        Configuration::updateValue('PM_'.self::$module_prefix.'_BUTTON_FONT_COLOR', '#ffffff');
        Configuration::updateValue('PM_'.self::$module_prefix.'_BUTTON_BG_COLOR', (version_compare(_PS_VERSION_, '1.7.0.0', '>=') ? $this->defaultButtonColor17 : $this->defaultButtonColor));
        Configuration::updateValue('PM_'.self::$module_prefix.'_CLASSES_CONTENT', $this->defaultContentClasses);
        Configuration::updateValue('PM_'.self::$module_prefix.'_CLASSES_BUTTON', $this->defaultButtonClasses);
        Configuration::updateValue('PM_'.self::$module_prefix.'_CMS', 0);
        Configuration::updateValue('PM_'.self::$module_prefix.'_CONFIG_MODE', 0);
        Configuration::updateValue('PM_'.self::$module_prefix.'_GDPR_MODE', 1);
        Configuration::updateValue('PM_'.self::$module_prefix.'_CMS_LINK_LABEL', '');
        Configuration::updateValue('PM_'.self::$module_prefix.'_REMOVE_LIST', Tools::jsonEncode(array()));
        Configuration::updateValue('PM_'.self::$module_prefix.'_MODULES_LIST', Tools::jsonEncode($this->defaultExclusionList));
        Configuration::updateValue('PM_'.self::$module_prefix.'_MODULES_ANALYTICS', Tools::jsonEncode(array()));
        Configuration::updateValue('PM_'.self::$module_prefix.'_MODULES_MARKETING', Tools::jsonEncode(array()));
        $this->updateTexts();
        $this->installDB();
        $this->checkIfModuleIsUpdate(true, false);
        return parent::install() &&
        $this->registerHook('moduleRoutes') &&
        $this->registerHook('displayBackOfficeHeader') &&
        $this->registerHook('displayHeader') &&
        $this->registerHook('displayFooter') &&
        $this->registerHook('actionObjectLanguageAddAfter') &&
        $this->registerHook('actionAdminControllerSetMedia');
    }
    public function uninstall()
    {
        Configuration::deleteByName('PM_'.self::$module_prefix.'_BG_COLOR');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_FONT_COLOR');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_FONT_SIZE');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_TEXT_ALIGN');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_BORDER_COLOR');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_BORDER_SIZE');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_POSITION');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_OPACITY');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_BUTTON_FONT_SIZE');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_BUTTON_FONT_COLOR');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_BUTTON_BG_COLOR');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_CONTENT');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_CLASSES_CONTENT');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_CLASSES_BUTTON');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_CMS');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_CONFIG_MODE');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_GDPR_MODE');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_CMS_LINK_LABEL');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_REMOVE_LIST');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_MODULES_LIST');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_MODULES_ANALYTICS');
        Configuration::deleteByName('PM_'.self::$module_prefix.'_MODULES_MARKETING');
        return parent::uninstall();
    }
    public function installDB()
    {
        if (!Tools::file_exists_cache(dirname(__FILE__) . '/' . self::HISTORIZATION_TABLE_SQL_INSTALL)) {
            return (false);
        } elseif (!$sql = Tools::file_get_contents(dirname(__FILE__) . '/' . self::HISTORIZATION_TABLE_SQL_INSTALL)) {
            return (false);
        }
        $sql = str_replace('PREFIX_', _DB_PREFIX_, $sql);
        $sql = str_replace('MYSQL_ENGINE', _MYSQL_ENGINE_, $sql);
        $sql = preg_split("/;\s*[\r\n]+/", $sql);
        foreach ($sql as $query) {
            if (empty($query)) {
                continue;
            }
            if (!Db::getInstance()->Execute(trim($query))) {
                return (false);
            }
        }
        return true;
    }
    public function checkIfModuleIsUpdate($updateDb = false, $displayConfirm = true)
    {
        $isUpdate = true;
        $currentModuleLastVersion = Configuration::get('PM_' . self::$module_prefix . '_LAST_VERSION', false);
        if (!$updateDb && $this->version != $currentModuleLastVersion) {
            return false;
        }
        if ($updateDb) {
            $newHooksList = array(
                'actionAdminControllerSetMedia',
            );
            foreach ($newHooksList as $newHookName) {
                if (!$this->isRegisteredInHook($newHookName)) {
                    $this->registerHook($newHookName);
                }
            }
            Configuration::updateValue('PM_' . self::$module_prefix . '_LAST_VERSION', $this->version);
            $this->installDB();
            if ($displayConfirm) {
                $this->context->controller->confirmations[] = $this->l('Module updated successfully');
            }
        }
        return $isUpdate;
    }
    protected function showRating($show = false)
    {
        $dismiss = (int)Configuration::getGlobalValue('PM_'.self::$module_prefix.'_DISMISS_RATING');
        if ($show && $dismiss != 1 && $this->getNbDaysModuleUsage() >= 3) {
            return $this->fetchTemplate('core/rating.tpl');
        }
        return '';
    }
    private function getNbDaysModuleUsage()
    {
        $sql = 'SELECT DATEDIFF(NOW(),date_add)
                FROM '._DB_PREFIX_.'configuration
                WHERE name = \''.pSQL('PM_'.self::$module_prefix.'_LAST_VERSION').'\'
                ORDER BY date_add ASC';
        return (int)Db::getInstance()->getValue($sql);
    }
    protected function fetchTemplate($tpl, $customVars = array(), $configOptions = array())
    {
        $this->context->smarty->assign(array(
            'ps_major_version' => Tools::substr(str_replace('.', '', _PS_VERSION_), 0, 2),
            'module_name' => $this->name,
            'module_path' => $this->_path,
            'current_iso_lang' => $this->context->language->iso_code,
            'current_id_lang' => (int)$this->context->language->id,
            'options' => $configOptions,
        ));
        if (sizeof($customVars)) {
            $this->context->smarty->assign($customVars);
        }
        return $this->context->smarty->fetch(_PS_MODULE_DIR_ . $this->name . '/views/templates/admin/' . $tpl);
    }
    
    private function getPMdata()
    {
        $param = array();
        $param[] = 'ver-'._PS_VERSION_;
        $param[] = 'current-'.$this->name;
        
        $result = $this->getPMAddons();
        if ($result && is_array($result) && sizeof($result)) {
            foreach ($result as $moduleName => $moduleVersion) {
                $param[] = $moduleName . '-' . $moduleVersion;
            }
        }
        return $this->getDataSerialized(implode('|', $param));
    }
    private function getPMAddons()
    {
        $pmAddons = array();
        $result = Db::getInstance()->ExecuteS('SELECT DISTINCT name FROM '._DB_PREFIX_.'module WHERE name LIKE "pm_%"');
        if ($result && is_array($result) && sizeof($result)) {
            foreach ($result as $module) {
                $instance = Module::getInstanceByName($module['name']);
                if ($instance && isset($instance->version)) {
                    $pmAddons[$module['name']] = $instance->version;
                }
            }
        }
        return $pmAddons;
    }
    private function getDataSerialized($data, $type = 'base64')
    {
        if (is_array($data)) {
            return array_map($type . '_encode', array($data));
        } else {
            return current(array_map($type . '_encode', array($data)));
        }
    }
    private function doHttpRequest($data = array(), $c = 'prestashop', $s = 'api.addons')
    {
        $data = array_merge(array(
            'version' => _PS_VERSION_,
            'iso_lang' => Tools::strtolower($this->context->language->iso_code),
            'iso_code' => Tools::strtolower(Country::getIsoById(Configuration::get('PS_COUNTRY_DEFAULT'))),
            'module_key' => $this->module_key,
            'method' => 'contributor',
            'action' => 'all_products',
        ), $data);
        $postData = http_build_query($data);
        $context = stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'content' => $postData,
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'timeout' => 15,
            )
        ));
        $response = Tools::file_get_contents('https://' . $s . '.' . $c . '.com', false, $context);
        if (empty($response)) {
            return false;
        }
        $responseToJson = Tools::jsonDecode($response);
        if (empty($responseToJson)) {
            return false;
        }
        return $responseToJson;
    }
    private function getAddonsModulesFromApi()
    {
        $modules = Configuration::get('PM_' . self::$module_prefix . '_AM');
        $modules_date = Configuration::get('PM_' . self::$module_prefix . '_AMD');
        if ($modules && strtotime('+2 day', $modules_date) > time()) {
            return Tools::jsonDecode($modules, true);
        }
        $jsonResponse = $this->doHttpRequest();
        if (empty($jsonResponse->products)) {
            return array();
        }
        $dataToStore = array();
        foreach ($jsonResponse->products as $addonsEntry) {
            $dataToStore[(int)$addonsEntry->id] = array(
                'name' => $addonsEntry->name,
                'displayName' => $addonsEntry->displayName,
                'url' => $addonsEntry->url,
                'compatibility' => $addonsEntry->compatibility,
                'version' => $addonsEntry->version,
                'description' => $addonsEntry->description,
            );
        }
        Configuration::updateValue('PM_' . self::$module_prefix . '_AM', Tools::jsonEncode($dataToStore));
        Configuration::updateValue('PM_' . self::$module_prefix . '_AMD', time());
        return Tools::jsonDecode(Configuration::get('PM_' . self::$module_prefix . '_AM'), true);
    }
    private function getPMModulesFromApi()
    {
        $modules = Configuration::get('PM_' . self::$module_prefix . '_PMM');
        $modules_date = Configuration::get('PM_' . self::$module_prefix . '_PMMD');
        if ($modules && strtotime('+2 day', $modules_date) > time()) {
            return Tools::jsonDecode($modules, true);
        }
        $jsonResponse = $this->doHttpRequest(array('list' => $this->getPMAddons()), 'presta-module', 'api-addons');
        if (empty($jsonResponse)) {
            return array();
        }
        Configuration::updateValue('PM_' . self::$module_prefix . '_PMM', Tools::jsonEncode($jsonResponse));
        Configuration::updateValue('PM_' . self::$module_prefix . '_PMMD', time());
        return Tools::jsonDecode(Configuration::get('PM_' . self::$module_prefix . '_PMM'), true);
    }
    private function shuffleArray(&$a)
    {
        if (is_array($a) && sizeof($a)) {
            $ks = array_keys($a);
            shuffle($ks);
            $new = array();
            foreach ($ks as $k) {
                $new[$k] = $a[$k];
            }
            $a = $new;
            return true;
        }
        return false;
    }
    private function displaySupport()
    {
        $pm_addons_products = $this->getAddonsModulesFromApi();
        $pm_products = $this->getPMModulesFromApi();
        if (!is_array($pm_addons_products)) {
            $pm_addons_products = array();
        }
        if (!is_array($pm_products)) {
            $pm_products = array();
        }
        $this->shuffleArray($pm_addons_products);
        if (is_array($pm_addons_products)) {
            if (!empty($pm_products['ignoreList']) && is_array($pm_products['ignoreList']) && sizeof($pm_products['ignoreList'])) {
                foreach ($pm_products['ignoreList'] as $ignoreId) {
                    if (isset($pm_addons_products[$ignoreId])) {
                        unset($pm_addons_products[$ignoreId]);
                    }
                }
            }
            $addonsList = $this->getPMAddons();
            if ($addonsList && is_array($addonsList) && sizeof($addonsList)) {
                foreach (array_keys($addonsList) as $moduleName) {
                    foreach ($pm_addons_products as $k => $pm_addons_product) {
                        if ($pm_addons_product['name'] == $moduleName) {
                            unset($pm_addons_products[$k]);
                            break;
                        }
                    }
                }
            }
        }
        $vars = array(
            'support_links' => (is_array($this->_support_link) && sizeof($this->_support_link) ? $this->_support_link : array()),
            'copyright_link' => (is_array($this->_copyright_link) && sizeof($this->_copyright_link) ? $this->_copyright_link : false),
            'pm_module_version' => $this->version,
            'pm_data' => $this->getPMdata(),
            'pm_products' => $pm_products,
            'pm_addons_products' => $pm_addons_products,
        );
        return $this->fetchTemplate('core/support.tpl', $vars);
    }
    public function getContent()
    {
        if (Tools::getValue('makeUpdate')) {
            $this->checkIfModuleIsUpdate(true);
        }
        if (!$this->checkIfModuleIsUpdate(false)) {
            $this->context->smarty->assign(array(
                'baseConfigUrl' => $this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name . '&module_name=' . $this->name . '&token=' . Tools::getValue('token'),
            ));
            return $this->fetchTemplate('new-version-detected.tpl');
        }
        if (((bool)Tools::isSubmit('submitpm_advancedcookiebannerModule')) == true) {
            $this->postProcess();
            if (empty($this->context->controller->errors)) {
                $this->context->controller->confirmations[] = $this->l('Configuration has successfully been saved');
            }
        }
        $this->context->controller->addJS($this->_path . 'views/js/codemirror/codemirror.js');
        $this->context->controller->addCSS($this->_path . 'views/css/codemirror/codemirror.css');
        $this->context->controller->addJS($this->_path . 'views/js/codemirror/css.js');
        $this->context->controller->addJqueryUI(array('ui.draggable', 'ui.droppable', 'ui.sortable', 'ui.widget', 'ui.dialog', 'ui.tabs', 'ui.progressbar'), $this->_path . '/views/css/jquery-ui-theme');
        $this->context->controller->informations[] = $this->l('Make sure to define a banner content for each lang of your shop, otherwise the banner won\'t appear in the unspecified languages');
        $this->context->smarty->assign(array(
            'module_dir' => $this->_path,
            'acb_path' => $this->_path,
        ));
        if ($this->isInConfigMode()) {
            $this->context->controller->warnings[] = $this->l('Module is in simulation mode');
        }
        return $this->showRating(true) . $this->renderForm() . $this->displaySupport();
    }
    protected function renderForm()
    {
        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG');
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitpm_advancedcookiebannerModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
        .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
            'ps_version' => _PS_VERSION_,
            'allowEmployeeFormLang' => (int)$helper->allow_employee_form_lang,
            'advanced_styles' => self::getAdvancedStyles(),
            'modulePath' => $this->_path,
        );
        return $helper->generateForm(array($this->getConfigForm()));
    }
    protected function getConfigForm()
    {
        $simulationTextPrefix = '';
        if ($this->isInConfigMode() && version_compare(_PS_VERSION_, '1.6.0.0', '>=')) {
            $simulationTextPrefix = '<i class="icon-warning" />';
        }
        return array(
            'form' => array(
                'tabs' => array(
                    'settings' => $this->l('Settings'),
                    'list' => $this->l('Blocked Modules List'),
                    'simulation' => $simulationTextPrefix . $this->l('Simulation'),
                    'css' => $this->l('Advanced Styles'),
                ),
                'input' => array(
                    array(
                        'type' => 'html',
                        'html_content' => '<h2>'. $this->l('Simulation mode') .'</h2>',
                        'name' => '',
                        'tab' => 'simulation',
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Enable Simulation Mode ?'),
                        'name' => 'PM_'.self::$module_prefix.'_CONFIG_MODE',
                        'is_bool' => true,
                        'desc' => $this->l('When on, your banner will always be visible to the ip addresses that are defined in the field below, so you can customize it without bothering your customers.'),
                        'tab' => 'simulation',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled'),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'maintenance_ip',
                        'label' => $this->l('Maintenance IPs'),
                        'name' => 'PS_MAINTENANCE_IP',
                        'desc' => $this->l('You can add here your IP to the Maintenance IPs of your shop'),
                        'tab' => 'simulation',
                        'class' => 'fixed-width-xxl',
                    ),
                    array(
                        'type' => 'html',
                        'html_content' => '<h2>'. $this->l('General settings') .'</h2>',
                        'name' => '',
                        'tab' => 'settings',
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Enable GDPR mode?'),
                        'name' => 'PM_' . self::$module_prefix . '_GDPR_MODE',
                        'is_bool' => true,
                        'desc' => $this->l('When on, your customers will be able to accept categories of cookies individually'),
                        'tab' => 'settings',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled'),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'html',
                        'html_content' => '<h2>'. $this->l('Blocked Modules List') .'</h2>',
                        'desc' => $this->l('Select the modules that require user consent to install cookies'),
                        'name' => '',
                        'tab' => 'list',
                        'form_group_class' => 'acbRemoveOffset',
                    ),
                    array(
                        'type' => 'blocked_modules_list_explaination',
                        'name' => '',
                        'tab' => 'list',
                        'form_group_class' => 'acbRemoveOffset acb-gdpr-settings',
                        'col' => 12,
                    ),
                    array(
                        'type' => 'custom_columns',
                        'name' => 'PM_'.self::$module_prefix.'_MODULES_LIST_COLUMNS',
                        'tab' => 'list',
                        'values' => $this->prepareModulesListForBO(),
                        'form_group_class' => 'acbRemoveOffset acb-gdpr-settings acb-columns-form-group',
                        'col' => 12,
                    ),
                    array(
                        'type' => 'custom_checkboxes',
                        'label' => $this->l('Modules to block'),
                        'name' => 'PM_'.self::$module_prefix.'_MODULES_LIST',
                        'tab' => 'list',
                        'values' => array(
                            'query' => $this->excludeIgnoredModules(),
                        ),
                        'form_group_class' => 'acb-custom-checkboxes',
                    ),
                    array(
                        'type' => 'html',
                        'html_content' => '<h2>'. $this->l('Banner Settings') .'</h2>',
                        'name' => '',
                        'tab' => 'settings',
                        'form_group_class' => 'acb-banner-settings',
                    ),
                    array(
                        'type' => 'radio',
                        'label' => $this->l('Banner Position'),
                        'name' => 'PM_'.self::$module_prefix.'_POSITION',
                        'desc' => $this->l('Choose the position where your banner will be displayed'),
                        'tab' => 'settings',
                        'form_group_class' => 'acb-banner-settings',
                        'values' => array(
                            array(
                                'id' => 'top',
                                'value' => 1,
                                'label' => $this->l('Top'),
                            ),
                            array(
                                'id' => 'bottom',
                                'value' => 2,
                                'label' => $this->l('Bottom'),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->l('Banner Background Color'),
                        'name' => 'PM_'.self::$module_prefix.'_BG_COLOR',
                        'desc' => $this->l('Define the background color for your banner'),
                        'maxlength' => 7,
                        'tab' => 'settings',
                        'form_group_class' => 'acb-banner-settings',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Banner Background Opacity'),
                        'name' => 'PM_'.self::$module_prefix.'_OPACITY',
                        'desc' => $this->l('Define the opacity of your banner\'s background; 0% is transparent, 100% is opaque'),
                        'suffix' => '%',
                        'maxlength' => 3,
                        'class' => 'fixed-width-xs',
                        'tab' => 'settings',
                        'form_group_class' => 'acb-banner-settings',
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->l('Banner Font Color'),
                        'name' => 'PM_'.self::$module_prefix.'_FONT_COLOR',
                        'desc' => $this->l('Define the font color for your banner'),
                        'maxlength' => 7,
                        'tab' => 'settings',
                        'form_group_class' => 'acb-banner-settings',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Banner Font Size'),
                        'name' => 'PM_'.self::$module_prefix.'_FONT_SIZE',
                        'desc' => $this->l('Define the font size for your banner'),
                        'suffix' => 'px',
                        'maxlength' => 2,
                        'class' => 'fixed-width-xs',
                        'tab' => 'settings',
                        'form_group_class' => 'acb-banner-settings',
                    ),
                    array(
                        'type' => 'radio',
                        'label' => $this->l('Text Align'),
                        'name' => 'PM_'.self::$module_prefix.'_TEXT_ALIGN',
                        'desc' => $this->l('Define your text alignment'),
                        'tab' => 'settings',
                        'values' => array(
                            array(
                                'id' => 1,
                                'value' => 'left',
                                'label' => $this->l('Left'),
                            ),
                            array(
                                'id' => 2,
                                'value' => 'center',
                                'label' => $this->l('Center'),
                            ),
                            array(
                                'id' => 3,
                                'value' => 'right',
                                'label' => $this->l('Right'),
                            ),
                            array(
                                'id' => 4,
                                'value' => 'justify',
                                'label' => $this->l('Justify'),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->l('Banner Border Color'),
                        'name' => 'PM_'.self::$module_prefix.'_BORDER_COLOR',
                        'desc' => $this->l('Define the border color for your banner'),
                        'maxlength' => 7,
                        'tab' => 'settings',
                        'form_group_class' => 'acb-banner-settings',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Banner Border Size'),
                        'name' => 'PM_'.self::$module_prefix.'_BORDER_SIZE',
                        'desc' => $this->l('Define the border size for your banner'),
                        'suffix' => 'px',
                        'maxlength' => 2,
                        'class' => 'fixed-width-xs',
                        'tab' => 'settings',
                        'form_group_class' => 'acb-banner-settings',
                    ),
                    array(
                        'type' => 'html',
                        'html_content' => '<h2>'. $this->l('Content Settings') .'</h2>',
                        'name' => '',
                        'tab' => 'settings',
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->l('Content to be displayed in the banner'),
                        'name' => 'PM_'.self::$module_prefix.'_CONTENT',
                        'lang' => true,
                        'autoload_rte' => true,
                        'tab' => 'settings',
                        'cols' => 0,
                        'rows' => 0,
                        'form_group_class' => 'acb-banner-settings acb-button-settings acb-content-container',
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('CMS Page'),
                        'name' => 'PM_'.self::$module_prefix.'_CMS',
                        'tab' => 'settings',
                        'desc' => $this->l('Add a link to a CMS page containing your terms of use for example'),
                        'options' => array(
                            'query' => $this->getCMSList(),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Label of the link to the CMS page'),
                        'name' => 'PM_'.self::$module_prefix.'_CMS_LINK_LABEL',
                        'desc' => $this->l('If none is provided, the "More Information" label will be used'),
                        'lang' => true,
                        'autoload_rte' => true,
                        'tab' => 'settings',
                    ),
                    array(
                        'type' => 'html',
                        'html_content' => '<h2>'. $this->l('Revocation Settings') .'</h2>',
                        'name' => '',
                        'tab' => 'settings',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Link to reset consent'),
                        'name' => 'PM_' . self::$module_prefix . '_RESET_CONSENT_LINK',
                        'desc' => $this->l('Make sure to add this link to your shop (e.g. in your footer or in the CMS page set above) to let your customers reset their consent for compliancy with GDPR'),
                        'tab' => 'settings',
                        'readonly' => true,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Cookies to remove'),
                        'name' => 'PM_' . self::$module_prefix . '_REMOVE_LIST',
                        'desc' => sprintf($this->l('Insert here the names of the cookies you want to remove when the customer revokes their consent (each separated by a comma). You can find the list of cookies the module will remove by default here: %s'), self::REMOVED_COOKIES_FAQ_URL),
                        'tab' => 'settings',
                    ),
                    array(
                        'type' => 'html',
                        'html_content' => '<h2>'. $this->l('Button Settings') .'</h2>',
                        'name' => '',
                        'form_group_class' => 'acb-button-settings',
                        'tab' => 'settings',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Button Font Size'),
                        'name' => 'PM_'.self::$module_prefix.'_BUTTON_FONT_SIZE',
                        'desc' => $this->l('Define the font size for the button'),
                        'suffix' => 'px',
                        'maxlength' => 2,
                        'class' => 'fixed-width-xs',
                        'form_group_class' => 'acb-button-settings',
                        'tab' => 'settings',
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->l('Button Font Color'),
                        'name' => 'PM_'.self::$module_prefix.'_BUTTON_FONT_COLOR',
                        'desc' => $this->l('Define the font color for the button'),
                        'maxlength' => 7,
                        'form_group_class' => 'acb-button-settings',
                        'tab' => 'settings',
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->l('Button Background Color'),
                        'name' => 'PM_'.self::$module_prefix.'_BUTTON_BG_COLOR',
                        'desc' => $this->l('Define the background color for the button'),
                        'maxlength' => 7,
                        'form_group_class' => 'acb-button-settings',
                        'tab' => 'settings',
                    ),
                    array(
                        'type' => 'html',
                        'html_content' => '<h2>'. $this->l('Design Settings') .'</h2>',
                        'name' => '',
                        'tab' => 'settings',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Classes to apply to the content'),
                        'name' => 'PM_'.self::$module_prefix.'_CLASSES_CONTENT',
                        'desc' => $this->l('Apply specific CSS classes to the content container, separated by a space') . '<br />' . $this->l('The default classes are: ') . $this->defaultContentClasses,
                        'class' => 'fixed-width-xxl',
                        'tab' => 'settings',
                        'form_group_class' => '',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Classes to apply to the button'),
                        'name' => 'PM_'.self::$module_prefix.'_CLASSES_BUTTON',
                        'desc' => $this->l('Apply specific CSS classes to the button container, separated by a space') . '<br />' . $this->l('The default classes are: ') . $this->defaultButtonClasses,
                        'class' => 'fixed-width-xxl',
                        'form_group_class' => 'acb-banner-settings acb-button-settings',
                        'tab' => 'settings',
                    ),
                    array(
                        'type' => 'html',
                        'html_content' => '<h2>'. $this->l('Advanced Styles') .'</h2>',
                        'name' => '',
                        'tab' => 'css',
                    ),
                    array(
                        'type' => 'advancedStyles',
                        'name' => 'advancedStyles',
                        'label' => $this->l('Advanced Styles (CSS)'),
                        'tab' => 'css',
                        'col' => 9,
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                    ),
                ),
            );
    }
    protected function getConfigFormValues()
    {
        $languages = Language::getLanguages(false);
        $acbContentButton = array();
        $acbCmsLinkLabel = array();
        foreach ($languages as $lang) {
            $acbContentButton[(int)$lang['id_lang']] = Configuration::get('PM_'.self::$module_prefix.'_CONTENT', (int)$lang['id_lang']);
            $acbCmsLinkLabel[(int)$lang['id_lang']] = Configuration::get('PM_'.self::$module_prefix.'_CMS_LINK_LABEL', (int)$lang['id_lang']);
        }
        $analyticsModules = $this->getAnalyticsModulesList();
        $marketingModules = $this->getMarketingModulesList();
        $modulesToCheck = $this->getBannerModulesToExclude();
        $removeList = $this->getImplodedCustomCookiesRemoveList();
        return array(
            'PM_'.self::$module_prefix.'_BG_COLOR' => trim(Configuration::get('PM_'.self::$module_prefix.'_BG_COLOR')),
            'PM_'.self::$module_prefix.'_FONT_COLOR' => trim(Configuration::get('PM_'.self::$module_prefix.'_FONT_COLOR')),
            'PM_'.self::$module_prefix.'_FONT_SIZE' => (int)Configuration::get('PM_'.self::$module_prefix.'_FONT_SIZE'),
            'PM_'.self::$module_prefix.'_TEXT_ALIGN' => trim(Configuration::get('PM_'.self::$module_prefix.'_TEXT_ALIGN')),
            'PM_'.self::$module_prefix.'_BORDER_COLOR' => trim(Configuration::get('PM_'.self::$module_prefix.'_BORDER_COLOR')),
            'PM_'.self::$module_prefix.'_BORDER_SIZE' => (int)Configuration::get('PM_'.self::$module_prefix.'_BORDER_SIZE'),
            'PM_'.self::$module_prefix.'_POSITION' => (int)Configuration::get('PM_'.self::$module_prefix.'_POSITION'),
            'PM_'.self::$module_prefix.'_OPACITY' => (int)Configuration::get('PM_'.self::$module_prefix.'_OPACITY'),
            'PM_'.self::$module_prefix.'_BUTTON_FONT_SIZE' => (int)Configuration::get('PM_'.self::$module_prefix.'_BUTTON_FONT_SIZE'),
            'PM_'.self::$module_prefix.'_BUTTON_FONT_COLOR' => trim(Configuration::get('PM_'.self::$module_prefix.'_BUTTON_FONT_COLOR')),
            'PM_'.self::$module_prefix.'_BUTTON_BG_COLOR' => trim(Configuration::get('PM_'.self::$module_prefix.'_BUTTON_BG_COLOR')),
            'PM_'.self::$module_prefix.'_CONTENT' => $acbContentButton,
            'PM_'.self::$module_prefix.'_CLASSES_CONTENT' => Configuration::get('PM_'.self::$module_prefix.'_CLASSES_CONTENT'),
            'PM_'.self::$module_prefix.'_CLASSES_BUTTON' => Configuration::get('PM_'.self::$module_prefix.'_CLASSES_BUTTON'),
            'PM_'.self::$module_prefix.'_CMS' => Configuration::get('PM_'.self::$module_prefix.'_CMS'),
            'PM_'.self::$module_prefix.'_CONFIG_MODE' => (int)Configuration::get('PM_'.self::$module_prefix.'_CONFIG_MODE'),
            'PM_'.self::$module_prefix.'_GDPR_MODE' => (int)Configuration::get('PM_'.self::$module_prefix.'_GDPR_MODE'),
            'PM_'.self::$module_prefix.'_CMS_LINK_LABEL' => $acbCmsLinkLabel,
            'PM_'.self::$module_prefix.'_RESET_CONSENT_LINK' => $this->context->link->getModuleLink($this->name, 'unset_cookie', array(), Tools::usingSecureMode()),
            'PM_'.self::$module_prefix.'_REMOVE_LIST' => $removeList,
            'PM_'.self::$module_prefix.'_MODULES_ANALYTICS' => (array)$analyticsModules,
            'PM_'.self::$module_prefix.'_MODULES_MARKETING' => (array)$marketingModules,
            'PM_'.self::$module_prefix.'_MODULES_LIST' => (array)$modulesToCheck,
            'PS_MAINTENANCE_IP' => Configuration::get('PS_MAINTENANCE_IP'),
        );
    }
    protected function postProcess()
    {
        $form_values = $this->getConfigFormValues();
        $languages = Language::getLanguages(false);
        $modulesListKeys = array(
            'PM_'.self::$module_prefix.'_MODULES_ANALYTICS',
            'PM_'.self::$module_prefix.'_MODULES_MARKETING',
        );
        foreach (array_keys($form_values) as $key) {
            if (in_array($key, $modulesListKeys)) {
                $modulesListString = Tools::getValue($key);
                $modulesList = array();
                if (Tools::strlen($modulesListString) > 0) {
                    $modulesList = explode(',', $modulesListString);
                    $modulesList = array_filter($modulesList);
                }
                $encodedModulesList = Tools::jsonEncode($modulesList);
                Configuration::updateValue($key, $encodedModulesList);
            } elseif ($key == 'PM_'.self::$module_prefix.'_CONTENT' || $key == 'PM_'.self::$module_prefix.'_CMS_LINK_LABEL') {
                $content = array();
                foreach ($languages as $lang) {
                    $id_lang = $lang['id_lang'];
                    $content[$id_lang] = Tools::getValue($key. '_' .$id_lang);
                }
                Configuration::updateValue($key, $content, true);
            } elseif ($key == 'PM_'.self::$module_prefix.'_MODULES_LIST') {
                $checkedModules = Tools::getValue($key);
            } elseif ($key == 'PM_'.self::$module_prefix.'_REMOVE_LIST') {
                $removeList = Tools::getValue($key);
            } elseif ($key == 'PM_' . self::$module_prefix . '_RESET_CONSENT_LINK') {
                continue;
            } elseif ($key == 'PM_' . self::$module_prefix . '_GDPR_MODE') {
                Configuration::updateValue($key, Tools::getValue($key));
            } elseif ($key == 'PM_'.self::$module_prefix.'_OPACITY' || $key == 'PM_'.self::$module_prefix.'_BORDER_SIZE') {
                Configuration::updateValue($key, min(max(0, Tools::getValue($key)), 100));
            } elseif ($key == 'PM_'.self::$module_prefix.'_FONT_SIZE' || $key == 'PM_'.self::$module_prefix.'_BUTTON_FONT_SIZE') {
                Configuration::updateValue($key, min(max(1, Tools::getValue($key)), 99));
            } else {
                Configuration::updateValue($key, Tools::getValue($key));
            }
        }
        $jsonCheckedModulesList = Tools::jsonEncode($checkedModules);
        Configuration::updateValue('PM_'.self::$module_prefix.'_MODULES_LIST', $jsonCheckedModulesList);
        $explodedCookiesRemoveList = explode(',', $removeList);
        $jsonCookiesRemoveList = Tools::jsonEncode($explodedCookiesRemoveList);
        Configuration::updateValue('PM_'.self::$module_prefix.'_REMOVE_LIST', $jsonCookiesRemoveList);
        $this->updateAdvancedStyles(Tools::getValue('advancedStyles'));
    }
    protected function updateAdvancedStyles($cssStyles)
    {
        if (!Shop::isFeatureActive()) {
            Configuration::updateGlobalValue('PM_' . self::$module_prefix . '_ADVANCED_STYLES', self::getDataSerialized($cssStyles));
        } else {
            Configuration::updateValue('PM_' . self::$module_prefix . '_ADVANCED_STYLES', self::getDataSerialized($cssStyles));
        }
        $this->generateCss();
    }
    protected function generateCss()
    {
        if (Shop::isFeatureActive()) {
            $advanced_css_file = str_replace('.css', '-' . (int)$this->context->shop->id . '.css', self::ADVANCED_CSS_FILE);
        } else {
            $advanced_css_file = self::ADVANCED_CSS_FILE;
        }
        if (!Tools::file_exists_cache($advanced_css_file)) {
            file_put_contents(dirname(__FILE__) . '/' . $advanced_css_file, '');
        }
        $css = array();
        $advanced_styles = "\n" . $this->getAdvancedStylesDb();
        if (is_writable(dirname(__FILE__) . '/views/css/') && is_writable(dirname(__FILE__) . '/' . $advanced_css_file)) {
            if (sizeof($css)) {
                file_put_contents(dirname(__FILE__) . '/' . $advanced_css_file, implode(" ", $css) . $advanced_styles);
            } else {
                file_put_contents(dirname(__FILE__) . '/' . $advanced_css_file, '' . $advanced_styles);
            }
        } else {
            if (!is_writable(dirname(__FILE__) . '/views/css/')) {
                $this->context->controller->warnings[] = $this->l('Please set write permission to folder:', $this->coreClassName). ' ' . dirname(__FILE__) . '/views/css/';
            }
            if (!is_writable(dirname(__FILE__) . '/' . self::ADVANCED_CSS_FILE)) {
                $this->context->controller->warnings[] = $this->l('Please set write permission to file:', $this->coreClassName). ' ' . dirname(__FILE__) . '/' . $advanced_css_file;
            }
        }
    }
    public function getAdvancedStyles()
    {
        if (Shop::isFeatureActive()) {
            $advanced_css_file = str_replace('.css', '-' . $this->context->shop->id . '.css', dirname(__FILE__) . '/' . self::ADVANCED_CSS_FILE);
        } else {
            $advanced_css_file = dirname(__FILE__) . '/' . self::ADVANCED_CSS_FILE;
        }
        $advanced_styles = $this->getAdvancedStylesDb();
        if ($advanced_styles == false) {
            if (file_exists($advanced_css_file) && is_readable($advanced_css_file) && Tools::strlen(Tools::file_get_contents($advanced_css_file)) > 0) {
                $advanced_styles = Tools::file_get_contents($advanced_css_file);
                $this->updateAdvancedStyles($advanced_styles);
            } else {
                $advanced_styles = "/* Advanced Cookie Banner - Advanced Styles Content */\n";
                $this->updateAdvancedStyles($advanced_styles);
            }
        }
        return $advanced_styles;
    }
    protected function getAdvancedStylesDb($id_shop = null)
    {
        if ($id_shop != null) {
            $advanced_css_file_db = Configuration::get('PM_' . self::$module_prefix . '_ADVANCED_STYLES', null, null, $id_shop);
        } else {
            $advanced_css_file_db = Configuration::get('PM_' . self::$module_prefix . '_ADVANCED_STYLES');
        }
        if ($advanced_css_file_db !== false) {
            return self::getDataUnserialized($advanced_css_file_db);
        }
        return false;
    }
    protected static function getDataUnserialized($data, $type = 'base64')
    {
        if (is_array($data)) {
            return array_map($type . '_decode', array($data));
        } else {
            return current(array_map($type . '_decode', array($data)));
        }
    }
    public function getInstalledModulesList($lightMode = false)
    {
        $installedModules = Module::getModulesInstalled();
        $modulesListForCheckboxes = array();
        foreach ($installedModules as $moduleInfos) {
            if ($moduleInfos['name'] != 'pm_advancedcookiebanner') {
                $moduleDisplayName = ($lightMode ? '' : Module::getModuleName($moduleInfos['name']));
                $modulesListForCheckboxes[$moduleDisplayName . $moduleInfos['name']] = array(
                    'id_option' => $moduleInfos['id_module'],
                    'name' => $moduleInfos['name'],
                    'displayName' => $moduleDisplayName,
                    'checked' => false,
                );
            }
        }
        ksort($modulesListForCheckboxes);
        $modulesListForCheckboxes = array_values($modulesListForCheckboxes);
        return $modulesListForCheckboxes;
    }
    public function prepareModulesListForBO()
    {
        $moduleListToDisplay = $this->getInstalledModulesList();
        $analyticsModules = $this->getAnalyticsModulesList();
        $marketingModules = $this->getMarketingModulesList();
        $categorizedList = array();
        $moduleNames = array();
        $inputValues = array(
            'analytics' => '',
            'marketing' => '',
            'allowed' => '',
        );
        foreach ($moduleListToDisplay as $moduleInfos) {
            if (!empty($moduleInfos['name'])) {
                if (in_array($moduleInfos['name'], $analyticsModules)) {
                    $categorizedList['analytics'][] = $moduleInfos;
                    $moduleNames['analytics'][] = $moduleInfos['name'];
                } elseif (in_array($moduleInfos['name'], $marketingModules)) {
                    $categorizedList['marketing'][] = $moduleInfos;
                    $moduleNames['marketing'][] = $moduleInfos['name'];
                } else {
                    $categorizedList['allowed'][] = $moduleInfos;
                    $moduleNames['allowed'][] = $moduleInfos['name'];
                }
            }
        }
        foreach ($moduleNames as $category => $names) {
            $inputValues[$category] = implode(",", $names);
        }
        return array(
            'list' => $categorizedList,
            'input' => $inputValues,
        );
    }
    private function getAnalyticsModulesList()
    {
        $moduleList = Configuration::get('PM_'.self::$module_prefix.'_MODULES_ANALYTICS');
        if (empty($moduleList)) {
            return array();
        } else {
            return (array)Tools::jsonDecode(Configuration::get('PM_'.self::$module_prefix.'_MODULES_ANALYTICS'));
        }
    }
    private function getMarketingModulesList()
    {
        $moduleList = Configuration::get('PM_'.self::$module_prefix.'_MODULES_MARKETING');
        if (empty($moduleList)) {
            return array();
        } else {
            return (array)Tools::jsonDecode(Configuration::get('PM_'.self::$module_prefix.'_MODULES_MARKETING'));
        }
    }
    public function excludeIgnoredModules()
    {
        $moduleListToDisplay = $this->getInstalledModulesList();
        $ignoreList = $this->getBannerModulesToExclude();
        foreach ($moduleListToDisplay as $option => $moduleInfos) {
            if (!empty($moduleInfos['name']) && in_array($moduleInfos['name'], $ignoreList)) {
                $moduleListToDisplay[$option]['checked'] = true;
            }
        }
        return $moduleListToDisplay;
    }
    public function getCustomCookiesRemoveList()
    {
        $rawRemoveList = Configuration::get('PM_'.self::$module_prefix.'_REMOVE_LIST');
        if (empty($rawRemoveList)) {
            return array();
        }
        return Tools::jsonDecode($rawRemoveList);
    }
    public function getImplodedCustomCookiesRemoveList()
    {
        $decodedRemoveList = $this->getCustomCookiesRemoveList();
        return implode(',', $decodedRemoveList);
    }
    public function getBannerModulesToExclude()
    {
        $moduleList = Configuration::get('PM_'.self::$module_prefix.'_MODULES_LIST');
        if (empty($moduleList)) {
            return $this->defaultExclusionList;
        } else {
            return (array)Tools::jsonDecode(Configuration::get('PM_'.self::$module_prefix.'_MODULES_LIST'));
        }
    }
    public function getModulesToExclude($consentLevel = 3, $lightMode = false)
    {
        $modulesToBlock = array();
        $installedModules = $this->getInstalledModulesList($lightMode);
        $rebuiltInstalledModulesList = array();
        foreach ($installedModules as $moduleInfos) {
            $rebuiltInstalledModulesList[] = $moduleInfos['name'];
        }
        $analyticsModules = $this->getAnalyticsModulesList();
        $marketingModules = $this->getMarketingModulesList();
        if ($consentLevel == 1) {
            $modulesToBlock = array_merge($modulesToBlock, $marketingModules);
        } elseif ($consentLevel == 2) {
            $modulesToBlock = array_merge($modulesToBlock, $analyticsModules);
        } elseif ($consentLevel == 3) {
            $modulesToBlock = array();
        } else {
            $modulesToBlock = array_merge($modulesToBlock, $analyticsModules, $marketingModules);
        }
        return $modulesToBlock;
    }
    public function getCMSList()
    {
        $cms = CMS::listCms($this->context->employee->id_lang);
        $liste_CMS = array();
        $liste_CMS[] = array(
                    'id_option' => '0',
                    'name' => '-- '. $this->l('None') .' --',
                );
        foreach ($cms as $valeur) {
            $liste_CMS[] = array(
                    'id_option' => $valeur['id_cms'],
                    'name' => $valeur['meta_title'],
                );
        }
        return $liste_CMS;
    }
    public function getCMSUrl()
    {
        $cms_id = array(Configuration::get('PM_'.self::$module_prefix.'_CMS'));
        $cms_link = CMS::getLinks($this->context->customer->id_lang, $cms_id);
        if (!empty($cms_link)) {
            $cms_link = $cms_link[0]['link'];
            if (strrpos($cms_link, '?') !== false) {
                $cms_link .= '&acb_cms=1';
            } else {
                $cms_link .= '?acb_cms=1';
            }
            return $cms_link;
        } else {
            return '';
        }
    }
    public function updateTexts()
    {
        $availables_languages = Language::getLanguages(false);
        $acb_content_button = array();
        $new_texts_button = array();
        foreach ($availables_languages as $lang) {
            $acb_content_button[(int)$lang['id_lang']] = Configuration::get('PM_'.self::$module_prefix.'_CONTENT', (int)$lang['id_lang']);
        }
        foreach ($this->default_texts_button as $isoCode => $text) {
            $IdLang = Language::getIdByIso($isoCode, true);
            if ($IdLang && empty($acb_content_button[$IdLang])) {
                $new_texts_button[$IdLang] = $text;
            } else {
                continue;
            }
        }
        Configuration::updateValue('PM_'.self::$module_prefix.'_CONTENT', $new_texts_button);
    }
    protected function convertHexColorToRGB($hexColor)
    {
        $hexColor = str_replace("#", "", $hexColor);
        if (Tools::strlen($hexColor) == 3) {
            $r = hexdec(Tools::substr($hexColor, 0, 1).Tools::substr($hexColor, 0, 1));
            $g = hexdec(Tools::substr($hexColor, 1, 1).Tools::substr($hexColor, 1, 1));
            $b = hexdec(Tools::substr($hexColor, 2, 1).Tools::substr($hexColor, 2, 1));
        } else {
            $r = hexdec(Tools::substr($hexColor, 0, 2));
            $g = hexdec(Tools::substr($hexColor, 2, 2));
            $b = hexdec(Tools::substr($hexColor, 4, 2));
        }
        $rgb = array($r, $g, $b);
        return implode(",", $rgb);
    }
    protected function generateRGBA($background_color, $opacity)
    {
        $rgba_background = 'rgba('. $this->convertHexColorToRGB($background_color) .','. $opacity .')';
        return $rgba_background;
    }
    private function isOnCmsPage()
    {
        return Tools::getIsset('acb_cms') || (Tools::getIsset('id_cms') && Tools::getValue('id_cms') == Configuration::get('PM_'.self::$module_prefix.'_CMS'));
    }
    private function isCrawler()
    {
        $crawlerDetect = new Pm\Jaybizzle\CrawlerDetect\CrawlerDetect();
        return $crawlerDetect->isCrawler();
    }
    protected function canShowBanner()
    {
        if (defined('_PS_ADMIN_DIR_')) {
            return false;
        }
        if (!$this->isInConfigMode()) {
            if (!AcbCookie::exists() && !$this->isOnCmsPage()) {
                return true;
            } else {
                return false;
            }
        } else {
            $maintenance_ips = explode(',', Configuration::get('PS_MAINTENANCE_IP'));
            if (in_array(Tools::getRemoteAddr(), $maintenance_ips)) {
                return true;
            } else {
                return false;
            }
        }
    }
    protected function isInConfigMode()
    {
        $mode = Configuration::get('PM_'.self::$module_prefix.'_CONFIG_MODE');
        if ($mode == 1) {
            return true;
        } else {
            return false;
        }
    }
    public function isInGDPRMode()
    {
        $mode = Configuration::get('PM_'.self::$module_prefix.'_GDPR_MODE');
        if ($mode == 1) {
            return true;
        } else {
            return false;
        }
    }
    public function hookDisplayBackOfficeHeader()
    {
        if (Tools::getValue('configure') == $this->name) {
            if (Tools::getIsset('dismissRating')) {
                Configuration::updateGlobalValue('PM_'.self::$module_prefix.'_DISMISS_RATING', 1);
                die;
            }
        }
    }
    public function hookActionAdminControllerSetMedia()
    {
        if (Tools::getValue('configure') == $this->name) {
            $this->context->controller->addJquery();
            $this->context->controller->addJS($this->_path.'views/js/admin.js');
            $this->context->controller->addCSS($this->_path.'views/css/admin.css');
            if (version_compare(_PS_VERSION_, '1.6', '<')) {
                $this->context->controller->addJS($this->_path.'views/js/admin15.js');
                $this->context->controller->addCSS($this->_path . 'views/css/admin15.css');
            }
        }
    }
    public function hookModuleRoutes()
    {
        if ($this->isCrawler()) {
            return;
        }
        if (($this->canShowBanner() || $this->isInGdprMode()) && !defined('_PS_ADMIN_DIR_')) {
            $context = $this->context;
            $consentLevel = AcbCookie::getConsentLevel();
            if (version_compare(_PS_VERSION_, '1.7.7.1', '>=')) {
                $cache_id = 'hook_module_exec_list_' . (isset($context->shop->id) ? '_' . $context->shop->id : '') . ((isset($context->customer->id)) ? '_' . $context->customer->id : '');
            } elseif (version_compare(_PS_VERSION_, '1.6', '>=')) {
                $cache_id = 'hook_module_exec_list_' . (isset($context->shop->id) ? '_' . $context->shop->id : '') . ((isset($context->customer)) ? '_' . $context->customer->id : '');
            } else {
                $cache_id = 'hook_module_exec_list' . ((isset($context->customer)) ? '_' . $context->customer->id : '');
            }
            $list = Cache::retrieve($cache_id);
            if ($this->isInGDPRMode()) {
                $modulesToExcludeList = $this->getModulesToExclude($consentLevel, true);
            } else {
                $modulesToExcludeList = $this->getBannerModulesToExclude();
            }
            foreach ($list as $hookName => $modulesList) {
                foreach ($modulesList as $moduleKey => $module) {
                    if (!empty($module['module']) && in_array($module['module'], $modulesToExcludeList)) {
                        unset($list[$hookName][$moduleKey]);
                    }
                }
            }
            Cache::store($cache_id, $list);
        }
        if (version_compare(_PS_VERSION_, '1.6', '<')) {
            return array();
        }
    }
    public function hookDisplayHeader()
    {
        if ($this->isCrawler()) {
            return;
        }
        $includeAssets = false;
        if ($this->canShowBanner() || $this->isInGdprMode()) {
            $includeAssets = true;
        }
        if ($includeAssets) {
            $this->context->controller->addJquery();
            $this->context->controller->addJS($this->_path.'views/js/front.js');
            $this->context->controller->addCSS($this->_path . 'views/css/front.css');
            if (Shop::isFeatureActive()) {
                $advancedCssFile = str_replace('.css', '-' . (int)$this->context->shop->id . '.css', self::ADVANCED_CSS_FILE);
            } else {
                $advancedCssFile = self::ADVANCED_CSS_FILE;
            }
            $this->context->controller->addCSS($this->_path . $advancedCssFile, 'all');
            if (version_compare(_PS_VERSION_, '1.6', '<')) {
                $this->context->controller->addCSS($this->_path . 'views/css/front15.css');
            }
        }
    }
    public function hookDisplayFooter()
    {
        if ($this->isCrawler() || !$this->canShowBanner()) {
            return;
        }
        $module_configuration = $this->getConfigFormValues();
        $module_configuration['PM_'.self::$module_prefix.'_CMS_LINK'] = $this->getCMSUrl();
        if (empty($module_configuration['PM_'.self::$module_prefix.'_CONTENT'][$this->context->language->id])) {
            return;
        }
        $module_configuration['PM_'.self::$module_prefix.'_OPACITY'] = $module_configuration['PM_'.self::$module_prefix.'_OPACITY'] / 100;
        $module_configuration['PM_'.self::$module_prefix.'_BG_COLOR'] = $this->generateRGBA($module_configuration['PM_'.self::$module_prefix.'_BG_COLOR'], $module_configuration['PM_'.self::$module_prefix.'_OPACITY']);
        $this->context->smarty->assign(array(
            'acb_gdpr_mode' => (int)$this->isInGDPRMode(),
            'banner_content' => $module_configuration['PM_'.self::$module_prefix.'_CONTENT'][$this->context->language->id],
            'cms_link_label' => $module_configuration['PM_'.self::$module_prefix.'_CMS_LINK_LABEL'][$this->context->language->id],
            'module_configuration' => $module_configuration,
            'acb_path' => $this->_path,
            'acb_is_16' => (version_compare(_PS_VERSION_, '1.6.0.0', '>=') && version_compare(_PS_VERSION_, '1.7.0.0', '<')),
            'acb_is_17' => version_compare(_PS_VERSION_, '1.7.0.0', '>='),
            'acb_controller_url' => $this->context->link->getModuleLink($this->name, 'set_cookie', array(), Tools::usingSecureMode()),
            'acb_is_legal_cms_page' => $this->isOnCmsPage(),
        ));
        return $this->display(__FILE__, 'footer_js.tpl') . $this->display(__FILE__, 'footer.tpl');
    }
    public function hookActionObjectLanguageAddAfter()
    {
        Language::loadLanguages();
        $this->updateTexts();
    }
}
