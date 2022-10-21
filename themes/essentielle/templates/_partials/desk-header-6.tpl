{**
* 2007-2021 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License 3.0 (AFL-3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/AFL-3.0
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2021 PrestaShop SA
* @license https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
* International Registered Trademark & Property of PrestaShop SA
*}
{strip}
    <div class="tvcmsdesktop-top-header-wrapper header-6" data-header-layout="6"> 
        <div class='container-fluid tvcmsdesktop-top-second hidden-md-down'>
            <div class='tvheader-offer-wrapper tvforce-hide'>
                {hook h='displayTopOfferText'}
            </div>
            <div class="container">
                <div class="row tvcmsdesktop-top-header-box">
                    <div class='col-sm-12 col-lg-2 col-md-2 col-xl-2 tvcms-header-logo-wrapper'>
                        <div class="hidden-sm-down tvcms-header-logo" id="tvcmsdesktop-logo">
                            {if $withData}
                            <div class="tv-header-logo">
                                <a href="{$urls.base_url}">
                                    <img class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}" height="35" width="201">
                                </a>
                            </div>
                            {/if}
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-8 col-md-8 col-xl-8 tvcms-header-menu-offer-wrapper tvcmsheader-sticky">
                        <div class="position-static tvcms-header-menu">
                            <div class='tvcmsmain-menu-wrapper'>
                                <div id='tvdesktop-megamenu'>
                                    {if $withData}
                                    {hook h='displayMegamenu'}
                                    {/if}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 col-md-2 col-xl-2 tvcmsheader-nav-right">
                        <div class="tv-contact-account-cart-wrapper">
                            <div class='tvcmssearch-wrapper' id="_desktop_search">
                                {if $withData}
                                {hook h='displayNavSearchBlock'}
                                {/if}
                            </div><div id='tvcmsdesktop-account-button'>
                                {if $withData}
                                <div class="tv-header-account tv-account-wrapper tvcms-header-myaccount">
                                    <button class="btn-unstyle tv-myaccount-btn tv-myaccount-btn-desktop" name="User Icon" aria-label="User Icon"> 
                                        <i class='material-icons tvsign-icon'>&#xe7fd;</i> 
                                    </button>
                                    <ul class="dropdown-menu tv-account-dropdown tv-dropdown">
                                        {if $customer.is_logged}
                                        <li><a href="{$urls.pages.my_account}" class="tvmyccount"><i class="material-icons">&#xe7fd;</i>{l s='My Account' d='Shop.Theme.Catalog'}</a></li>
                                        {/if} 
                                        <li class="tvcms-signin">{hook h='displayNavCustomerSignInBlock'}</li>
                                        <li class="ttvcms-wishlist-icon">{hook h='displayNavWishlistBlock'}</li>
                                        <li class="tvheader-compare">{hook h='displayNavProductCompareBlock'}</li>
                                        <li class="tvheader-language">{if $withData}{hook h='displayNavLanguageBlock'}{/if}</li>
                                        <li class="tvheader-currency">{if $withData}{hook h='displayNavCurrencyBlock'}{/if}</li>
                                    </ul>
                                </div>
                                {/if}
                            </div><div id="_desktop_cart_manage" class="tvcms-header-cart">{if $withData}{hook h='displayNavShoppingCartBlock'}
                                {/if}
                            </div>
                        </div>
                        <div class="tvcmsdesktop-contact tvforce-hide">{if $withData}{hook h='displayNav1'}{/if}</div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
{/strip}