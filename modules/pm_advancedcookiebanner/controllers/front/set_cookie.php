<?php
/**
 * pm_advancedcookiebanner
 *
 * @author    Presta-Module.com <support@presta-module.com> - http://www.presta-module.com
 * @copyright Presta-Module - http://www.presta-module.com
 * @license   Commercial
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
class pm_advancedcookiebannerset_cookieModuleFrontController extends ModuleFrontController
{
    public $ajax = true;
    public $display_header = false;
    public $display_footer = false;
    public $display_column_left = false;
    public $display_column_right = false;
    public function init()
    {
        parent::init();
        header('X-Robots-Tag: noindex, nofollow', true);
        $this->ajax = true;
    }
    public function postProcess()
    {
        if (!$this->isTokenValid()) {
            die();
        }
    }
    public function displayAjax()
    {
        if (!AcbCookie::exists()) {
            if ($this->module->isInGdprMode()) {
                $consentLevel = (int)Tools::getValue('consentLevel', 0);
                if ($consentLevel >= 0 && $consentLevel <= 3) {
                    AcbCookie::setConsentLevel($consentLevel);
                    $context = Context::getContext();
                    $idGuest = $context->customer->id_guest;
                    if (empty($idGuest)) {
                        Guest::setNewGuest($context->cookie);
                        $idGuest = $context->cookie->id_guest;
                    }
                    $res = Db::getInstance()->insert('pm_advancedcookiebanner_consent', array(
                        'id_customer' => (int)$context->customer->id,
                        'id_guest' => (int)$idGuest,
                        'consent' => (int)$consentLevel,
                        'date_add' => date('Y-m-d H:i:s'),
                    ));
                    if (!$res) {
                        die(Tools::jsonEncode(array(
                            'error' => true,
                        )));
                    }
                } else {
                }
            } else {
                AcbCookie::setConsentLevel(3);
            }
        }
        die;
    }
    public function initContent()
    {
    }
}
