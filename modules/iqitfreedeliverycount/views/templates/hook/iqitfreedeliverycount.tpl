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

{block name='iqitfreedeliverycount_detach'}
<div class="card iqitfreedeliverycount iqitfreedeliverycount-cartpage {if $hide}iqitfreedeliverycount-hidden{/if}">
<div class="ifdc-remaining">{l s='Amount left for free shipping' mod='iqitfreedeliverycount'}: <span class="ifdc-remaining-price">{$free_ship_remaining}</span></div>

<span class="ifdc-startat">{l s='Free delivery start at' mod='iqitfreedeliverycount'}: {$free_ship_from}</span>
{if isset($txt) && $txt != ''}<div class="ifdc-txt"><div class="ifdc-txt-content">{$txt nofilter}</div></div>{/if} {* HTML, cannot escape*}
</div>
{/block}

