{*
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
*}

<div class="wk-sample-block" style="padding-top: 25px;clear: both;">
    <div class="alert alert-danger" id="wk_sp_standard_product_error" {if !isset($standardAdded) || !$standardAdded} style="display:none"{/if}>
        <i class="material-icons product-last-items" style="color:#ff9a52;">&#xE002;</i>
        {l s='You have added this standard product in cart. Please proceed or delete that cart then you can buy the sample product' mod='wksampleproduct'}
    </div>
    <div class="alert alert-danger" id="wk_sp_ajax_error_wrap" style="display:none">
        <i class="material-icons product-last-items" style="color:#ff9a52;">&#xE002;</i>
        <spam id="wk_sp_ajax_error">
        </spam>
    </div>
    <span class="control-label">
        {if isset($samplePrice)}
            {l s='Sample Price' mod='wksampleproduct'} : <span class="product-price">{$samplePrice} {if $samplePrice != "Free"}{if (($sample.price_type == 4) && ($sample.price_tax == 0)) || ($isTaxExclDisplay)}({l s='Tax excluded' mod='wksampleproduct'}){else}({l s='Tax included' mod='wksampleproduct'}){/if}{/if}
            </span>
        {/if}
    </span>
    <p>{$sample.description nofilter}</p>
    {if $wkShowQtySpin}<span class="control-label">{l s='Sample Quantity' mod='wksampleproduct'}</span>{/if}
    <div class="product-quantity clearfix" {if isset($standardAdded) && $standardAdded} style="display:none"{/if}>
        {if $wkShowQtySpin}
        <div class="qty">
            <div class="wktouchspin input-group bootstrap-touchspin">
                <input type="text" name="wkqty" id="wkquantity_wanted" min="1" value="1" class="input-group form-control" style="display: block;">
                <span class="input-group-btn-vertical">
                    <button class="btn btn-touchspin wkjs-touchspin wkbootstrap-touchspin-up" type="button">
                        <i class="material-icons touchspin-up"></i>
                    </button>
                    <button class="btn btn-touchspin wkjs-touchspin wkbootstrap-touchspin-down" type="button">
                        <i class="material-icons touchspin-down"></i>
                    </button>
                </span>
            </div>
        </div>
        {else}
            <input type="hidden" name="wkqty" id="wkquantity_wanted" value="1">
        {/if}
        <button class="add-to-cart tvall-inner-btn"
            id="wksamplebuybtn"
            data-id-product="{$idProduct}"
            data-id-customer="{$idCustomer}"
            data-id-product-attr="{$idProductAttr}"
            data-cart-url="{$cartPageURL}"
            {if $sampleFullInCart}disabled{/if}
            style="background: {$wkSampleBg}!important;color: {$wkSampleColor}!important;"
        >
            <i class="material-icons shopping-cart"></i>
            {if empty($sample.button_label)}
                <span>{l s='Buy Sample' mod='wksampleproduct'}</span>
            {else}<span>{$sample.button_label}</span>{/if}
        </button>
    </div>
    <span id="wksampleproductqty_spinerror" class="wksampleproduct-lineerror w-100" {if !$sampleQtyWarning}style="display:none;"{/if}>
        <i class="material-icons wkproduct-unavailable"></i>
        {l s='You can buy maximum ' mod='wksampleproduct'}{$sample.max_cart_qty} {l s='samples.' mod='wksampleproduct'}
    </span>
    {if !$addToCartEnabled || $sampleFullInCart}
        <span  id="wksampleproductqty_stockerror" class="wksampleproduct-lineerror">
            <i class="material-icons wkproduct-unavailable"></i>
            {l s='Out-of-Stock' mod='wksampleproduct'}
        </span>
    {/if}
</div>
