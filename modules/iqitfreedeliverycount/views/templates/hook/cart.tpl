{*
* 2017 IQIT-COMMERCE.COM
*
* NOTICE OF LICENSE
*
* This file is licenced under the Software License Agreement.
* With the purchase or the installation of the software in your application
* you accept the licence agreement
*
* @author    IQIT-COMMERCE.COM <support@iqit-commerce.com>
* @copyright 2017 IQIT-COMMERCE.COM
* @license   Commercial license (You can not resell or redistribute this software.)
*
*}

{block name='iqitfreedeliverycount_cart'}
<div class="iqitfreedeliverycount iqitfreedeliverycount-detach hidden-detach clearfix {if $hide}iqitfreedeliverycount-hidden{/if}">
<div class="fd-table">
<div class="ifdc-icon fd-table-cell"><i class="icon icon-truck"></i></div>

<div class="ifdc-remaining  fd-table-cell">{l s='Spend' mod='iqitfreedeliverycount'} <span class="ifdc-remaining-price">{$free_ship_remaining}</span> {l s='more and get Free Shipping!' mod='iqitfreedeliverycount'}</div></div>
{if isset($txt) && $txt != ''}<div class="ifdc-txt"><div class="ifdc-txt-content">{$txt nofilter}</div></div>{/if} {* HTML, cannot escape*}
</div>
{/block}

