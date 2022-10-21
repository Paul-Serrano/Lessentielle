<?php
/**
* 2010-2021 Webkul.
*
* NOTICE OF LICENSE
*
* All right is reserved,
* Please go through LICENSE.txt file inside our module
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade this module to newer
* versions in the future. If you wish to customize this module for your
* needs please refer to CustomizationPolicy.txt file inside our module for more information.
*
* @author Webkul IN
* @copyright 2010-2021 Webkul IN
* @license LICENSE.txt
*/
class Cart extends CartCore
{
    /*
    * module: wksampleproduct
    * date: 2022-10-19 15:57:46
    * version: 5.2.0
    */
    public function checkQuantities($returnProductOnFailure = false)
    {
        if (Module::isEnabled('wksampleproduct')) {
            if (Configuration::isCatalogMode() && !defined('_PS_ADMIN_DIR_')) {
                return false;
            }
            foreach ($this->getProducts() as $product) {
                if (!$this->allow_seperated_package
                    && !$product['allow_oosp']
                    && StockAvailable::dependsOnStock($product['id_product'])
                    && $product['advanced_stock_management']
                    && (bool) Context::getContext()->customer->isLogged()
                    && ($delivery = $this->getDeliveryOption())
                    && !empty($delivery)
                ) {
                    $product['stock_quantity'] = StockManager::getStockByCarrier(
                        (int) $product['id_product'],
                        (int) $product['id_product_attribute'],
                        $delivery
                    );
                }
                if (!$product['active']
                    || !$product['available_for_order']
                    || (!$product['allow_oosp'] && $product['stock_quantity'] < $product['cart_quantity'])
                ) {
                    return $returnProductOnFailure ? $product : false;
                }
                if (!$product['allow_oosp']) {
                    $productQuantity = Product::getQuantity(
                        $product['id_product'],
                        $product['id_product_attribute'],
                        null,
                        $this,
                        $product['id_customization']
                    );
                    if ($productQuantity < 0) {
                        return $returnProductOnFailure ? $product : false;
                    }
                }
                require_once _PS_MODULE_DIR_.'wksampleproduct/classes/WkSampleProductMap.php';
                require_once _PS_MODULE_DIR_.'wksampleproduct/classes/WkSampleCart.php';
                $objSampleCart = new WkSampleCart();
                $sampleCart = $objSampleCart->getSampleCartProduct(
                    $this->id,
                    $product['id_product'],
                    $product['id_product_attribute']
                );
                if ($sampleCart) {
                    $objSampleProductMap = new WkSampleProductMap();
                    $sample = $objSampleProductMap->getSampleProduct($product['id_product']);
                    if ($sample && $sample['active']) {
                        if (($sample['max_cart_qty'] > 0) && ($product['cart_quantity'] > $sample['max_cart_qty'])) {
                            return $returnProductOnFailure ? $product : false;
                        }
                    } else {
                        return $returnProductOnFailure ? $product : false;
                    }
                }
            }
            return true;
        } else {
            return parent::checkQuantities($returnProductOnFailure);
        }
    }
    /*
    * module: wksampleproduct
    * date: 2022-10-19 15:57:46
    * version: 5.2.0
    */
    public function getProducts(
        $refresh = false,
        $id_product = false,
        $id_country = null,
        $fullInfos = true,
        bool $keepOrderPrices = false
    ) {
        $cartProducts = parent::getProducts($refresh, $id_product, $id_country, $fullInfos, $keepOrderPrices);
        if (Module::isEnabled('wksampleproduct') && !empty($cartProducts)) {
            $objModule = Module::getInstanceByName('wksampleproduct');
            $samples = $objModule->getSampleIds();
            if (!empty($samples)) {
                foreach ($cartProducts as $key => $prod) {
                    if (in_array($prod['id_product'], $samples)) {
                        $cartProducts[$key]['minimal_quantity'] = 1;
                    }
                }
            }
        }
        return $cartProducts;
    }
}
