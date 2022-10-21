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

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once "classes/WkSampleProductMap.php";
require_once "classes/WkSampleCart.php";
class WkSampleProduct extends Module
{
    public $html = '';

    public function __construct()
    {
        $this->name = 'wksampleproduct';
        $this->tab = 'front_office_features';
        $this->version = '5.2.0';
        $this->author = 'Webkul';
        $this->module_key = '28cce2b6b29dea6d801b05f233e36f59';  
        $this->need_instance = 1;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->bootstrap = true;
        $this->secure_key = Tools::encrypt($this->name);
        parent::__construct();
        $this->displayName = $this->l('Sample Product');
        $this->description = $this->l('Allow customer to buy sample product');
        $this->confirmUninstall = $this->l('Are you sure?');
    }

    public function getContent()
    {
        if (Tools::isSubmit('submit'.$this->name)) {
            $this->postValidation();
            if (!count($this->context->controller->errors)) {
                $this->postProcess();
            }
        } else {
            $this->html .= '<br />';
        }
        $this->context->controller->addJS(_MODULE_DIR_.$this->name.'/views/js/wksampleproductconfig.js');
        $this->html .= $this->renderForm();
        return $this->html;
    }

    /**
     * Validate post data
     */
    protected function postValidation()
    {
        if (Tools::isSubmit('submitGlobalSample')) {
            $maxSample = Tools::getValue('WK_GLOBAL_SAMPLE');
            if (Tools::getValue('WK_GLOBAL_SAMPLE')) {
                $priceType = Tools::getValue('WK_GLOBAL_SAMPLE_PRICE_TYPE');
                $sampleAmount = Tools::getValue('WK_GLOBAL_SAMPLE_AMOUNT');
                $samplePrice = Tools::getValue('WK_GLOBAL_SAMPLE_PRICE');
                $samplePercent = Tools::getValue('WK_GLOBAL_SAMPLE_PERCENT');
                $maxInCart = Tools::getValue('WK_GLOBAL_SAMPLE_IN_CART');
                if ($maxInCart && !Validate::isUnsignedInt($maxInCart)) {
                    $this->context->controller->errors[] =
                    $this->l('Maximum global sample quantity in one cart should be a number');
                }
                if ($priceType == 2) {
                    if (!$sampleAmount || !Tools::strlen($sampleAmount) || ((float) $sampleAmount == 0)) {
                        $this->context->controller->errors[] =
                        $this->l('Please enter global sample deduction amount.');
                    } elseif (!Validate::isUnsignedFloat($sampleAmount)) {
                        $this->context->controller->errors[] =
                        $this->l('Global sample deduction amount should be a number.');
                    }
                } elseif ($priceType == 3) {
                    if (!$samplePercent || !Tools::strlen($samplePercent) || ((float) $samplePercent == 0)) {
                        $this->context->controller->errors[] =
                        $this->l('Please enter global sample deduction percent.');
                    } elseif (!Validate::isUnsignedFloat($samplePercent)) {
                        $this->context->controller->errors[] =
                        $this->l('Global sample deduction percent should be a number.');
                    }
                } elseif ($priceType == 4) {
                    if (!$samplePrice || !Tools::strlen($samplePrice) || ((int) $samplePrice == 0)) {
                        $this->context->controller->errors[] =
                        $this->l('Please enter global sample custom price.');
                    } elseif (!Validate::isUnsignedFloat($samplePrice)) {
                        $this->context->controller->errors[] =
                        $this->l('Global sample custom price should be a number.');
                    }
                }
                $defLang = Configuration::get('PS_LANG_DEFAULT');
                $allLanguages = Language::getLanguages();
                $defaultTitle = Tools::getValue('WK_GLOBAL_SAMPLE_BUTTON_LABEL_'.$defLang);
                $langObj = Language::getLanguage($defLang);
                if (!Tools::strlen(trim($defaultTitle))) {
                    $this->context->controller->errors[] =
                    $this->l('Please enter global sample button title in default language.').
                    ' ('.$langObj['iso_code'].')';
                } elseif (!Validate::isGenericName($defaultTitle)) {
                    $this->context->controller->errors[] =
                    $this->l('Please enter valid global sample button title in default language.').
                    ' ('.$langObj['iso_code'].')';
                }
                foreach ($allLanguages as $lang) {
                    $sampleTitle = Tools::getValue('WK_GLOBAL_SAMPLE_BUTTON_LABEL_'.$lang['id_lang']);
                    if (Tools::strlen(trim($sampleTitle)) > 32) {
                        $this->context->controller->errors[] =
                        $this->l('Please enter global sample button title upto 32 characters').
                        ' : ('.$lang['iso_code'].')';
                    }
                    if (($lang['id_lang'] != $defLang)
                        && Tools::strlen(trim($sampleTitle))
                        && !Validate::isGenericName($sampleTitle)
                    ) {
                        $this->context->controller->errors[] =
                        $this->l('Please enter valid global sample button title').
                        ' : ('.$lang['iso_code'].')';
                    }
                    $sampleDesc = Tools::getValue('WK_GLOBAL_SAMPLE_DESC_'.$lang['id_lang']);
                    if ($sampleDesc && Tools::strlen($sampleDesc) && $this->checkScriptInHtml($sampleDesc)) {
                        $this->context->controller->errors[] = $this->l('Please enter valid global sample description').
                        ' : ('.$lang['iso_code'].')';
                    }
                }
            }
        } else {
            $maxSample = Tools::getValue('WK_MAX_SAMPLE_IN_CART');
            if ($maxSample && !Validate::isUnsignedInt($maxSample)) {
                $this->context->controller->errors[] =
                $this->l('Maximum Sample Product in one cart should be a number');
            }
            $sampleBtnBgColor = Tools::getValue('WK_SAMPLE_BUTTON_BG_COLOR');
            if (!$sampleBtnBgColor || !Tools::strlen(trim($sampleBtnBgColor))) {
                $this->context->controller->errors[] = $this->l('Please select sample button background color.');
            } elseif (!Validate::isColor($sampleBtnBgColor)) {
                $this->context->controller->errors[] = $this->l('Please enter correct sample button background color.');
            }
            $sampleBtnTextColor = Tools::getValue('WK_SAMPLE_BUTTON_TEXT_COLOR');
            if (!$sampleBtnTextColor || !Tools::strlen(trim($sampleBtnTextColor))) {
                $this->context->controller->errors[] = $this->l('Please select sample button title color.');
            } elseif (!Validate::isColor($sampleBtnTextColor)) {
                $this->context->controller->errors[] = $this->l('Please enter correct sample button title color.');
            }
        }
    }

