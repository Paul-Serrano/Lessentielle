/**
 * 2017 IQIT-COMMERCE.COM
 *
 * NOTICE OF LICENSE
 *
 * This file is licenced under the Software License Agreement.
 * With the purchase or the installation of the software in your application
 * you accept the licence agreement
 *
 *  @author    IQIT-COMMERCE.COM <support@iqit-commerce.com>
 *  @copyright 2017 IQIT-COMMERCE.COM
 *  @license   Commercial license (You can not resell or redistribute this software)
 *
 */

$(document).ready(function(){

	$iqitFreeDelivery = $('.iqitfreedeliverycount-detach').first();
	$('#header .cart-prices').append($iqitFreeDelivery.clone());

	$(document).on('show.bs.modal', '#blockcart-modal', function(e){
	$('#blockcart-modal .cart-content').last().append($iqitFreeDelivery);
	$iqitFreeDelivery.removeClass('hidden-detach');
	});

	prestashop.on('updateCart', function (event) {
			$.ajax({
			type: 'POST',
			headers: { "cache-control": "no-cache" },
			url: prestashop.urls.base_url + 'modules/iqitfreedeliverycount/iqitfreedeliverycount-ajax.php' + '?rand=' + new Date().getTime(),
			async: true,
			cache: false,
			data: 'recalculate=' + iqitfdc_from,
			success: function(jsonData)
			{
				if (jsonData == 0)
				$('.iqitfreedeliverycount').addClass('iqitfreedeliverycount-hidden');
				else{
					$('.iqitfreedeliverycount').removeClass('iqitfreedeliverycount-hidden');
					$('.ifdc-remaining-price').text(jsonData);
				}

			}
		});
	});
});
