/**
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
 */

var pmAcbConsentLevels = {
    'all': 3,
    'marketing': 2,
    'analytics': 1,
    'mandatory': 0,
};

function acb_createCookie(consentLevel) {
    // Abort if we are in simulation mode
    if (acbConfigMode == 1) {
        return location.reload();
    }

    return $.ajax({
        type: 'POST',
        url: acbControllerURL,
        data: {
            ajax: true,
            consentLevel: (typeof (consentLevel) !== 'undefined' ? consentLevel : 0),
            token: (typeof(prestashop) == 'undefined' ? static_token : prestashop.static_token),
        },
    }).done(function() {
        location.reload(true);
    });
}

$(document).ready(function() {
    if (typeof (acbGdprMode) != 'undefined' && acbGdprMode && !acbIsLegalCmsPage) {
        // Allow click on label to check a consent checkbox
        $(document).on('click', '.acbCheckboxContainer label', function() {
            if ($(this).prev('input').prop('disabled') !== true) {
                $(this).prev('input').prop('checked', !$(this).prev('input').prop('checked'));
                // Uniform related
                if ($(this).parent().find('div.checker').length > 0 && $(this).parent().find('div.checker input').attr('name') != 'acbConsentMandatory') {
                    if ($(this).parent().find('div.checker span').hasClass('checked')) {
                        $(this).parent().find('div.checker span').removeClass('checked');
                        $(this).parent().find('div.checker input').prop('checked', false);
                    } else {
                        $(this).parent().find('div.checker span').addClass('checked');
                        $(this).parent().find('div.checker input').prop('checked', true);
                    }
                }
            }
        });
    }
    if (typeof (acbControllerURL) != 'undefined') {
        // If we are in GDPR mode, we have to handle the accept and deny all buttons
        if (typeof (acbGdprMode) != 'undefined' && acbGdprMode) {
            $(document).on('click', '#acb-deny-all-button', function () {
                $("#acb-banner").addClass("hide");
                var consentLevel = pmAcbConsentLevels['mandatory'];
                acb_createCookie(consentLevel);
            });
            $(document).on('click', '#acb-accept-all-button', function () {
                $("#acb-banner").addClass("hide");
                var consentLevel = pmAcbConsentLevels['all'];
                acb_createCookie(consentLevel);
            });
        }
        $(document).on('click', '#acb-close-button', function() {
            $("#acb-banner").addClass("hide");
            if (typeof (acbGdprMode) != 'undefined' && acbGdprMode) {
                var consentLevel = getConsentLevelValue();
                acb_createCookie(consentLevel);
            } else {
                acb_createCookie();
            }
        });
    }
});

function getConsentLevelValue() {
    var acbConsentAnalytics = $('input[name="acbConsentAnalytics"]').prop('checked');
    var acbConsentMarketing = $('input[name="acbConsentMarketing"]').prop('checked');

    // Both analytics and marketing
    if (acbConsentMarketing === true && acbConsentAnalytics === true) {
        return pmAcbConsentLevels['all'];
    // Only marketing
    } else if (acbConsentMarketing === true) {
        return pmAcbConsentLevels['marketing'];
    // Only analytics
    } else if (acbConsentAnalytics === true) {
        return pmAcbConsentLevels['analytics'];
    // Only the "no consent required" modules
    } else {
        return pmAcbConsentLevels['mandatory'];
    }
}
