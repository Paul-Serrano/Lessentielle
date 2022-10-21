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
var availableQuantity = 0;
$(document).ready(function(){
    if (typeof standardInCart != "undefined" && (standardInCart == 1)) {
        $(".product-add-to-cart, .product-prices").hide();
    }
    if (wkcontroller == 'cart') {
        correctCartView(true);
    }
    prestashop.on('updatedCart', function(res) {
        if (wkcontroller == 'cart') {
            correctCartView();
        }
    });
    prestashop.on("updatedProduct", function(resp) {
        if (wkcontroller == 'product') {
            var idProd = $('#wksamplebuybtn').attr('data-id-product');
            if (!isNaN(parseInt(idProd)) && (parseInt(idProd) > 0)) {
                getSampleMaxQuantity(idProd, resp.id_product_attribute);
            }
        }
    });
    if ($('.product-variants .form-control').length > 0) {
        $($('.product-variants .form-control')[0]).trigger('change');
    } else {
        var idProd = $('#wksamplebuybtn').attr('data-id-product');
        if (!isNaN(parseInt(idProd)) && (parseInt(idProd) > 0)) {
            getSampleMaxQuantity(idProd, 0);
        }
    }
});
function correctCartView()
{
    if (typeof samplesInCart != "undefined") {
        $.each(samplesInCart, function(index, item) {
            var ids = index.split('_');
            var id_prod = ids[0];
            var id_prod_attr = ids[1];

            $('.cart-line-product-actions a.remove-from-cart[data-id-product='+id_prod+'][data-id-product-attribute='+id_prod_attr+']').next().css('display', 'inline-block');
            $('.cart-line-product-actions a.remove-from-cart[data-id-product='+id_prod+'][data-id-product-attribute='+id_prod_attr+']').parent().parent().parent().parent().prev().find('.product-discount').remove();
            $('.cart-line-product-actions a.remove-from-cart[data-id-product='+id_prod+'][data-id-product-attribute='+id_prod_attr+']').parent().parent().parent().parent().prev().find('.product-line-info').removeClass('has-discount');
        });
    }
}

$(document).off('click', '.wkbootstrap-touchspin-down').on('click', '.wkbootstrap-touchspin-down', function() {
    var val = parseInt($('#wkquantity_wanted').val());
    if (val > 1) {
        $('#wkquantity_wanted').val(val-1);
        if ((maxSampleQty > 0) && ((val-1) > availableQuantity)) {
            $('#wksampleproductqty_spinerror').fadeIn();
            $("#wksamplebuybtn").prop('disabled', true);
        } else {
            $('#wksampleproductqty_spinerror').fadeOut();
            $("#wksamplebuybtn").removeAttr('disabled');
        }
    }
});

$(document).off('click', '.wkbootstrap-touchspin-up').on('click', '.wkbootstrap-touchspin-up', function() {
    var val = parseInt($('#wkquantity_wanted').val());
    $('#wkquantity_wanted').val(val+1);
    if ((maxSampleQty > 0) && ((val+1) > availableQuantity)) {
        $('#wksampleproductqty_spinerror').fadeIn();
        $("#wksamplebuybtn").prop('disabled', true);
    } else {
        $('#wksampleproductqty_spinerror').fadeOut();
        $("#wksamplebuybtn").removeAttr('disabled');
    }
});
$(document).off('click', '#wksamplebuybtn').on('click', '#wksamplebuybtn', function(e) {
    e.preventDefault();
    $('#wk_sp_ajax_error_wrap').fadeOut();
    var prod_qty = (isNaN(parseInt($('#wkquantity_wanted').val())) || (parseInt($('#wkquantity_wanted').val()) < 0)) ? 0: parseInt($('#wkquantity_wanted').val());
    $('.sample_ajax_errors').remove();
    if ((maxSampleQty > 0) && (prod_qty > availableQuantity)) {
        $('#wksampleproductqty_spinerror').fadeIn();
        $("#wksamplebuybtn").prop('disabled', true);
    } else {
        $('#wksampleproductqty_spinerror').fadeOut();
        $("#wksamplebuybtn").removeAttr('disabled');
        var id_prod = $(this).attr('data-id-product');
        var id_attr = $(this).attr('data-id-product-attr');
        $('#'+id_prod+'-'+id_attr+'-loader').removeClass();
        if (id_prod) {
            var formData = $('#add-to-cart-or-refresh').serializeArray();
            $.each(formData, function(idx, dataItem) {
                if (dataItem.name == 'qty') {
                    formData[idx].value = prod_qty;
                }
            });
            $.ajax({
                type: 'POST',
                headers: {
                    "cache-control": "no-cache"
                },
                url: sampleSpecificPriceURL+'?'+$.param(formData)+'?rand=' + new Date().getTime(),
                async: false,
                cache: false,
                dataType: "json",
                data: {},
                success: function(response) {
                    $('#'+id_prod+'-'+id_attr+'-loader').addClass('customloader');
                    if (response.status == 'ok') {
                        formData.push({
                            name: "action",
                            value: "update"
                        });
                        formData.push({
                            name: "add",
                            value: 1
                        });
                        $.post(sampleCartActionUrl, $.param(formData), null, 'json').then(function (resp) {
                            $(".product-add-to-cart, .product-prices").hide();
                            getSampleMaxQuantity(resp.id_product, resp.id_product_attribute);

                            prestashop.emit('updateCart', {
                                reason: {
                                    idProduct: resp.id_product,
                                    idCustomization: resp.id_customization,
                                    idProductAttribute: resp.id_product_attribute,
                                    cart: resp.cart,
                                    linkAction: 'add-to-cart',
                                    isSample: true
                                },
                                resp: resp
                            });
                        });
                    } else {
                        $('#wk_sp_ajax_error').text(response.msg);
                        $('#wk_sp_ajax_error_wrap').fadeIn();
                    }
                },
            });
        }
    }
});
function getSampleMaxQuantity(id_product, id_attr)
{
    $.ajax({
        type: 'POST',
        headers: {
            "cache-control": "no-cache"
        },
        url: sampleSpecificPriceURL,
        async: false,
        cache: false,
        dataType: "json",
        data: {
            ajax: true,
            action: 'getSampleInfo',
            attribute_id: id_attr,
            id_product: id_product
        },
        success: function(result) {
            standardInCart = result.sampleInCart;
            var addedStandard = result.addedStandard;
            availableQuantity = result.availableQuantity;
            maxSampleQty = result.maxSampleQty;
            var prod_qty = $('#wkquantity_wanted').val();
            $('div.alert').hide();
            if (addedStandard) {
                $('#wk_sp_standard_product_error').fadeIn();
                $('.wk-sample-block .product-quantity').hide();
            } else {
                if ((maxSampleQty > 0) && (prod_qty > availableQuantity)) {
                    $('#wksampleproductqty_stockerror').fadeIn();
                    $('#wksampleproductqty_spinerror').fadeOut();
                    $("#wksamplebuybtn").prop('disabled', true);
                } else if (result.showStockWarning) {
                    $('#wksampleproductqty_spinerror').fadeIn();
                    $('#wksampleproductqty_stockerror').fadeOut();
                    $("#wksamplebuybtn").prop('disabled', false);
                }
                $('.wk-sample-block .product-quantity').show();
                $('#wk_sp_standard_product_error').hide();
            }
            if (typeof standardInCart != "undefined" && (standardInCart == 1)) {
                $(".product-add-to-cart, .product-prices").hide();
            } else {
                $(".product-add-to-cart, .product-prices").show();
            }
            return true;
        }
    });
    return 0;
}
