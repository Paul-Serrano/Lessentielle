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

class WkSampleProductSampleSpecificPriceModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        $idProduct = Tools::getValue('id_product');
        $idAttr = 0;
        $objSampleMap = new WkSampleProductMap();
        if ($sample = $objSampleMap->getSampleProduct($idProduct)) {
            if (Tools::getValue('ajax') && (Tools::getValue('action') == 'getSampleInfo')) {
                $idAttr = Tools::getValue('attribute_id');
                $cartQty = $this->module->getProductQuantityInCart($idProduct, $idAttr);
                $objSampleCart = new WkSampleCart();
                $sampleCart = $objSampleCart->getSampleCartProduct($this->context->cart->id, $idProduct, $idAttr);
                unset($this->context->cookie->sampleProductId);
                unset($this->context->cookie->sampleProductIdAttr);
                $productStock = StockAvailable::getQuantityAvailableByProduct($idProduct, $idAttr);
                $sample['max_cart_qty'] = (($sample['max_cart_qty'] > 0) && ($sample['max_cart_qty'] < $productStock)) ?
                $sample['max_cart_qty'] :
                $productStock;
                $lowStockQty = (int) Configuration::get('PS_LAST_QTIES');
                $sampleQtyWarning = (($sample['max_cart_qty'] - $cartQty) < $lowStockQty);
                if ($sampleCart) {
                    if (($sample['max_cart_qty'] > 0) && ($cartQty >= $sample['max_cart_qty'])) {
                        die(json_encode(array(
                            'status' => 'ko',
                            'addedStandard' => false,
                            'showStockWarning' => $sampleQtyWarning,
                            'availableQuantity' => 0,
                            'maxSampleQty' => $sample['max_cart_qty'],
                            'sampleInCart' => 1
                        )));
                    } else {
                        die(json_encode(array(
                            'status' => 'ok',
                            'addedStandard' => false,
                            'showStockWarning' => $sampleQtyWarning,
                            'maxSampleQty' => $sample['max_cart_qty'],
                            'availableQuantity' => $sample['max_cart_qty'] - $cartQty,
                            'sampleInCart' => 1
                        )));
                    }
                } else {
                    die(json_encode(array(
                        'status' => 'ok',
                        'addedStandard' => ($cartQty > 0) ? true : false,
                        'showStockWarning' => $sampleQtyWarning,
                        'maxSampleQty' => $sample['max_cart_qty'],
                        'availableQuantity' => $sample['max_cart_qty'],
                        'sampleInCart' => 0
                    )));
                }
            } else {
                // Getting Data
                $defaultAttr = Product::getDefaultAttribute($idProduct);

                if ($defaultAttr && ($groups = Tools::getValue('group'))) {
                    $idAttr = (int) Product::getIdProductAttributeByIdAttributes($idProduct, $groups);
                }
                if ($this->context->cart->id) {
                    $sampleCartObj = new WkSampleCart();
                    $sampleCartObj->checkStandardProductInCart($idProduct, $idAttr);
                    $sampleCartObj->checkMaximumInCart($idProduct, $idAttr);
                }
                $this->context->cookie->sampleProductId = $idProduct;
                $this->context->cookie->sampleProductIdAttr = $idAttr;
                die(json_encode(array(
                    'status' => 'ok',
                    'msg' => $this->module->l('success'),
                )));
            }
        } else {
            die(json_encode(array(
                'status' => 'ko',
                'msg' => array(
                    $this->module->l('The sample is not available anymore.', 'samplespecificprice')
                ),
            )));
        }
    }
}
