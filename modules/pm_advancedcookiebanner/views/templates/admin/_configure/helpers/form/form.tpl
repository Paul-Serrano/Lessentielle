{**
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
 *}

{extends file="helpers/form/form.tpl"}

{block name="label"}
    {* We prevent the label block from doing anything on PS 1.5, as we add the label manually for each input we use *}
    {if version_compare($ps_version, '1.6.0.0', '>=')}
        {$smarty.block.parent}
    {/if}
{/block}

{block name="field"}
    {if version_compare($ps_version, '1.6.0.0', '<')}
        <div class="margin-form bo-remove-padding-left">
    {/if}
    {$smarty.block.parent}
    {if version_compare($ps_version, '1.6.0.0', '<')}
        </div>
    {/if}
{/block}

{block name="input"}
    {if $input.type == 'custom_columns'}
        {if version_compare($ps_version, '1.6.0.0', '<')}
            <div class="acbOption moduleColumnsOptionContainer {if !empty($input.form_group_class)}{$input.form_group_class|escape:'html':'UTF-8'}{/if}">
            <label>{$input.label|escape:'html':'UTF-8'}</label>
        {/if}
            <div id="acbLeftColumn" class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <h2 class="acbSubtitle">{l s='Modules enabled without consent' mod='pm_advancedcookiebanner'}</h2>
                <ul id="availableModulesList" class="connectedSortable moduleList no-margin" data-id-input="PM_ACB_MODULES_ALLOWED">
                    {if !empty($input.values.list.allowed)}
                        {foreach from=$input.values.list.allowed item=moduleInfos}
                            <li data-module-name="{$moduleInfos.name|escape:'html':'UTF-8'}" class="acbModuleBlacklist col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span class="acbModuleLogo">
                                    <img src="../modules/{$moduleInfos.name|escape:'html':'UTF-8'}/logo.png" />
                                </span>
                                <span class="acbModuleDisplayName">{$moduleInfos.displayName|escape:'html':'UTF-8'}</span>
                            </li>
                        {/foreach}
                    {/if}
                </ul>
            </div>
            <div id="acbColumnsContainer" class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                <div class="col-lg-12 row">
                    <h2 class="acbSubtitle">{l s='Statistics modules' mod='pm_advancedcookiebanner'}</h2>
                    <ul id="acbReceiverAnalytics" data-id-input="PM_ACB_MODULES_ANALYTICS" class="connectedSortable">
                        <div class="acbPlaceholder {if !empty($input.values.list.analytics)}hide{/if}">
                            {l s='Drag here the module(s) that use cookies for statistics purposes' mod='pm_advancedcookiebanner'}
                        </div>
                        {if !empty($input.values.list.analytics)}
                            {foreach from=$input.values.list.analytics item=moduleInfos}
                                <li data-module-name="{$moduleInfos.name|escape:'html':'UTF-8'}" class="acbModuleBlacklist">
                                    <span class="acbModuleLogo">
                                        <img src="../modules/{$moduleInfos.name|escape:'html':'UTF-8'}/logo.png" />
                                    </span>
                                    <span class="acbModuleDisplayName">{$moduleInfos.displayName|escape:'html':'UTF-8'}</span>
                                    <div class="acbRemoveModuleIconContainer">
                                        <span class="ui-icon ui-icon-trash"></span>
                                    </div>
                                </li>
                            {/foreach}
                        {/if}
                    </ul>
                </div>
                <div class="col-lg-12 row">
                    <h2 class="acbSubtitle">{l s='Marketing and Social network modules' mod='pm_advancedcookiebanner'}</h2>
                    <ul id="acbReceiverMarketing" data-id-input="PM_ACB_MODULES_MARKETING" class="connectedSortable">
                        <div class="acbPlaceholder {if !empty($input.values.list.marketing)}hide{/if}">
                            {l s='Drag here the module(s) that use cookies for marketing or social purposes' mod='pm_advancedcookiebanner'}
                        </div>
                        {if !empty($input.values.list.marketing)}
                            {foreach from=$input.values.list.marketing item=moduleInfos}
                                <li data-module-name="{$moduleInfos.name|escape:'html':'UTF-8'}" class="acbModuleBlacklist">
                                    <span class="acbModuleLogo">
                                        <img src="../modules/{$moduleInfos.name|escape:'html':'UTF-8'}/logo.png" />
                                    </span>
                                    <span class="acbModuleDisplayName">{$moduleInfos.displayName|escape:'html':'UTF-8'}</span>
                                    <div class="acbRemoveModuleIconContainer">
                                        <span class="ui-icon ui-icon-trash"></span>
                                    </div>
                                </li>
                            {/foreach}
                        {/if}
                    </ul>
                </div>
            </div>

            <input type="text" class="hide" name="PM_ACB_MODULES_ALLOWED" value="{$input.values.input.allowed|escape:'html':'UTF-8'}" />
            <input type="text" class="hide" name="PM_ACB_MODULES_ANALYTICS" value="{$input.values.input.analytics|escape:'html':'UTF-8'}" />
            <input type="text" class="hide" name="PM_ACB_MODULES_MARKETING" value="{$input.values.input.marketing|escape:'html':'UTF-8'}" />

        {if version_compare($ps_version, '1.6.0.0', '<')}
            </div>
        {/if}

    {elseif $input.type == 'custom_checkboxes'}
        {if version_compare($ps_version, '1.6.0.0', '<')}
            <div class="acbOption moduleListContainer {if !empty($input.form_group_class)}{$input.form_group_class|escape:'html':'UTF-8'}{/if}">
            <label>{$input.label|escape:'html':'UTF-8'}</label>
        {/if}
            <div class="col-lg-9">
                <table class="table table-bordered no-margin">
                    <thead>
                        <tr>
                            <th colspan="2" class="fixed-width-xs">
                                <span class="title_box">
                                    <input type="checkbox" onclick="checkDelBoxes(this.form, '{$input.name|escape:'html':'UTF-8'}[]', this.checked)">&nbsp;&nbsp;{l s='Check All' mod='pm_advancedcookiebanner'}
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                    {foreach $input.values as $value}
                        {foreach from=$value item=moduleInfos name=modules}
                            {assign var=alternateColumns value={cycle values="open,close"}}
                            {if $alternateColumns == 'open'}<tr>{/if}
                                <td class="acb-module-blacklist"{if $smarty.foreach.modules.last && $alternateColumns == 'open'} colspan="2"{/if}>
                                    <span class="acb-module-checkbox">
                                    {if $moduleInfos.checked == true}
                                        <input type="checkbox" name="{$input.name|escape:'html':'UTF-8'}[]" value="{$moduleInfos.name|escape:'html':'UTF-8'}" checked>
                                    {else}
                                        <input type="checkbox" name="{$input.name|escape:'html':'UTF-8'}[]" value="{$moduleInfos.name|escape:'html':'UTF-8'}">
                                    {/if}
                                    </span>
                                    <span class="acb-module-logo">
                                        <img src="../modules/{$moduleInfos.name|escape:'html':'UTF-8'}/logo.png" />
                                    </span>
                                    <span class="acb-module-name">{$moduleInfos.displayName|escape:'html':'UTF-8'}</span>
                                </td>
                            {if $alternateColumns == 'close'}</tr>{/if}
                        {/foreach}
                        {if !empty($alternateColumns) && $alternateColumns == 'open'}</tr>{/if}
                    {/foreach}
                    </tbody>
                </table>
            </div>

        {if version_compare($ps_version, '1.6.0.0', '<')}
            </div>
        {/if}

    {elseif $input.type == 'blocked_modules_list_explaination'}
        {if version_compare($ps_version, '1.6.0.0', '<')}
            <div {if !empty($input.form_group_class)}class="{$input.form_group_class|escape:'html':'UTF-8'}"{/if}>
        {/if}
            <div class="acbBlockedModulesListExplanation {if version_compare($ps_version, '1.6.0.0', '<')}info{else}alert alert-info{/if}">
                <p>{l s='Select here the modules that use cookies and/or collect data, and have to be blocked until your customer has accepted your terms of use.' mod='pm_advancedcookiebanner'}</p>
                <ul>
                    <li>{l s='The modules listed on the left column are the modules installed on your shop. All the modules in this column are enabled by default, and cannot be refused.' mod='pm_advancedcookiebanner'}</li>
                    <li>{l s='The modules listed on the right column are the modules that you want to block until your customer has accepted your terms. These 2 categories can be declined, individually.' mod='pm_advancedcookiebanner'}</li>
                </ul>
            </div>
        {if version_compare($ps_version, '1.6.0.0', '<')}
            </div>
        {/if}
    {elseif $input.type == 'maintenance_ip'}
        {if version_compare($ps_version, '1.6.0.0', '<')}
            <div class="acbOption {if !empty($input.form_group_class)}{$input.form_group_class|escape:'html':'UTF-8'}{/if}">
                <label>{$input.label|escape:'html':'UTF-8'}</label>
                <div class="margin-form">
                    <input type="text" name="{$input.name|escape:'html':'UTF-8'}" class="{$input.class|escape:'html':'UTF-8'}" value="{$fields_value[$input.name]|escape:'html':'UTF-8'}" style="display:inline-block;">
                    <button type="button" class="btn btn-default" onclick="addRemoteAddr();"><i class="icon-plus"></i> {l s='Add my IP' mod='pm_advancedcookiebanner'}</button>

                    {block name="description"}
                        <div class="labelDesc">
                            {$smarty.block.parent}
                        </div>
                    {/block}
                </div>
            </div>
        {else}
            <input type="text" name="{$input.name|escape:'html':'UTF-8'}" class="{$input.class|escape:'html':'UTF-8'}" value="{$fields_value[$input.name]|escape:'html':'UTF-8'}" style="display:inline-block;">
            <button type="button" class="btn btn-default" onclick="addRemoteAddr();"><i class="icon-plus"></i> {l s='Add my IP' mod='pm_advancedcookiebanner'}</button>
        {/if}

        <script type="text/javascript">
            function addRemoteAddr()
            {
                var length = $("input[name={$input.name|escape:'html':'UTF-8'}]").attr("value").length;
                if (length > 0) {
                    $("input[name={$input.name|escape:'html':'UTF-8'}]").attr("value", $("input[name={$input.name|escape:'html':'UTF-8'}]").attr("value") + ",{Tools::getRemoteAddr()|escape:'html':'UTF-8'}");
                } else {
                    $("input[name={$input.name|escape:'html':'UTF-8'}]").attr("value", "{Tools::getRemoteAddr()|escape:'html':'UTF-8'}");
                }
            }
        </script>

    {elseif $input.type == 'html' }
        {if version_compare($ps_version, '1.6.0.0', '<')}
            <div {if !empty($input.form_group_class)}class="{$input.form_group_class|escape:'html':'UTF-8'}"{/if}>
                {$input.html_content}{* HTML *}
                {if !empty($input.desc)}
                    <p class="margin-form preference_description">{$input.desc|escape:'html':'UTF-8'}</p>
                {/if}
            </div>
        {else}
            {$smarty.block.parent}
        {/if}

    {elseif $input.type == 'radio'}
        {if version_compare($ps_version, '1.6.0.0', '<')}
            <div class="acbOption{if !empty($input.form_group_class)} {$input.form_group_class|escape:'html':'UTF-8'}{/if}">
                <label>{$input.label|escape:'html':'UTF-8'}</label>
                <div class="margin-form">
                    {foreach $input.values as $value}
                        <div class="acbRadio">
                            <label {if isset($input.class)}class="{$input.class|escape:'html':'UTF-8'}"{/if} for="{$value.id|escape:'html':'UTF-8'}">
                                <input type="radio" name="{$input.name|escape:'html':'UTF-8'}" id="{$value.id|escape:'html':'UTF-8'}" value="{$value.value|escape:'htmlall':'UTF-8'}"
                                {if $fields_value[$input.name] == $value.value}checked="checked"{/if}
                                {if isset($input.disabled) && $input.disabled}disabled="disabled"{/if} />
                                {if isset($input.is_bool) && $input.is_bool == true}
                                    {if $value.value == 1}
                                        <img src="../img/admin/enabled.gif" alt="{$value.label|escape:'html':'UTF-8'}" title="{$value.label|escape:'html':'UTF-8'}" />
                                    {else}
                                        <img src="../img/admin/disabled.gif" alt="{$value.label|escape:'html':'UTF-8'}" title="{$value.label|escape:'html':'UTF-8'}" />
                                    {/if}
                                {else}
                                    {$value.label|escape:'html':'UTF-8'}
                                {/if}
                            </label>
                            {if isset($input.br) && $input.br}<br />{/if}
                            {if isset($value.p) && $value.p}<p>{$value.p|escape:'html':'UTF-8'}</p>{/if}
                        </div>
                    {/foreach}
                </div>
            </div>
        {else}
            {$smarty.block.parent}
        {/if}

    {elseif $input.type == "text" || $input.type == "select" || $input.type == "textarea"}
        {if version_compare($ps_version, '1.6.0.0', '<')}
            <div class="acbOption {if !empty($input.form_group_class)}{$input.form_group_class|escape:'html':'UTF-8'}{/if}">
                <label>{$input.label|escape:'html':'UTF-8'}</label>
                {$smarty.block.parent}
            </div>
        {else}
            {$smarty.block.parent}
        {/if}

    {elseif $input.type == 'color'}
        {if version_compare($ps_version, '1.6.0.0', '<')}
            <div class="acbOption {if !empty($input.form_group_class)}{$input.form_group_class|escape:'html':'UTF-8'}{/if}">
                <label>{$input.label|escape:'html':'UTF-8'}</label>
                <input type="color"
                    data-hex="true"
                    {if isset($input.class)}class="{$input.class|escape:'html':'UTF-8'}"
                    {else}class="color mColorPickerInput"{/if}
                    name="{$input.name|escape:'html':'UTF-8'}"
                    value="{$fields_value[$input.name]|escape:'htmlall':'UTF-8'}" />
                {if !empty($input.desc)}
                    <p class="margin-form preference_description">{$input.desc|escape:'html':'UTF-8'}</p>
                {/if}
            </div>
        {else}
            {$smarty.block.parent}
        {/if}

    {elseif $input.type == 'custom_file'}
        {if version_compare($ps_version, '1.6.0.0', '<')}
            <div class="acbOption {if !empty($input.form_group_class)}{$input.form_group_class|escape:'html':'UTF-8'}{/if}">
            <label>{$input.label|escape:'html':'UTF-8'}</label>
        {/if}

        <div class="form-group">
            <div class="col-sm-6">
                <input id="{$input.name|escape:'html':'UTF-8'}" type="file" name="{$input.name|escape:'html':'UTF-8'}" class="hide" accept="image/png,image/jpg,image/gif" />
                <div class="dummyfile input-group">
                    <span class="input-group-addon"><i class="icon-file"></i></span>
                    <input id="{$input.name|escape:'html':'UTF-8'}-name" class="disabled" style="cursor:default;" type="text" name="filename" readonly />
                    <span class="input-group-btn">
                        <button id="{$input.name|escape:'html':'UTF-8'}-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
                            <i class="icon-folder-open"></i> {l s='Choose an image' mod='pm_advancedcookiebanner'}
                        </button>
                    </span>
                </div>
            </div>
        </div>

        <div class="form-group {if version_compare($ps_version, '1.6.0.0', '<')}margin-form{/if}">
            <div id="{$input.name|escape:'html':'UTF-8'}-images-thumbnails" class="col-lg-12">
                <img src="{$acb_path|escape:'html':'UTF-8'}views/img/{$acb_mobile_image_name|escape:'html':'UTF-8'}" class="img-thumbnail pm_acb_img_bo" />
                {if $acb_mobile_image_name != "default.png"}
                    <input type="checkbox" name="{$input.name|escape:'html':'UTF-8'}-remove"> {l s='Remove this image' mod='pm_advancedcookiebanner'}
                {/if}
            </div>
        </div>

        {if version_compare($ps_version, '1.6.0.0', '<')}
            </div>
        {/if}

        <script>
            $(document).ready(function(){
                $('#{$input.name|escape:'html':'UTF-8'}-selectbutton').click(function(e){
                    $('#{$input.name|escape:'html':'UTF-8'}').trigger('click');
                });
                $('#{$input.name|escape:'html':'UTF-8'}-name').click(function(e){
                    $('#{$input.name|escape:'html':'UTF-8'}').trigger('click');
                });
                $('#{$input.name|escape:'html':'UTF-8'}').change(function(e){
                    var val = $(this).val();
                    var file = val.split(/[\\/]/);
                    $('#{$input.name|escape:'html':'UTF-8'}-name').val(file[file.length-1]);
                });
            });
        </script>
    {elseif $input.type == 'switch'}
        {if version_compare($ps_version, '1.6.0.0', '<')}
            <div class="acbOption {if !empty($input.form_group_class)}{$input.form_group_class|escape:'html':'UTF-8'}{/if}">
                <label>{$input.label|escape:'html':'UTF-8'}</label>
                <div class="margin-form">
                    <span class="switch prestashop-switch fixed-width-lg">
                        {foreach $input.values as $value}
                            <input type="radio" name="{$input.name|escape:'html':'UTF-8'}"{if $value.value == 1} id="{$input.name|escape:'html':'UTF-8'}_on"{else} id="{$input.name|escape:'html':'UTF-8'}_off"{/if} value="{$value.value|intval}"{if $fields_value[$input.name] == $value.value} checked="checked"{/if}{if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}/>
                            {strip}
                                <label {if $value.value == 1} for="{$input.name|escape:'html':'UTF-8'}_on"{else} for="{$input.name|escape:'html':'UTF-8'}_off"{/if}>
                                    {if $value.value == 1}
                                        {l s='Yes' mod='pm_advancedcookiebanner'}
                                    {else}
                                        {l s='No' mod='pm_advancedcookiebanner'}
                                    {/if}
                                </label>
                            {/strip}
                        {/foreach}
                        <a class="slide-button btn"></a>
                    </span>

                    {block name="description"}
                        <div class="labelDesc">
                            {$smarty.block.parent}
                        </div>
                    {/block}
                </div>
            </div>
        {else}
            {$smarty.block.parent}
        {/if}
    {else if $input.type == 'advancedStyles'}
        {if version_compare($ps_version, '1.6.0.0', '<')}
            <div class="acbOption {if !empty($input.form_group_class)}{$input.form_group_class|escape:'html':'UTF-8'}{/if}">
                <label>{$input.label|escape:'html':'UTF-8'}</label>
                <div class="margin-form">
                    <div class="col-lg-9 pm_acb_advanced_styles_container">
                        <textarea style="height:150px;" rows="5" name="{$input.name|escape:'html':'UTF-8'}" id="{$input.name|escape:'html':'UTF-8'}">{$advanced_styles}{* HTML *}</textarea>
                    </div>
                </div>
            </div>
        {else}
            <div class="col-lg-9 pm_acb_advanced_styles_container">
                <textarea style="height:150px;" rows="5" name="{$input.name|escape:'html':'UTF-8'}" id="{$input.name|escape:'html':'UTF-8'}">{$advanced_styles}{* HTML *}</textarea>
            </div>
        {/if}
    {else}
        {$smarty.block.parent}
    {/if}
{/block}