    /**
     * Save form data
     */
    protected function postProcess()
    {
        if (Tools::isSubmit('submitGlobalSample')) {
            Configuration::updateValue('WK_GLOBAL_SAMPLE', Tools::getValue('WK_GLOBAL_SAMPLE'));
            if (Tools::getValue('WK_GLOBAL_SAMPLE')) {
                Configuration::updateValue(
                    'WK_GLOBAL_SAMPLE_IN_CART',
                    (int) Tools::getValue('WK_GLOBAL_SAMPLE_IN_CART')
                );
                Configuration::updateValue(
                    'WK_GLOBAL_SAMPLE_PRICE_TYPE',
                    Tools::getValue('WK_GLOBAL_SAMPLE_PRICE_TYPE')
                );

                Configuration::updateValue('WK_GLOBAL_SAMPLE_AMOUNT', Tools::getValue('WK_GLOBAL_SAMPLE_AMOUNT'));
                Configuration::updateValue('WK_GLOBAL_SAMPLE_PRICE', Tools::getValue('WK_GLOBAL_SAMPLE_PRICE'));
                Configuration::updateValue('WK_GLOBAL_SAMPLE_TAX', Tools::getValue('WK_GLOBAL_SAMPLE_TAX'));
                Configuration::updateValue('WK_GLOBAL_SAMPLE_PERCENT', Tools::getValue('WK_GLOBAL_SAMPLE_PERCENT'));
                $defLang = Configuration::get('PS_LANG_DEFAULT');
                $allLanguages = Language::getLanguages();
                $defaultTitle = Tools::getValue('WK_GLOBAL_SAMPLE_BUTTON_LABEL_'.$defLang);
                $defaultDesc = Tools::getValue('WK_GLOBAL_SAMPLE_DESC_'.$defLang);
                $sampleTitles = array();
                $sampleDescs = array();
                foreach ($allLanguages as $lang) {
                    $sampleTitle = Tools::getValue('WK_GLOBAL_SAMPLE_BUTTON_LABEL_'.$lang['id_lang']);
                    $sampleDesc = Tools::getValue('WK_GLOBAL_SAMPLE_DESC_'.$lang['id_lang']);
                    $sampleTitles[$lang['id_lang']] = Tools::strlen(trim($sampleTitle)) ? $sampleTitle : $defaultTitle;
                    $sampleDescs[$lang['id_lang']] = Tools::strlen(trim($sampleDesc)) ? $sampleDesc : $defaultDesc;
                }
                Configuration::updateValue('WK_GLOBAL_SAMPLE_BUTTON_LABEL', $sampleTitles);
                Configuration::updateValue('WK_GLOBAL_SAMPLE_DESC', $sampleDescs, true);
            }
        } else {
            Configuration::updateValue('WK_MAX_SAMPLE_IN_CART', Tools::getValue('WK_MAX_SAMPLE_IN_CART'));
            Configuration::updateValue('WK_SAMPLE_STOCK_UPDATE', Tools::getValue('WK_SAMPLE_STOCK_UPDATE'));
            Configuration::updateValue('WK_SAMPLE_LOGGED_ONLY', Tools::getValue('WK_SAMPLE_LOGGED_ONLY'));
            Configuration::updateValue('WK_SAMPLE_QUANTITY_SPIN', Tools::getValue('WK_SAMPLE_QUANTITY_SPIN'));
            Configuration::updateValue('WK_SAMPLE_BUTTON_TEXT_COLOR', Tools::getValue('WK_SAMPLE_BUTTON_TEXT_COLOR'));
            Configuration::updateValue('WK_SAMPLE_BUTTON_BG_COLOR', Tools::getValue('WK_SAMPLE_BUTTON_BG_COLOR'));
        }
        $this->context->controller->confirmations[] = $this->l('Successfully saved.');
    }

