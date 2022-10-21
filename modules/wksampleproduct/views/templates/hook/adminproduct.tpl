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

<div class="col-md-12">
    {if isset($mpProduct)}
        <div class="alert alert-warning">
            <p>{l s='This is a marketplace product. You can create the sample in Marketplace products page.' mod='wksampleproduct'}</p>
        </div>
    {else}
        <fieldset class="form-group">
            {l s='Offer Sample' mod='wksampleproduct'}
            <label for="switch"><input data-toggle="switch" id="switch" data-inverse="true" type="checkbox" name="sample_active" {if isset($sample)}{if $sample['active'] == 1}checked{/if}{/if}></label>
        </fieldset>
        <div class="row">
            <fieldset class="col-md-4 form-group">
                <label class="form-control-label">{l s='Maximum quantity in cart' mod='wksampleproduct'}</label>
                <input type="number" id="form_hooks_max_cart_qty" class="form-control" name="max_cart_qty" value="{$sample['max_cart_qty']}"></input>
                <small class="form-text text-muted"><em>{l s='Leave empty or 0 if no limitation' mod='wksampleproduct'}</em></small>
            </fieldset>
        </div>
        <div id="wk_sample_file_input_block" data-virtual-product="{if $isVirtual && $shouldUpload}1{else}0{/if}" class="{if !$isVirtual || !isset($sample)}d-none{/if}">
            <div id="wk_sp_virtual_input_wrapper" class="row" {if !$shouldUpload}style="display:none;"{/if}>
                <fieldset class="col-md-12 form-group">
                    {l s='Does this sample have an associated file?' mod='wksampleproduct'}
                    <label for="switch"><input data-toggle="switch" id="wk_sp_virtual_switch" data-inverse="true" type="checkbox" name="sample_file_active" {if $sampleExists}checked{/if}></label>
                </fieldset>
                <fieldset id="wk_sp_file_input" class="col-md-4 form-group">
                    <label class="form-control-label">{l s='Upload sample' mod='wksampleproduct'}</label>
                    <input type="file" id="form_hooks_uploaded_sample_file" class="form-control" data-id="{$idProduct}" name="uploaded_sample_file">
                    <small id="wk_sp_sample_file_status" class="form-text text-muted">
                        <em>
                            {if $sampleExists > 0}
                                {if isset($sampleFileName)}{l s='Uploaded file: ' mod='wksampleproduct'}{$sampleFileName}{/if}
                            {else}
                                {l s='Upload sample to send on sample order. File size should not exceed' mod='wksampleproduct'} {$attachmentMaxSize}MB.
                            {/if}
                        </em>
                    </small>
                </fieldset>
                <fieldset id="wk_sp_file_delete" class="col-md-4 align-self-center form-group">
                    <button type="button" id="form_hooks_delete_sample_file" class="btn btn-danger" data-id="{$idProduct}" style="display:{if $sampleExists > 0}block{else}none{/if};">
                        {l s='Delete' mod='wksampleproduct'}
                    </button>
                </fieldset>
            </div>
        </div>
        <div class="row">
            <fieldset class="col-md-4 form-group">
                <label class="form-control-label">{l s='Product Price' mod='wksampleproduct'}</label>
                : <span>{$productPrice}</span> {l s='(Tax excl.)' mod='wksampleproduct'}
            </fieldset>
        </div>
        <div class="row">
            <fieldset class="col-md-4 form-group">
                <label class="form-control-label">{l s='Price Type' mod='wksampleproduct'}</label>
                <select class="form-control" name="wk_sample_price_type" id="wk_sample_price_type">
                    <option value="1" {if isset($sample)}{if $sample['price_type'] == 1}selected{/if}{/if}>{l s='Product Standard Price' mod='wksampleproduct'}</option>
                    <option value="2" {if isset($sample)}{if $sample['price_type'] == 2}selected{/if}{/if}>{l s='Deduct fix amount from product price' mod='wksampleproduct'}</option>
                    <option value="3" {if isset($sample)}{if $sample['price_type'] == 3}selected{/if}{/if}>{l s='A percentage of product price' mod='wksampleproduct'}</option>
                    <option value="4" {if isset($sample)}{if $sample['price_type'] == 4}selected{/if}{/if}>{l s='Custom Price' mod='wksampleproduct'}</option>
                    <option value="5" {if isset($sample)}{if $sample['price_type'] == 5}selected{/if}{/if}>{l s='Free Sample' mod='wksampleproduct'}</option>
                </select>
            </fieldset>
            <fieldset class="col-md-2 form-group wk_sample_amount">
                <label class="form-control-label" id="wk_sample_sign_label">{l s='Amount' mod='wksampleproduct'}</label>
                <label class="form-control-label" id="wk_sample_percent_label">{l s='Percentage' mod='wksampleproduct'}</label>
                <div class="input-group money-type">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="wk_sample_percent">%</span>
                        <span class="input-group-text" id="wk_sample_sign">{$sign}</span>
                    </div>
                    <input type="text" id="form_hooks_sample_amount" name="sample_amount" class="form-control" value="{$sample['amount']}">
                </div>
            </fieldset>
            <fieldset class="col-md-2 form-group wk_sample_custom_price">
                <label class="form-control-label">{l s='Set Price' mod='wksampleproduct'}</label>
                <input type="text" name="wk_sample_price" id="form_hooks_wk_sample_price" class="form-control" value="{$sample['price']}"></input>
            </fieldset>
            <fieldset class="col-md-2 form-group wk_sample_price_tax">
                <label class="form-control-label">{l s='Tax' mod='wksampleproduct'}</label>
                <select class="form-control" name="wk_sample_price_tax" id="wk_sample_price_tax">
                    <option value="0" {if isset($sample)}{if $sample['price_tax'] == 0}selected{/if}{/if}>{l s='Tax excluded' mod='wksampleproduct'}</option>
                    <option value="1" {if isset($sample)}{if $sample['price_tax'] == 1}selected{/if}{/if}>{l s='Tax included' mod='wksampleproduct'}</option>
                </select>
            </fieldset>
        </div>
        <div class="row">
            <fieldset class="col-md-4 form-group">
                <label class="form-control-label">{l s='Sample Button Label' mod='wksampleproduct'}</label>
                <div class="form-group">
                    {foreach from=$allLanguages item=lang}
                        <div class="translatable-field lang-{$lang.id_lang} row" {if $lang.id_lang != $wk_language}style="display: none;"{/if}>
                            <div class="col-lg-9">
                                <input type="text" id="form_hooks_sample_btn_label_{$lang.id_lang}" name="sample_btn_label_{$lang.id_lang}" class="form-control" value="{if isset($sample['button_label']) && isset($sample['button_label'][$lang.id_lang]) && (strlen($sample['button_label'][$lang.id_lang]) > 0)}{$sample['button_label'][$lang.id_lang]}{else}{l s='Buy Sample' mod='wksampleproduct'}{/if}" onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();">
                                <small class="form-text text-muted"><em>{l s='Default label name \'Buy Sample\', applied if empty' mod='wksampleproduct'}</em></small>
                            </div>
                            <div class="col-lg-2">
                                <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                                    {$lang.iso_code}
                                    <i class="icon-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    {foreach from=$allLanguages item=langOption}
                                    <li>
                                        <a href="javascript:hideOtherLanguage({$langOption.id_lang});" tabindex="-1">{$langOption.name}</a>
                                    </li>
                                    {/foreach}
                                </ul>
                            </div>
                        </div>
                    {/foreach}
                </div>
            </fieldset>
        </div>
        <div class="row">
            <fieldset class="col-md-12 form-group">
                <label class="form-control-label">{l s='Description' mod='wksampleproduct'}</label>
                <div class="form-group">
                    {foreach from=$allLanguages item=lang}
                        <div class="translatable-field lang-{$lang.id_lang} row" {if $lang.id_lang != $wk_language}style="display: none;"{/if}>
                            <div class="col-lg-9">
                                <textarea name="wk_sample_desc_{$lang.id_lang}" class="autoload_rte form-control">
                                    {if isset($sample['description']) && isset($sample['description'][$lang.id_lang])}
                                        {$sample['description'][$lang.id_lang]}
                                    {/if}
                                </textarea>
                            </div>
                            <div class="col-lg-2">
                                <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                                    {$lang.iso_code}
                                    <i class="icon-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    {foreach from=$allLanguages item=langOption}
                                    <li>
                                        <a href="javascript:hideOtherLanguage({$langOption.id_lang});" tabindex="-1">{$langOption.name}</a>
                                    </li>
                                    {/foreach}
                                </ul>
                            </div>
                        </div>
                    {/foreach}
                </div>
            </fieldset>
        </div>
    {/if}
</div>
