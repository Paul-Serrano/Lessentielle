<?php
/**
 * 2017 IQIT-COMMERCE.COM
 *
 * NOTICE OF LICENSE
 *
 * This file is licenced under the Software License Agreement.
 * With the purchase or the installation of the software in your application
 * you accept the licence agreement
 *
 *  @author    IQIT-COMMERCE.COM <support@iqit-commerce.com>
 *  @copyright 2017 IQIT-COMMERCE.COM
 *  @license   Commercial license (You can not resell or redistribute this software.)
 *
 */

include dirname(__FILE__) . '/../../config/config.inc.php';
include dirname(__FILE__) . '/../../init.php';

if (Tools::getIsset('recalculate')) {
    $total = 0;
    $products = Context::getContext()->cart->getProducts(true);
    $free_ship_from = (float) Tools::getValue('recalculate');
    $free_ship_remaining = 0;

  
    $total = Context::getContext()->cart->getOrderTotal(true, Cart::BOTH_WITHOUT_SHIPPING);

    if (count(Context::getContext()->cart->getOrderedCartRulesIds(CartRule::FILTER_ACTION_SHIPPING))) {
        die(0);
    }

    $free_ship_remaining = $free_ship_from - $total;

    if ($free_ship_remaining > 0) {
        die(Tools::displayPrice($free_ship_remaining));
    } else {
        die(0);
    }
} else {
    die('ERROR : No status setted.');
}