    public function renderForm()
    {
        $fieldsForm = array();
        //$groups = Group::getGroups($this->context->language->id, true);
        $fieldsForm[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('Basic Configuration'),
                'icon' => 'icon-cogs',
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Maximum Sample Product in one cart'),
                    'name' => 'WK_MAX_SAMPLE_IN_CART',
                    'col' => '2',
                    'desc' => $this->l('Leave empty or fill zero if no limitation'),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Stock update on Sample Product order'),
                    'name' => 'WK_SAMPLE_STOCK_UPDATE',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => 0,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Only logged in customer can order'),
                    'name' => 'WK_SAMPLE_LOGGED_ONLY',
                    'desc' => $this->l('If No, guest can also order'),
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => 0,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Show sample quantity selector'),
                    'name' => 'WK_SAMPLE_QUANTITY_SPIN',
                    'hint' =>
                    $this->l('Select if you want users to select sample quantity or add 1 on each button click.'),
                    'desc' => $this->l('If disabled, 1 sample will be added to cart on each sample button click.'),
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => 0,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'color',
                    'label' => $this->l('Sample button background color.'),
                    'name' => 'WK_SAMPLE_BUTTON_BG_COLOR'
                ),
                array(
                    'type' => 'color',
                    'label' => $this->l('Sample button title color.'),
                    'name' => 'WK_SAMPLE_BUTTON_TEXT_COLOR'
                ),
                // @Todo in future
                /*array(
                    'type' => 'group',
                    'label' => $this->l('Group access'),
                    'values' => $groups,
                    'name' => 'groupBox',
                    'col' => '6',
                    'hint' => $this->l('Select all the groups that you would like to apply for order sample product')
                ),*/
            ),
            'submit' => array(
                'title' => $this->l('Save'),
            ),
        );
        $fieldsForm[1]['form'] = array(
            'legend' => array(
                'title' => $this->l('Global sample'),
                'icon' => 'icon-cogs',
            ),
            'input' => array(
                array(
                    'type' => 'switch',
                    'label' => $this->l('Global sample'),
                    'desc' => $this->l('All products will be offered with a sample with below settings.'),
                    'name' => 'WK_GLOBAL_SAMPLE',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Enabled')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => 0,
                            'label' => $this->l('Disabled')
                        )
                    ),
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Maximum quantity of sample product in one cart'),
                    'form_group_class' => 'wk_global_sample_block',
                    'name' => 'WK_GLOBAL_SAMPLE_IN_CART',
                    'col' => '2',
                    'desc' => $this->l('Leave empty or fill zero if no limitation'),
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Price type'),
                    'name' => 'WK_GLOBAL_SAMPLE_PRICE_TYPE',
                    'form_group_class' => 'wk_global_sample_block wk_price_type_wrap',
                    'is_bool' => true,
                    'options' => array(
                        'id' => 'id_option',
                        'name' => 'name',
                        'query' => array(
                            array(
                                'id_option' => 1,
                                'name' => $this->l('Product Standard Price')
                            ),
                            array(
                                'id_option' => 2,
                                'name' => $this->l('Deduct fix amount from product price')
                            ),
                            array(
                                'id_option' => 3,
                                'name' => $this->l('A percentage of product price')
                            ),
                            array(
                                'id_option' => 4,
                                'name' => $this->l('Custom Price')
                            ),
                            array(
                                'id_option' => 5,
                                'name' => $this->l('Free Sample')
                            )
                        )
                    ),
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Amount'),
                    'prefix' => $this->context->currency->sign,
                    'name' => 'WK_GLOBAL_SAMPLE_AMOUNT',
                    'form_group_class' => 'wk_global_sample_block wk_price_type_amount',
                    'col' => '2',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Sample Price'),
                    'prefix' => $this->context->currency->sign,
                    'name' => 'WK_GLOBAL_SAMPLE_PRICE',
                    'form_group_class' => 'wk_global_sample_block wk_price_type_customprice',
                    'col' => '2',
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Tax'),
                    'name' => 'WK_GLOBAL_SAMPLE_TAX',
                    'form_group_class' => 'wk_global_sample_block wk_price_type_tax',
                    'is_bool' => true,
                    'options' => array(
                        'id' => 'id_option',
                        'name' => 'name',
                        'query' => array(
                            array(
                                'id_option' => 0,
                                'name' => $this->l('Tax excluded')
                            ),
                            array(
                                'id_option' => 1,
                                'name' => $this->l('Tax Included')
                            )
                        )
                    ),
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Percentage'),
                    'prefix' => '%',
                    'name' => 'WK_GLOBAL_SAMPLE_PERCENT',
                    'form_group_class' => 'wk_global_sample_block wk_price_type_percent',
                    'col' => '2',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Sample button title'),
                    'name' => 'WK_GLOBAL_SAMPLE_BUTTON_LABEL',
                    'form_group_class' => 'wk_global_sample_block',
                    'lang' => true,
                    'col' => '2',
                ),
                array(
                    'type' => 'textarea',
                    'label' => $this->l('Sample description'),
                    'form_group_class' => 'wk_global_sample_block',
                    'name' => 'WK_GLOBAL_SAMPLE_DESC',
                    'lang' => true,
                    'autoload_rte' => true
                ),
            ),
            'submit' => array(
                'title' => $this->l('Save'),
                'name' => 'submitGlobalSample'
            ),
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submit'.$this->name;
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $sampleBtnTitle = array();
        $sampleBtnDesc = array();
        $allLanguages = $this->context->controller->getLanguages();
        foreach ($allLanguages as $lang) {
            $sampleBtnTitle[$lang['id_lang']] = Configuration::get(
                'WK_GLOBAL_SAMPLE_BUTTON_LABEL',
                $lang['id_lang']
            );
            $sampleBtnDesc[$lang['id_lang']] = Configuration::get(
                'WK_GLOBAL_SAMPLE_DESC',
                $lang['id_lang']
            );
        }

        $formValues = $this->getConfigFormValues();
        $formValues['WK_GLOBAL_SAMPLE_BUTTON_LABEL'] = $sampleBtnTitle;
        $formValues['WK_GLOBAL_SAMPLE_DESC'] = $sampleBtnDesc;
        $helper->tpl_vars = array(
            'fields_value' => $formValues,
            'languages' => $allLanguages,
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm($fieldsForm);
    }

    public function getConfigFormValues()
    {
        $keys = array(
            'WK_MAX_SAMPLE_IN_CART',
            'WK_SAMPLE_STOCK_UPDATE',
            'WK_SAMPLE_LOGGED_ONLY',
            'WK_SAMPLE_QUANTITY_SPIN',
            'WK_SAMPLE_BUTTON_BG_COLOR',
            'WK_SAMPLE_BUTTON_TEXT_COLOR',
            'WK_GLOBAL_SAMPLE',
            'WK_GLOBAL_SAMPLE_IN_CART',
            'WK_GLOBAL_SAMPLE_PRICE_TYPE',
            'WK_GLOBAL_SAMPLE_AMOUNT',
            'WK_GLOBAL_SAMPLE_PRICE',
            'WK_GLOBAL_SAMPLE_TAX',
            'WK_GLOBAL_SAMPLE_PERCENT'
        );

        return Configuration::getMultiple($keys);
    }

    public function hookDisplayProductAdditionalInfo($params)
    {
        if (Tools::getValue('action') != 'quickview') {
            $product = $params['product'];
            if (Configuration::get('WK_SAMPLE_LOGGED_ONLY')) {
                if (isset($this->context->customer->id)) {
                    return $this->displaySampleButton($product);
                }
            } else {
                return $this->displaySampleButton($product);
            }
        }
    }

    private function getTaxIncludedSampleAmount($sample, $idTaxRulesGroup, $psProductPrice)
    {
        $sampleAmount = ($sample['price_type'] == 2) ?
        (float) $sample['amount'] :
        (($psProductPrice*(float) $sample['amount'])/100);
        $taxConfig = new TaxConfiguration();
        $id_address = $this->getAddressIdFromContext();
        // $taxmethod = 1 for tax excl & 0 for tax incl.
        if (!$sample['price_tax'] && $id_address && $idTaxRulesGroup && $taxConfig->includeTaxes()) {
            $taxCalculator = $this->getTaxCalculator($idTaxRulesGroup, $id_address);
            if ($sample['price_type'] == 2) {
                //amount
                $sampleAmount = $taxCalculator->addTaxes((float) $sample['amount']);
            } elseif ($sample['price_type'] == 3) {
                //percent
                $amountFromPercent = (($psProductPrice*(float) $sample['amount'])/100);
                $sampleAmount = $taxCalculator->addTaxes($amountFromPercent);
            }
        }
        return $sampleAmount;
    }

    private function getTaxCalculator($idTaxRulesGroup, $id_address)
    {
        $taxRule = new TaxRulesTaxManager(Address::initialize($id_address, true), $idTaxRulesGroup);
        return $taxRule->getTaxCalculator();
    }

    private function getAddressIdFromContext()
    {
        if ($id_address = $this->context->cart->{Configuration::get('PS_TAX_ADDRESS_TYPE')}) {
            return $id_address;
        } else {
            $addresses = $this->context->customer->getAddresses($this->context->language->id);
            if (!empty($addresses)) {
                return Address::getFirstCustomerAddressId($this->context->customer->id);
            } else {
                return 0;
            }
        }
    }

    private function removeTaxes($amount, $id_tax_rules_group)
    {
        $id_address = $this->getAddressIdFromContext();
        $taxCalculator = $this->getTaxCalculator($id_tax_rules_group, $id_address);
        $taxRate = $taxCalculator->getTotalRate();
        return ($amount*100)/(100+(float)$taxRate);
    }

    public function getSamplePrice($sample)
    {
        $product = new Product($sample['id_product']);
        $taxConfig = new TaxConfiguration();
        $taxMethod = $taxConfig->includeTaxes();
        //Add specific price discount
        $productPrice = Product::getPriceStatic($sample['id_product'], $taxMethod);

        $amountToDeduct = $this->getTaxIncludedSampleAmount($sample, $product->id_tax_rules_group, $productPrice);
        $samplePrice = '';
        if ($sample['price_type'] == 2) {
            if (!$taxMethod) {
                //excluded
                if ($sample['price_tax']) {
                    $amountToDeduct = $this->removeTaxes($sample['amount'], $product->id_tax_rules_group);
                    $samplePrice = $productPrice - $this->removeTaxes($sample['amount'], $product->id_tax_rules_group);
                }
            }
            $samplePrice = ($amountToDeduct > $productPrice) ? 0 : $productPrice - $amountToDeduct;
        } elseif ($sample['price_type'] == 3) {
            $samplePrice = ($amountToDeduct > $productPrice) ? 0 : $productPrice - $amountToDeduct;
        } elseif ($sample['price_type'] == 4) {
            if ($sample['price_tax'] && !$taxMethod) {
                $samplePrice = $this->removeTaxes($sample['price'], $product->id_tax_rules_group);
            } else {
                $samplePrice = $sample['price'];
            }
        } elseif ($sample['price_type'] == 5) {
            $samplePrice = 0;
        }
        return $samplePrice;
    }

    public function getProductQuantityInCart($idProduct, $idAttr = false)
    {
        $allProducts = $this->context->cart->getProducts();
        $totalQuantity = 0;
        foreach ($allProducts as $cartProduct) {
            if ($cartProduct['id_product'] == $idProduct) {
                if (!$idAttr || ($idAttr == $cartProduct['id_product_attribute'])) {
                    $totalQuantity += $cartProduct['cart_quantity'];
                }
            }
        }
        return $totalQuantity;
    }

    private function isAvailableWhenOutOfStock($idProduct, $idAttr)
    {
        $objProduct = new Product($idProduct, false, $this->context->language->id);
        $shouldShowButton = $objProduct->available_for_order;
        if ($shouldShowButton) {
            $cartQuantity = (float) $this->getProductQuantityInCart($idProduct, $idAttr);
            $quantity = Product::getQuantity($objProduct->id, $idAttr);
            $quantity -= $cartQuantity;
            switch ($objProduct->out_of_stock) {
                case 0:
                    $shouldShowButton = ($quantity > 0);
                    break;
                case 1:
                    $shouldShowButton = true;
                    break;
                default:
                    $shouldShowButton = ($quantity > 0) || (Configuration::get('PS_ORDER_OUT_OF_STOCK') == 1);
                    break;
            }
        }

        return $shouldShowButton;
    }

    public function displaySampleButton($product)
    {
        $objSampleProductMap = new WkSampleProductMap();
        $objSampleCart = new WkSampleCart();
        $sample = $objSampleProductMap->getSampleProduct($product['id']);
        if ($sample && $sample['active']) {
            $samplePrice = $this->getSamplePrice($sample);
            if ($samplePrice || ((string) $samplePrice == "0")) {
                $this->context->smarty->assign('samplePrice', Tools::displayPrice($samplePrice));
            }
            $sampleCart = $objSampleCart->getSampleCartProduct(
                $this->context->cart->id,
                $product['id'],
                $product['id_product_attribute']
            );
            // $cartQuantity = $this->getProductQuantityInCart($product['id']);
            $cartExactQuantity = $this->getProductQuantityInCart($product['id'], $product['id_product_attribute']);
            $taxConfig = new TaxConfiguration();
            $taxMethod = $taxConfig->includeTaxes();
            $standardAdded = false;
            $productStock = StockAvailable::getQuantityAvailableByProduct(
                $product['id'],
                $product['id_product_attribute']
            );
            $sample['max_cart_qty'] = (($sample['max_cart_qty'] > 0) && ($sample['max_cart_qty'] < $productStock)) ?
            $sample['max_cart_qty'] :
            $productStock;
            $sampleFullInCart = false;
            if ($sampleCart) {
                //sample is added to cart
                if ($sample['price_type'] == 1) {
                    $productPrice = Product::getPriceStatic($product['id'], $taxMethod);
                    $this->context->smarty->assign('samplePrice', Tools::displayPrice($productPrice));
                }
                $sampleFullInCart = ($sample['max_cart_qty'] > 0) && ($cartExactQuantity >= $sample['max_cart_qty']);
            } else {
                //sample is not added to cart
                $standardAdded = $cartExactQuantity > 0;
            }
            $configs = Configuration::getMultiple(array(
                'WK_SAMPLE_QUANTITY_SPIN',
                'WK_SAMPLE_BUTTON_BG_COLOR',
                'WK_SAMPLE_BUTTON_TEXT_COLOR'
            ));
            $lowStockQty = (int) Configuration::get('PS_LAST_QTIES');
            $sampleQtyWarning = ((($sample['max_cart_qty'] - $cartExactQuantity) < $lowStockQty) && !$sampleFullInCart);
            $this->context->smarty->assign(array(
                'sample' => $sample,
                'wkShowQtySpin' => $configs['WK_SAMPLE_QUANTITY_SPIN'],
                'wkSampleBg' => $configs['WK_SAMPLE_BUTTON_BG_COLOR'],
                'wkSampleColor' => $configs['WK_SAMPLE_BUTTON_TEXT_COLOR'],
                'idProduct' => $product['id'],
                'idProductAttr' => $product['id_product_attribute'],
                'standardAdded' => $standardAdded,
                'sampleFullInCart' => $sampleFullInCart,
                'sampleQtyWarning' => $sampleQtyWarning,
                'isTaxExclDisplay' => !$taxMethod,
                'addToCartEnabled' => $this->isAvailableWhenOutOfStock(
                    $product['id'],
                    $product['id_product_attribute']
                ),
                'idCustomer' => $this->context->customer->id,
                'cartPageURL' => $this->context->link->getPageLink(
                    'cart',
                    null,
                    null,
                    array(
                        'add' => 1,
                        'id_product' => $product['id'],
                        'ipa' => 0,
                        'sample_cart' => 1,
                    )
                ),
            ));

            return $this->fetch('module:'.$this->name.'/views/templates/hook/productadditionalinfo.tpl');
        }
    }

    /**
     * Display sample coulmn in Order render list
     *
     * @param  Array $params row data
     */
    public function hookActionAdminOrdersListingFieldsModifier($params)
    {
        if (isset($params['select'])) {
            $params['select'] .= ', coalesce(wsc.sample, 0) as sample ';
        }
        if (isset($params['join'])) {
            ' ON (apo.`id_order` = a.`id_order`)';
            $params['join'] .= ' LEFT JOIN '._DB_PREFIX_.'wk_sample_cart wsc ON (a.id_order = wsc.id_order)';
        }
        if (isset($params['join'])) {
            $params['group_by'] .= ' GROUP BY a.`id_order`';
        }
        $params['fields']['sample'] = array(
            'title' => $this->l('Contains Sample'),
            'type' => 'bool',
            'align' => 'text-center',
            'orderby' => false,
            'search' => true,
            'havingFilter' => true,
        );
    }

    public function hookActionObjectOrderDetailAddAfter($params)
    {
        if ($params && isset($params['object']->id_order)) {
            $paramOrder = new Order($params['object']->id_order);
            $cart = new Cart($paramOrder->id_cart);
            $allOrders = Order::getByReference($paramOrder->reference)->getResults();
            $objSampleCart = new WkSampleCart();
            $objSampleProductMap = new WkSampleProductMap();
            foreach ($allOrders as $eachOrder) {
                $products = $eachOrder->getProducts();
                foreach ($products as $product) {
                    $sample = $objSampleProductMap->getSampleProduct($product['product_id']);
                    $sampleCart = $objSampleCart->getSampleCartProduct(
                        $cart->id,
                        $product['product_id'],
                        $product['product_attribute_id']
                    );
                    if ($sample && $sampleCart) {
                        if (!Configuration::get('WK_SAMPLE_STOCK_UPDATE')) {
                            StockAvailable::updateQuantity(
                                $product['product_id'],
                                $product['product_attribute_id'],
                                $product['product_quantity']
                            );
                        }
                        // update cart order
                        $objSampleCart->updateCartOrder(
                            $cart->id,
                            $product['product_id'],
                            $eachOrder->id,
                            $product['product_attribute_id']
                        );
                        // delete specific price
                        $objSampleCart->deleteSampleSpecificPrice(
                            $cart->id,
                            $product['product_id'],
                            $product['product_attribute_id']
                        );
                    }
                }
            }
        }
    }

    /**
     * Display Extra Information on Product Edit
     *
     * @param  array $params this product details
     * @return tpl
     */
    public function hookDisplayAdminProductsExtra($params)
    {
        $idProduct = (int) $params['id_product'];
        if ($idProduct) {
            if (Module::isInstalled('marketplace') && WkMpSellerProduct::getSellerProductByPsIdProduct($idProduct)) {
                $this->context->smarty->assign('mpProduct', 1);
            } else {
                $objSampleProductMap = new WkSampleProductMap();
                $sample = $objSampleProductMap->getSampleProduct($idProduct, false);
                $product = new Product($idProduct);
                if ($sample) {
                    $this->context->smarty->assign(array(
                        'sign' => $this->context->currency->sign,
                        'sample' => $sample,
                        'productPrice' => Tools::displayPrice($product->getPrice(false)),
                    ));
                }
                $sampleExists = false;
                if ($sampleFileName = $objSampleProductMap->getSampleFileName($idProduct)) {
                    $fileDir = _PS_MODULE_DIR_.$this->name.'/views/samples/';
                    if (Tools::strlen(trim($sampleFileName['sample_file']))
                        && file_exists($fileDir.$sampleFileName['sample_file'])
                    ) {
                        $sampleExists = true;
                        $this->context->smarty->assign('sampleFileName', $sampleFileName['sample_file']);
                    }
                }
                $product_download = new ProductDownload();
                $id_product_download = $product_download->getIdFromIdProduct(
                    $this->context->controller->getFieldValue($product, 'id')
                );
                if ($id_product_download) {
                    $product_download = new ProductDownload($id_product_download);
                }
                $allLanguages = Language::getLanguages();
                $this->context->smarty->assign(array(
                    'sign' => $this->context->currency->sign,
                    'isVirtual' => $product->is_virtual,
                    'idProduct' => $idProduct,
                    'allLanguages' => $allLanguages,
                    'wk_language' => $this->context->language->id,
                    'shouldUpload' => $product_download->id,
                    'sampleExists' => $sampleExists,
                    'attachmentMaxSize' => Configuration::get('PS_ATTACHMENT_MAXIMUM_SIZE'),
                    'productPrice' => Tools::displayPrice($product->getPrice(false)),
                ));
            }
            return $this->display(__FILE__, 'adminproduct.tpl');
        }
    }

    public function removeScriptFromHtml($html)
    {
        $dom = new DOMDocument();
        $dom->loadHTML(htmlspecialchars_decode($html));
        $script = $dom->getElementsByTagName('script');
        $remove = array();
        foreach ($script as $item) {
            $remove[] = $item;
        }
        foreach ($remove as $item) {
            $item->parentNode->removeChild($item);
        }
        return $dom->saveHTML();
    }

    public function checkScriptInHtml($html)
    {
        $dom = new DOMDocument();
        $dom->loadHTML(htmlspecialchars_decode($html));
        $script = $dom->getElementsByTagName('script');
        return $script->length;
    }

    /**
     * Save product extra information
     *
     * @param  array $params this product details
     */
    public function hookActionProductSave($params)
    {
        if ($params['id_product']) {
            $maxCartQty = Tools::getValue('max_cart_qty');
            $priceType = Tools::getValue('wk_sample_price_type');
            $priceTax = Tools::getValue('wk_sample_price_tax');
            $price = Tools::getValue('wk_sample_price');
            $sampleAmount = Tools::getValue('sample_amount');
            $status = Tools::getValue('sample_active');
            $psProduct = $params['product'];

            if ($maxCartQty && !Validate::isUnsignedInt($maxCartQty)) {
                $this->context->controller->errors['hooks_max_cart_qty'] = array(
                    $this->l('Maximum quantity in cart should be a positive number')
                );
            }
            $taxRules = TaxRule::getTaxRulesByGroupId(
                $this->context->language->id,
                $psProduct->id_tax_rules_group
            );
            if ($priceType == 3) {
                //If type is percent, then tax calculation will always be Tax-included
                $priceTax = 1;
            }
            if ($priceType == 2 || $priceType == 3) {
                //Calculate product final price as per tax
                $taxConfig = new TaxConfiguration();
                $taxMethod = $taxConfig->includeTaxes();
                $productPrice = $psProduct->getPrice($taxMethod);
                if ($sampleAmount && !Validate::isUnsignedFloat($sampleAmount)) {
                    $this->context->controller->errors['hooks_sample_amount'] = array(
                        $this->l('Amount should be positive')
                    );
                } else {
                    $sampleAmountWithTax = $sampleAmount;
                    if ($priceTax == 1) {
                        if ($priceType == 2) {
                            if ($sampleAmount > $productPrice) {
                                $this->context->controller->errors['hooks_sample_amount'] = array(
                                    $this->l('Amount should be less than product price')
                                );
                            }
                        } else {
                            $sampleAmountPercent = ($productPrice*$sampleAmount)/100;
                            if ($sampleAmountPercent > $productPrice) {
                                $this->context->controller->errors['hooks_sample_amount'] = array(
                                    $this->l('Amount should be less than product price')
                                );
                            }
                        }
                    } else {
                        foreach ($taxRules as $taxArr) {
                            //If any taxincluded amount is greater than product price
                            $taxRate = $taxArr['rate'];
                            if ($priceType == 2) {
                                $sampleAmountWithTax = $sampleAmount + (($sampleAmount*$taxRate)/100);
                            }
                            if ($sampleAmountWithTax > $productPrice) {
                                $this->context->controller->errors['hooks_sample_amount'] = array(
                                    $this->l('Amount should be less than product price')
                                );
                                break;
                            }
                        }
                    }
                }
            }
            if ($priceType == 4) {
                if ($price && !Validate::isPrice($price)) {
                    $this->context->controller->errors['hooks_wk_sample_price'] = array(
                        $this->l('Price is not valid')
                    );
                }
            }
            $allLanguages = Language::getLanguages();
            $sampleTitles = array();
            $sampleDescs = array();
            foreach ($allLanguages as $lang) {
                $sampleTitle = Tools::getValue('sample_btn_label_'.$lang['id_lang']);
                if (Tools::strlen(trim($sampleTitle)) > 32) {
                    $this->context->controller->errors['hooks_sample_btn_label_'.$lang['id_lang']] =
                    $this->l('Please enter button label upto 32 characters').
                    ' : ('.$lang['iso_code'].')';
                } elseif (Tools::strlen(trim($sampleTitle)) && !Validate::isGenericName($sampleTitle)) {
                    $this->context->controller->errors['hooks_sample_btn_label_'.$lang['id_lang']] =
                    $this->l('Button label is not valid').
                    ' : ('.$lang['iso_code'].')';
                } else {
                    $sampleTitles[$lang['id_lang']] = pSQL($sampleTitle);
                }
                $sampleDesc = Tools::getValue('wk_sample_desc_'.$lang['id_lang']);
                if ($sampleDesc && Tools::strlen(trim($sampleDesc)) && $this->checkScriptInHtml($sampleDesc)) {
                    $this->context->controller->errors['hooks_wk_sample_desc_'.$lang['i_lang']] =
                    $this->l('Description is not valid').
                    ' : ('.$lang['iso_code'].')';
                } else {
                    $sampleDescs[$lang['id_lang']] = pSQL($sampleDesc);
                }
            }

            if (!empty($this->context->controller->errors)) {
                http_response_code(400);
                die(json_encode($this->context->controller->errors));
            }

            $objSampleProductMap = new WkSampleProductMap();
            $sampleProduct = $objSampleProductMap->getSampleProduct($params['id_product'], false);
            if ($sampleProduct && $sampleProduct['id_sample_product']) {
                $sample = new WkSampleProductMap((int) $sampleProduct['id_sample_product']);
            } else {
                $sample = new WkSampleProductMap();
            }
            unset($sampleProduct);
            unset($objSampleProductMap);
            $sample->id_product = $params['id_product'];
            $sample->id_product_attribute = (int) $psProduct->cache_default_attribute;
            $sample->max_cart_qty = (int) $maxCartQty;
            $sample->price_type = (int) $priceType;
            $sample->price_tax = (int) $priceTax;
            $sample->amount = (float) $sampleAmount;
            $sample->price = (float) $price;
            $sample->button_label = $sampleTitles;
            $sample->description = $sampleDescs;
            $sample->active = (int) ($status === 'on' ? 1 : 0);
            $sample->save();
        }
    }

    /**
     * Validate & Customize Cart for Sample
     *
     * @param  int $idCart
     */
    public function customizeSampleCart()
    {
        $sampleCart = Tools::getValue('sample_cart');
        $idProduct = Tools::getValue('id_product');
        if ($sampleCart && $idProduct) {
            Tools::redirect($this->context->link->getPageLink('cart', null, null, array('action' => 'show')));
        }
    }

    public function hookDisplayHeader()
    {
        $this->customizeSampleCart();
        Media::addJsDef(
            array(
                'loginreq' => $this->l('To buy preorder product you need to login first.'),
                'sampleSpecificPriceURL' => $this->context->link->getModuleLink(
                    'wksampleproduct',
                    'samplespecificprice'
                ),
                'sampleCartPage' => $this->context->link->getModuleLink(
                    'wksampleproduct',
                    'samplespecificprice'
                ),
            )
        );
    }
    
    public function hookActionSampleProductAddInCart($params)
    {
        $idProduct = $params['idProduct'];
        $idAttr = $params['idAttr'];
        $objSampleCart = new WkSampleCart();
        $sampleCart = $objSampleCart->getSampleCartProduct($this->context->cart->id, $idProduct, 0);
        if (version_compare(_PS_VERSION_, '1.7.5', '<')) {
            return $sampleCart ? true : false;
        } else {
            return ($sampleCart ||(($this->context->cookie->sampleProductId == $idProduct)
            && ($this->context->cookie->sampleProductIdAttr == $idAttr))) ? true : false;
        }
    }

    public function hookActionFrontControllerSetMedia($params)
    {
        if ($idProduct = Tools::getValue('id_product')) {
            $objSampleCart = new WkSampleCart();
            $sampleCart = $objSampleCart->getSampleCartProduct(
                $this->context->cart->id,
                $idProduct,
                (int) Tools::getValue('id_product_attribute')
            );
            $objSampleProductMap = new WkSampleProductMap();
            $sample = $objSampleProductMap->getSampleProduct($idProduct);
            Media::addJsDef(
                array(
                    'maxSampleQty' => $sample['max_cart_qty'],
                    'productAvailableQuantity' => Product::getQuantity(
                        $idProduct,
                        Product::getDefaultAttribute($idProduct)
                    )
                )
            );
            if ($sampleCart) {
                Media::addJsDef(array('standardInCart' => 1));
            }
            $this->context->controller->registerStylesheet(
                'module-wksampleproduct-css',
                'modules/'.$this->name.'/views/css/wkspsample.css'
            );
        }
        if ($this->context->controller->php_self == 'cart') {
            $products = $this->context->cart->getProducts();
            $sampleProducts = array();
            $objSampleCart = new WkSampleCart();
            foreach ($products as $product) {
                $sampleCart = $objSampleCart->getSampleCartProduct(
                    $this->context->cart->id,
                    $product['id_product'],
                    $product['id_product_attribute']
                );
                if ($sampleCart) {
                    $sampleProducts[$product['id_product'].'_'.$product['id_product_attribute']] = 0;
                }
            }
            Media::addJsDef(array('samplesInCart' => $sampleProducts));
        }

        Media::addJsDef(
            array(
                'wkcontroller' => $this->context->controller->php_self,
                'sampleCartActionUrl' => $this->context->link->getPageLink('cart'),
                'baseSampleQuery' => 'token='.Tools::getToken(false).'&id_product='.$idProduct.'&add=1&action=update'
            )
        );
        $this->context->controller->registerJavascript(
            'module-wksampleproduct',
            'modules/'.$this->name.'/views/js/wksampleproduct.js'
        );
    }

    public function hookActionAdminControllerSetMedia($params)
    {
        if ($this->context->controller->controller_name == 'AdminProducts') {
            Media::addJsDef(
                array(
                    'saveSample' => $this->context->link->getModuleLink(
                        $this->name,
                        'samplefile',
                        array('secure_key' => $this->secure_key)
                    ),
                    'noSampleErrorMsg' => $this->l('Please upload sample product.'),
                    'maxSizeErrorMsg' => $this->l('File is too large.'),
                    'maxFileSizeInPs' => Configuration::get('PS_ATTACHMENT_MAXIMUM_SIZE'),
                    'uploadSuccessMsg' => $this->l('Sample uploaded successfully.'),
                    'deleteSuccessMsg' => $this->l('Sample deleted successfully.'),
                )
            );
            $this->context->controller->addJS(
                $this->_path.'/views/js/wksampleproducttab.js'
            );
        }
    }

    /**
     * Delete Sample from our map if delete
     *
     * @param  array $params
     */
    public function hookActionObjectProductInCartDeleteAfter($params)
    {
        $objSampleCart = new WkSampleCart();
        $objSampleCart->deleteSampleSpecificPrice(
            $params['id_cart'],
            $params['id_product'],
            $params['id_product_attribute']
        );
        $objSampleCart->deleteSampleCart($params['id_cart'], $params['id_product'], $params['id_product_attribute']);
    }

    public function getSampleIds()
    {
        $idSamples = Db::getInstance()->executeS('SELECT `id_product` FROM `'._DB_PREFIX_.'wk_sample_product`');
        if (!empty($idSamples)) {
            return array_column($idSamples, 'id_product');
        }
    }

    /**
     * Prevent to add main product if sample already in cart
     * Prevent to update quantity of sample if ristricted
     *
     * @param  array $params
     */
    public function hookActionCartUpdateQuantityBefore($params)
    {
        $cart = $params['cart'];
        $product = $params['product'];
        $objSampleCart = new WkSampleCart();
        if (isset($params['operator'])) {
            if ($params['operator'] == 'up') {
                $isSampleProduct = $objSampleCart->getSampleCartProduct(
                    $cart->id,
                    $product->id,
                    $params['id_product_attribute']
                );
                if (isset($this->context->cookie->sampleProductId)
                && isset($this->context->cookie->sampleProductIdAttr)
                && ($this->context->cookie->sampleProductId == $product->id)
                && ($this->context->cookie->sampleProductIdAttr == (int) $params['id_product_attribute'])
                && !$isSampleProduct
                ) {
                    unset($this->context->cookie->sampleProductId);
                    unset($this->context->cookie->sampleProductIdAttr);
                    $sampleCart = new WkSampleCart();
                    $sampleCart->validateSampleCart($params['id_product_attribute'], $product->id);
                }
                if ($objSampleCart->checkProductQtyInCart(
                    $cart,
                    $product->id,
                    $params['quantity'],
                    $params['id_product_attribute']
                )) {
                    $objSampleProductMap = new WkSampleProductMap();
                    $sample = $objSampleProductMap->getSampleProduct($product->id);
                    die(json_encode(array(
                        'hasError' => true,
                        'hasSample' => true,
                        'errors' => array(
                            sprintf(
                                $this->l('Only %d quantity allowed to buy in single cart'),
                                $sample['max_cart_qty']
                            )
                        ),
                    )));
                }
            } elseif ($params['operator'] == 'down') {
                $quantity = $this->getProductQuantityInCart($product->id, $params['id_product_attribute']);
                $reduceQuantity = $params['quantity'];
                if ($quantity == $reduceQuantity) {
                    $objSampleCart->deleteSampleSpecificPrice($cart->id, $product->id, $params['id_product_attribute']);
                    $objSampleCart->deleteSampleCart($cart->id, $product->id, $params['id_product_attribute']);
                }
            }
        } else {
            // just for security if in case operator is not found
            if ($objSampleCart->checkProductQtyInCart($cart, $product->id, $params['id_product_attribute'])) {
                die(json_encode(array(
                    'hasError' => true,
                    'errors' => array('Max quantity exceeded for this sample product in cart'),
                )));
            }
        }
    }

    public function hookDisplayAdminOrder($params)
    {
        $order = new Order($params['id_order']);
        $products = $order->getProducts();
        $sample = array();
        $objSampleCart = new WkSampleCart();
        foreach ($products as $product) {
            $sampleOrder = $objSampleCart->getSampleOrderProduct(
                $params['id_order'],
                $product['product_id'],
                $product['product_attribute_id']
            );
            if ($sampleOrder) {
                $sample[] = $product;
            }
        }

        if (!empty($sample)) {
            foreach ($sample as &$product) {
                $product['sample_price'] = Tools::displayPrice($product['total_price_tax_incl']);
            }
            $this->context->smarty->assign(array(
                'sample' => $sample,
                'sampleCount' => count($sample),
            ));
            return $this->display(__FILE__, 'displayadminorder'.
            (version_compare(_PS_VERSION_, '1.7.7.0', '>=') ? 'sf' : '')
            .'.tpl');
        }
    }
    //Custom hook
    public function hookActionSampleProductDownloadBefore(&$params)
    {
        $info = $params[0];
        $objSampleCart = new WkSampleCart();
        $sampleOrder = $objSampleCart->getSampleOrderProduct(
            $info['id_order'],
            $info['id_product'],
            $info['id_product_attribute']
        );
        if ($sampleOrder) {
            $flag = false;
            $objSampleProductMap = new WkSampleProductMap();
            if ($sampleFileName = $objSampleProductMap->getSampleFileName($info['id_product'])) {
                $fileDir = _PS_MODULE_DIR_.$this->name.'/views/samples/';
                if (Tools::strlen(trim($sampleFileName['sample_file']))
                    && file_exists($fileDir.$sampleFileName['sample_file'])
                ) {
                    $flag = true;
                    $params[1] = $fileDir.$sampleFileName['sample_file'];
                    $params[2] = $sampleFileName['sample_file'];
                }
            }
            if (!$flag) {
                $params[2] = false;
                $params[1] = $this->l('This sample does not have a file.');
            }
        }
    }

    public function hookDisplayCartExtraProductActions($params)
    {
        if ($this->context->controller->php_self == 'cart') {
            return $this->context->smarty->fetch(
                _PS_MODULE_DIR_.$this->name.'/views/templates/hook/cartsamplenotifier.tpl',
                array('showNotice' => false)
            );
        }
    }
    public function hookdisplayProductPriceBlock($params)
    {
        if ($this->context->controller->php_self == 'order') {
            $objSampleCart = new WkSampleCart();
            $sampleCart = $objSampleCart->getSampleCartProduct(
                $this->context->cart->id,
                $params['product']['id_product'],
                $params['product']['id_product_attribute']
            );
            if ($sampleCart) {
                return $this->context->smarty->fetch(
                    _PS_MODULE_DIR_.$this->name.'/views/templates/hook/cartsamplenotifier.tpl',
                    array('showNotice' => true)
                );
            }
        }
    }

    public function registerModuleHook()
    {
        return $this->registerHook(array(
            'displayAdminProductsExtra',
            'displayProductAdditionalInfo',
            'actionProductSave',
            'actionBeforeCartUpdateQty',
            'actionCartUpdateQuantityBefore',
            'actionAdminControllerSetMedia',
            'actionCartSave',
            'actionFrontControllerSetMedia',
            'displayHeader',
            'actionObjectProductInCartDeleteAfter',
            'actionAdminOrdersListingFieldsModifier',
            'displayAdminOrder',
            'actionSampleProductDownloadBefore',
            'displayCartExtraProductActions',
            'actionObjectOrderDetailAddAfter',
            'displayProductPriceBlock',
            'actionSampleProductAddInCart'
        ));
    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }
        if (!parent::install()
            || !$this->registerModuleHook()
            || !$this->createTable()
            || !$this->defaultConfig()
        ) {
            return false;
        }

        return true;
    }

    public function defaultConfig()
    {
        $configs = array(
            'WK_SAMPLE_BUTTON_BG_COLOR' => '#2fb5d2',
            'WK_SAMPLE_QUANTITY_SPIN' => 1,
            'WK_SAMPLE_BUTTON_TEXT_COLOR' => '#ffffff',
            'WK_GLOBAL_SAMPLE' => 0
        );
        foreach ($configs as $key => $value) {
            if (!Configuration::updateValue($key, $value)) {
                return false;
            }
        }
        return true;
    }

    public function deleteConfigKey()
    {
        $keys = array(
            'WK_MAX_SAMPLE_IN_CART',
            'WK_SAMPLE_STOCK_UPDATE',
            'WK_SAMPLE_LOGGED_ONLY',
            'WK_SAMPLE_QUANTITY_SPIN',
            'WK_SAMPLE_BUTTON_BG_COLOR',
            'WK_SAMPLE_BUTTON_TEXT_COLOR',
            'WK_GLOBAL_SAMPLE',
            'WK_GLOBAL_SAMPLE_IN_CART',
            'WK_GLOBAL_SAMPLE_PRICE_TYPE',
            'WK_GLOBAL_SAMPLE_AMOUNT',
            'WK_GLOBAL_SAMPLE_PRICE',
            'WK_GLOBAL_SAMPLE_TAX',
            'WK_GLOBAL_SAMPLE_PERCENT',
            'WK_GLOBAL_SAMPLE_BUTTON_LABEL',
            'WK_GLOBAL_SAMPLE_DESC'
        );

        foreach ($keys as $key) {
            if (!Configuration::deleteByName($key)) {
                return false;
            }
        }
        $sampleVirtualFiles = glob(_PS_MODULE_DIR_.$this->name.'/views/samples/*');
        foreach ($sampleVirtualFiles as $sample) {
            if (!unlink($sample)) {
                return false;
            }
        }
        return true;
    }

    protected function deleteTable()
    {
        return Db::getInstance()->execute('
            DROP TABLE IF EXISTS
            `'._DB_PREFIX_.'wk_sample_product`,
            `'._DB_PREFIX_.'wk_sample_product_lang`,
            `'._DB_PREFIX_.'wk_sample_product_shop`,
            `'._DB_PREFIX_.'wk_sample_cart`,
            `'._DB_PREFIX_.'wk_sample_cart_shop`');
    }

    public function uninstall()
    {
        if (!parent::uninstall()
            || !$this->deleteTable()
            || !$this->deleteConfigKey()) {
            return false;
        }
        return true;
    }

    protected function createTable()
    {
        $success = true;
        $db = Db::getInstance();
        $queries = $this->getDbTableQueries();

        foreach ($queries as $query) {
            $success &= $db->execute($query);
        }

        return $success;
    }

    private function getDbTableQueries()
    {
        return array(
            "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."wk_sample_product` (
                `id_sample_product` int(10) unsigned NOT NULL auto_increment,
                `id_product` int(10) unsigned NOT NULL,
                `id_product_attribute` int(10) unsigned NOT NULL,
                `max_cart_qty` int(10) unsigned NOT NULL,
                `price_type` int(10) unsigned NOT NULL,
                `price_tax` int(10) unsigned NOT NULL,
                `amount` decimal(17,2) unsigned NOT NULL,
                `price` decimal(17,2) NOT NULL,
                `sample_file` varchar(512) NOT NULL,
                `active` tinyint(1) unsigned NOT NULL DEFAULT '0',
                `date_add` datetime NOT NULL,
                `date_upd` datetime NOT NULL,
            PRIMARY KEY  (`id_sample_product`)
            ) ENGINE="._MYSQL_ENGINE_." DEFAULT CHARSET=utf8",
            "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."wk_sample_product_lang` (
                `id_sample_product` int(10) unsigned NOT NULL,
                `id_shop` int(10) unsigned NOT NULL,
                `id_lang` int(10) unsigned NOT NULL,
                `button_label` varchar(32) NOT NULL,
                `description` TEXT,
            PRIMARY KEY  (`id_sample_product`, `id_lang`, `id_shop`)
            ) ENGINE="._MYSQL_ENGINE_." DEFAULT CHARSET=utf8",
            "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."wk_sample_product_shop` (
                `id_sample_product` int(10) unsigned NOT NULL,
                `id_shop` int(10) unsigned NOT NULL,
                `id_product` int(10) unsigned NOT NULL,
                `id_product_attribute` int(10) unsigned NOT NULL,
                `max_cart_qty` int(10) unsigned NOT NULL,
                `price_type` int(10) unsigned NOT NULL,
                `price_tax` int(10) unsigned NOT NULL,
                `amount` decimal(17,2) unsigned NOT NULL,
                `price` decimal(17,2) NOT NULL,
                `sample_file` varchar(512) NOT NULL,
                `active` tinyint(1) unsigned NOT NULL DEFAULT '0',
            PRIMARY KEY  (`id_sample_product`, `id_shop`)
            ) ENGINE="._MYSQL_ENGINE_." DEFAULT CHARSET=utf8",
            "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."wk_sample_cart` (
                `id_sample_cart` int(10) unsigned NOT NULL auto_increment,
                `id_cart` int(10) unsigned NOT NULL,
                `id_product_attribute` int(10) unsigned NOT NULL,
                `id_order` int(10) unsigned NOT NULL,
                `id_product` int(10) unsigned NOT NULL,
                `id_specific_price` int(10) unsigned NOT NULL,
                `sample` tinyint(1) unsigned NOT NULL DEFAULT '1',
                `date_add` datetime NOT NULL,
                `date_upd` datetime NOT NULL,
            PRIMARY KEY  (`id_sample_cart`)
            ) ENGINE="._MYSQL_ENGINE_." DEFAULT CHARSET=utf8",
            "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."wk_sample_cart_shop` (
                `id_sample_cart` int(10) unsigned NOT NULL,
                `id_product_attribute` int(10) unsigned NOT NULL,
                `id_shop` int(10) unsigned NOT NULL,
                `id_cart` int(10) unsigned NOT NULL,
                `id_order` int(10) unsigned NOT NULL,
                `id_product` int(10) unsigned NOT NULL,
                `id_specific_price` int(10) unsigned NOT NULL,
                `sample` tinyint(1) unsigned NOT NULL DEFAULT '1',
            PRIMARY KEY  (`id_sample_cart`, `id_shop`)
            ) ENGINE="._MYSQL_ENGINE_." DEFAULT CHARSET=utf8"
        );
    }
}
