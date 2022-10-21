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

$(document).ready(function(){
    displayPriceTypeVal($("#wk_sample_price_type").val());
    $(document).on("change", "#wk_sample_price_type", function(){
        var id_type = $(this).val();
        displayPriceTypeVal(id_type);
    });
    if (!$('#wk_sp_virtual_switch').is(":checked")) {
        $("#wk_sp_file_input, #wk_sp_file_delete").fadeOut();
    }
    $('#wk_sp_virtual_switch').on('change', function() {
        if ($('#wk_sp_virtual_switch').is(":checked")) {
            $("#wk_sp_file_input, #wk_sp_file_delete").fadeIn();
        } else {
            $("#wk_sp_file_input, #wk_sp_file_delete").fadeOut();
        }
    });
    $('#form_step1_type_product').on('change', function() {
        var isVirtual = $('#wk_sample_file_input_block').attr('data-virtual-product');
        if (($(this).val() == 2) && (isVirtual == 1)) {
            $('#wk_sample_file_input_block').removeClass('d-none');
            $('#form_hooks_uploaded_sample_file').parent().parent().fadeIn();
        } else {
            $('#wk_sample_file_input_block').addClass('d-none');
            $('#form_hooks_uploaded_sample_file').parent().parent().fadeOut();
        }
    });
    $('.js-btn-save, #submit').on('click', function() {
        if ($('#tab_hooks a').attr('aria-selected') && ($('#module_wksampleproduct').css('display') == 'block') && ($('#form_step1_type_product').val() == 2)) {
            if ($('#wk_sp_virtual_switch').is(":checked")) {
                uploadLSampleImage();
            } else {
                productId = $('#form_hooks_uploaded_sample_file').attr('data-id');
                deleteSampleImage(productId);
            }
        }
    });
    $('#form_hooks_delete_sample_file').on('click', function() {
        productId = $(this).attr('data-id');
        deleteSampleImage(productId);
    });
    function uploadLSampleImage()
    {
        image = $("#form_hooks_uploaded_sample_file")[0].files[0];
        var myFormData = new FormData();
        var idProduct = $('#form_hooks_uploaded_sample_file').attr('data-id');
        myFormData.append('pictureFile', image);
        myFormData.append('action', "saveSampleFile");
        myFormData.append('id_product', idProduct);

        if (typeof image != "undefined") {
            if (image.size/1000000 > maxFileSizeInPs) {
                animateStatusBar('error', maxSizeErrorMsg);
                alert(maxSizeErrorMsg);
            } else {
                $.ajax({
                    cache: false,
                    type: "POST",
                    url: saveSample,
                    dataType: "json",
                    processData: false, // important
                    contentType: false,
                    data: myFormData,
                    success: function(result) {
                        if (result.success == 1) {
                            $('#form_hooks_delete_sample_file').fadeIn();
                            animateStatusBar("success", uploadSuccessMsg+': '+result.name);
                        } else {
                            animateStatusBar("error", result.text);
                        }
                    }
                });
            }
        } else if ($('#form_hooks_delete_sample_file').css('display') === 'none') {
            if ($('#switch').is(":checked")) {
                animateStatusBar('error', noSampleErrorMsg);
                alert(noSampleErrorMsg);
            }
        }
    }

    function animateStatusBar(type, msg)
    {
        if (type == 'success') {
            $('#wk_sp_sample_file_status').removeClass('text-muted text-danger');
            $('#wk_sp_sample_file_status').addClass('text-success');
            $('#wk_sp_sample_file_status').animate({backgroundColor:'green'}, 300);
        } else {
            $('#wk_sp_sample_file_status').removeClass('text-muted text-success');
            $('#wk_sp_sample_file_status').addClass('text-danger');
            $('#wk_sp_sample_file_status').animate({backgroundColor:'red'}, 300);
        }
        $('#wk_sp_sample_file_status em').text(msg);
        $('#wk_sp_sample_file_status').animate({backgroundColor:'transparent'}, 300);
    }

    function deleteSampleImage(idProduct)
    {
        $.ajax({
            type: "POST",
            url: saveSample,
            dataType: "json",
            data: {
                action: 'deleteSample',
                'id_product': idProduct,
            },
            success: function() {
                $('#form_hooks_delete_sample_file').fadeOut();
                animateStatusBar("success", deleteSuccessMsg);
            }
        });
    }
});

function displayPriceTypeVal(id_type)
{
    if (id_type == 2) {
        $(".wk_sample_amount").show();
        $("#wk_sample_sign").show();
        $("#wk_sample_sign_label").show();
        $("#wk_sample_percent").hide();
        $("#wk_sample_percent_label").hide();
        $(".wk_sample_custom_price").hide();
        $(".wk_sample_price_tax").show();
    } else if (id_type == 3) {
        $(".wk_sample_amount").show();
        $("#wk_sample_sign").hide();
        $("#wk_sample_sign_label").hide();
        $("#wk_sample_percent").show();
        $("#wk_sample_percent_label").show();
        $(".wk_sample_custom_price").hide();
        $(".wk_sample_price_tax").hide();
    } else if (id_type == 4) {
        $(".wk_sample_custom_price").show();
        $(".wk_sample_amount").hide();
        $(".wk_sample_price_tax").show();
    } else if (id_type == 1) {
        $(".wk_sample_amount").hide();
        $(".wk_sample_custom_price").hide();
        $(".wk_sample_price_tax").hide();
    } else {
        $(".wk_sample_amount").hide();
        $(".wk_sample_custom_price").hide();
        $(".wk_sample_price_tax").hide();
    }
}
