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

{if !$acb_is_legal_cms_page}
	<style type="text/css">
        {if $acb_gdpr_mode}
            #acb-accept-all-button.acb-button {ldelim}
                font-size: {$module_configuration.PM_ACB_BUTTON_FONT_SIZE|intval}px;
                color: {$module_configuration.PM_ACB_BUTTON_FONT_COLOR|escape:'html':'UTF-8'};
                background-color: {$module_configuration.PM_ACB_BUTTON_BG_COLOR|escape:'html':'UTF-8'};
            {rdelim}
            .acb-button {ldelim}
                font-size: {$module_configuration.PM_ACB_BUTTON_FONT_SIZE|intval}px;
                color: {$module_configuration.PM_ACB_BUTTON_BG_COLOR|escape:'html':'UTF-8'};
                border-color: {$module_configuration.PM_ACB_BUTTON_BG_COLOR|escape:'html':'UTF-8'};
                background-color: #fff;
            {rdelim}
        {else}
            #acb-close-button.acb-button {ldelim}
                font-size: {$module_configuration.PM_ACB_BUTTON_FONT_SIZE|intval}px;
                color: {$module_configuration.PM_ACB_BUTTON_FONT_COLOR|escape:'html':'UTF-8'};
                background-color: {$module_configuration.PM_ACB_BUTTON_BG_COLOR|escape:'html':'UTF-8'};
            {rdelim}
        {/if}
        #acb_link_information {ldelim}
            font-size: {$module_configuration.PM_ACB_FONT_SIZE|intval * 0.9}px;
            color: {$module_configuration.PM_ACB_FONT_COLOR|escape:'html':'UTF-8'} !important;
        {rdelim}
        #acb-banner *:not(.acb-button) {ldelim}color: {$module_configuration.PM_ACB_FONT_COLOR|escape:'html':'UTF-8'};{rdelim}
        #acb-banner p {ldelim}
            font-size: {$module_configuration.PM_ACB_FONT_SIZE|intval}px;
            {if $module_configuration.PM_ACB_CMS == 0}
                margin: 0 0 0px!important;
            {else}
                margin: 0 0 6px;
            {/if}
        {rdelim}
        #acb-banner {ldelim}
            background-color: {$module_configuration.PM_ACB_BG_COLOR|escape:'html':'UTF-8'};
            color: {$module_configuration.PM_ACB_FONT_COLOR|escape:'html':'UTF-8'};
            border-color: {$module_configuration.PM_ACB_BORDER_COLOR|escape:'html':'UTF-8'};
            text-align: {$module_configuration.PM_ACB_TEXT_ALIGN|escape:'html':'UTF-8'};
            box-shadow: 0px 0px 5px 0px {$module_configuration.PM_ACB_BG_COLOR|escape:'html':'UTF-8'};
            {if $module_configuration.PM_ACB_POSITION == 2}
                border-top-width: {$module_configuration.PM_ACB_BORDER_SIZE|intval}px;
            {else}
                border-bottom-width: {$module_configuration.PM_ACB_BORDER_SIZE|intval}px;
            {/if}
        {rdelim}
        @media screen and (max-width: 767px) {ldelim}
            #acb-banner {ldelim}
                border-width: {$module_configuration.PM_ACB_BORDER_SIZE|intval}px;
            {rdelim}
            .acb_link_information_container {ldelim}
                border-color: {$module_configuration.PM_ACB_FONT_COLOR|escape:'html':'UTF-8'};
            {rdelim}
        {rdelim}
	</style>

    <div id="acb-banner" class="acb-position-{if $module_configuration.PM_ACB_POSITION == 1}top{else}bottom{/if}{if $acb_gdpr_mode} acb-gdpr{/if}">
        <div id="acb-content" class="{$module_configuration.PM_ACB_CLASSES_CONTENT|escape:'html':'UTF-8'}">
            {if $smarty.const._PS_VERSION_ >= '1.7.0.0'}
                {$banner_content nofilter}{* HTML *}
            {else}
                {$banner_content}{* HTML *}
            {/if}
            {if $module_configuration.PM_ACB_CMS != 0}
                <div class="acb_link_information_container">
                    {if $acb_is_17}
                        <i class="material-icons">chevron_right</i>
                    {elseif $acb_is_16}
                        <i class="icon-chevron-right"></i>
                    {/if}
                    <a id="acb_link_information" href="{$module_configuration.PM_ACB_CMS_LINK|escape:'html':'UTF-8'}">
                        {if !empty($cms_link_label)}
                            {$cms_link_label|escape:'html':'UTF-8'}
                        {else}
                            {l s='More information' mod='pm_advancedcookiebanner'}
                        {/if}
                    </a>
                </div>
            {/if}
            {if $acb_gdpr_mode}
                <div class="acbCheckboxesContainer">
                    <div class="acbCheckboxContainer{if $acb_is_16} acbCheckboxContainer16{/if}">
                        <input name="acbConsentMandatory" class="acbCheckbox" type="checkbox" checked disabled />
                        <label class="acbConsentLabel" for="acbConsentMandatory">{l s='Mandatory cookies' mod='pm_advancedcookiebanner'}</label>
                    </div>
                    <div class="acbCheckboxContainer{if $acb_is_16} acbCheckboxContainer16{/if}">
                        <input name="acbConsentAnalytics" class="acbCheckbox" type="checkbox" />
                        <label class="acbConsentLabel" for="acbConsentAnalytics">{l s='Statistics cookies' mod='pm_advancedcookiebanner'}</label>
                    </div>
                    <div class="acbCheckboxContainer{if $acb_is_16} acbCheckboxContainer16{/if}">
                        <input name="acbConsentMarketing" class="acbCheckbox" type="checkbox" />
                        <label class="acbConsentLabel" for="acbConsentMarketing">{l s='Marketing and Social network cookies' mod='pm_advancedcookiebanner'}</label>
                    </div>
                </div>
            {/if}
        </div>
        <div id="acb-action" class="{$module_configuration.PM_ACB_CLASSES_BUTTON|escape:'html':'UTF-8'}">
            {if $acb_gdpr_mode}
                <button id="acb-deny-all-button" class="tvall-inner-btn"><p>{l s='Deny all' mod='pm_advancedcookiebanner'}</p></button>
                <button id="acb-close-button" class="tvall-inner-btn"><p>{l s='Accept current selection' mod='pm_advancedcookiebanner'}</p></button>
                <button id="acb-accept-all-button" class="tvall-inner-btn"><p>{l s='Accept all' mod='pm_advancedcookiebanner'}</p></button>
            {else}
                <button id="acb-close-button" class="tvall-inner-btn"><p>{l s='I agree' mod='pm_advancedcookiebanner'}</p></button>
            {/if}
        </div>
    </div>
{/if}
