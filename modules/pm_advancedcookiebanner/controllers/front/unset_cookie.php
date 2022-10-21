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
class pm_advancedcookiebannerunset_cookieModuleFrontController extends ModuleFrontController
{
    public $ajax = true;
    public $display_header = false;
    public $display_footer = false;
    public $display_column_left = false;
    public $display_column_right = false;
    protected $defaultRemoveList = '["1p_jar","ABTasty","ABTastySession","AWSALB","AWSALBCORS","BACKENDID","FACIL_ITI_LS","FLC","GEUP","OptanonConsent","PREF","UID","UIDR","VISITOR_INFO1_LIVE","Wysistat","YSC","__asc","__atuvc","__atuvs","__auc","__cfduid","__da-pu-xflirt-ID-pc-o169","__gads","__hssc","__hssrc","__hstc","__qca","__ss","__ss_referrer","__ss_tk","__unam","__utma","__utmb","__utmc","__utmt","__utmt_Shareaholic%20Pageviews","__utmt_Tools","__utmt_player","__utmv","__utmz","__vrf","__vrid","__vrl","__vrm","__vru","__vry","__vrz","__zlcid","__zprivacy","_comm_playlist","_cs_c","_cs_ex","_cs_id","_cs_optout","_cs_s","_cs_vars","_drt_","_eventqueue","_first_pageview","_ga","_gat","_gat_UA-65072040-17","_gid","_hjAbsoluteSessionInProgress","_hjDonePolls","_hjDoneSurveys","_hjDoneTestersWidgets","_hjIncludeInPageviewSample","_hjIncludedInSample","_hjMinimizedPolls","_hjMinimizedTestersWidgets","_hjShownFeedbackMessage","_hjid","_jsuid","_p_hfp_client_id","_pk_cvar","_pk_hsr","_pk_id","_pk_ref","_pk_ses","_pk_uid","_referrer_og","_sp_id.32f5","_sp_ses.32f5","_uetmsclkid","_uetsid","_uetvid","_utm_og","_ym_d","_ym_debug","_ym_hostIndex","_ym_isad","_ym_metrika_enabled","_ym_mp2_substs","_ym_mp2_track","_ym_uid","acs","ajs_anonymous_id","ajs_group_id","ajs_user_id","anj","apisid","atidvisitor","atredir","atreman","atsession","attvtreman","attvtsession","c_user","check","clicky_olark","clid","client_id","cluid","csrftoken","datr","dmvk","dpr","ds_usr_id","eqy_company","eqy_sessionid","eqy_siteid","exchange_uid","fc","fr","gq_utm","hist","hjClosedSurveyInvites","hsid","hubspotutk","icu","id","ig_cb","ig_did","incap_ses_","intercom-id-erbfalba","intercom-session-erbfalba","ipinfo","iutk","kbntrk","koitk","lang","mc","mid","mtc_id","mtc_sid","nid","nlbi_","piwik_ignore","player","rds","reg_ext_ref","reg_fb_gate","reg_fb_ref","rrs","rur","rv","s_cc","s_ecid","s_fid","s_sq","s_vi","sapisid","sb","sc_anonymous_id","sc_is_visitor_unique","sclocale","sess","session_id","sessionid","shbid","shbts","sid","sidcc","sp_ab","sp_landing","sp_landingref","sp_m","sp_t","sp_usid","spot","ssid","ssupp.vid","ssupp.visits","trackalyzer","ts","uid","uids","usersync","uslk_e","uslk_s","usst","uuid2","v1st","visid_incap_","visitor_id","visitor_v2","vuid","wd","wooTracker","x-src","xs","yabs-sid","yandexuid"]';
    public function init()
    {
        parent::init();
        header('X-Robots-Tag: noindex, nofollow', true);
        $httpReferrer = (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '');
        $redirectTo = Tools::secureReferrer($httpReferrer);
        if (!AcbCookie::exists() || !$this->module->isInGdprMode()) {
            return Tools::redirect($redirectTo);
        }
        AcbCookie::remove();
        $this->removeExistingCookies();
        return Tools::redirect($redirectTo);
    }
    private function removeExistingCookies()
    {
        $baseLink = $this->getBaseLink();
        $shopDomain = parse_url($baseLink);
        $currentPath = (isset($shopDomain['path']) ? $shopDomain['path'] : '/');
        $shopHost = $shopDomain['host'];
        $publicSuffix = $this->getBaseDomain($shopHost);
        $defaultRemoveList = Tools::jsonDecode($this->defaultRemoveList);
        $merchantRemoveList = $this->module->getCustomCookiesRemoveList();
        $mergedList = array_merge($defaultRemoveList, $merchantRemoveList);
        $removeList = array_unique($mergedList);
        foreach ($_COOKIE as $key => $value) {
            if (!in_array($key, $removeList)) {
                continue;
            }
            setcookie($key, $value, 1, $currentPath, $shopHost);
            setcookie($key, $value, 1, $currentPath, $publicSuffix);
            setcookie($key, $value, 1, $currentPath, '.' . $shopHost);
            setcookie($key, $value, 1, $currentPath, '.' . $publicSuffix);
            if ($currentPath !== '/') {
                setcookie($key, $value, 1, '/', $shopHost);
                setcookie($key, $value, 1, '/', $publicSuffix);
                setcookie($key, $value, 1, '/', '.' . $shopHost);
                setcookie($key, $value, 1, '/', '.' . $publicSuffix);
            }
        }
    }
    private function getBaseDomain($domain)
    {
        $explodedDomain = explode('.', $domain);
        return preg_replace('/' . $explodedDomain[0] . '\.' . '/', '', $domain, 1);
    }
    protected function getBaseLink()
    {
        static $baseLink = null;
        if ($baseLink === null) {
            $context = Context::getContext();
            if (version_compare(_PS_VERSION_, '1.5.0.0', '<')) {
                $base = _PS_SSL_ENABLED_ ? Tools::getShopDomainSsl(true) : Tools::getShopDomain(true);
                $baseLink = $base . __PS_BASE_URI__;
            } else {
                $force_ssl = (Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE'));
                $ssl = $force_ssl;
                $base = (($ssl && Configuration::get('PS_SSL_ENABLED')) ? 'https://' . $context->shop->domain_ssl : 'http://' . $context->shop->domain);
                $baseLink = $base . $context->shop->getBaseURI();
            }
        }
        return $baseLink;
    }
}
