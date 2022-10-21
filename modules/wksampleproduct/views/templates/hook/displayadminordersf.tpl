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

<div class="card">
    <div class="card-header">
        <i class="icon-money"></i>
        <h3>{l s='Sample Product' mod='wksampleproduct'}<span class="badge badge-info">{$sampleCount}</span></h3>

    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>{l s='Product' mod='wksampleproduct'}</th>
                    <th>{l s='Quantity' mod='wksampleproduct'}</th>
                    <th>
                        <span class="title_box">{l s='Total Price' mod='wksampleproduct'}</span>
                        <small class="text-muted">({l s='Tax included' mod='wksampleproduct'})</small>
                    </th>
                    <th>{l s='Action' mod='wksampleproduct'}</th>
                </tr>
            </thead>
            <tbody>
                {foreach $sample as $product}
                    <tr>
                        <td>{$product.product_name}</td>
                        <td><span class="product_quantity_show badge">{$product.product_quantity}</span></td>
                        <td>{$product.sample_price}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{$link->getAdminLink('AdminProducts', true, ['id_product' => $product.product_id, 'updateproduct' => 1])}#tab-hooks" class="btn btn-default" title="View">
                                    <i class="icon-search-plus"></i>
                                    {l s='View' mod='wksampleproduct'}
                                </a>
                            </div>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</div>
