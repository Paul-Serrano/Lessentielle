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
class AcbCookie
{
    const COOKIE_NAME = 'PrestaShop-49722c247d445ea6ad5f50ec8153945a';
    /**
     * Checks if our cookie exists
     *
     * @return boolean
     */
    public static function exists()
    {
        $cookieContent = self::getCookieContent();
        return isset($cookieContent[self::COOKIE_NAME]);
    }
    public static function getConsentLevel()
    {
        $cookieContent = self::getCookieContent();
        if (isset($cookieContent[self::COOKIE_NAME]) && is_numeric($cookieContent[self::COOKIE_NAME])) {
            return (int)$cookieContent[self::COOKIE_NAME];
        }
        return 0;
    }
    public static function setConsentLevel($consentLevel)
    {
        self::write((int)$consentLevel);
    }
    private static function getPath()
    {
        $path = trim(Context::getContext()->shop->physical_uri, '/\\') . '/';
        if ($path[0] != '/') {
            $path = '/'.$path;
        }
        $path = rawurlencode($path);
        $path = str_replace('%2F', '/', $path);
        $path = str_replace('%7E', '~', $path);
        return $path;
    }
    public static function write($value)
    {
        setcookie(self::COOKIE_NAME, $value, strtotime('+13 months'), self::getPath());
    }
    public static function remove()
    {
        setcookie(self::COOKIE_NAME, null, 1, self::getPath());
    }
    private static function getCookieContent()
    {
        if (isset($_COOKIE)) {
            return $_COOKIE;
        } else {
            return array();
        }
    }
}
