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

$(document).ready(function() {
    initDrag();
    $('div#addons-rating-container p.dismiss a').click(function() {
        $('div#addons-rating-container').hide(500);
        $.ajax({type : "POST", url: window.location, data: {dismissRating: 1} });
        return false;
    });
    $(document).on('click', 'a[href="#css"]', function () {
        setEditorCSS();
    });

    // If GDPR Mode is enabled at loading, hide button related options
    if ($('#PM_ACB_GDPR_MODE_on').is(':checked')) {
        $('.acb-custom-checkboxes').addClass('hide');
        $('.moduleColumnsOptionContainer').css('display', 'flex');
        $('#PM_ACB_RESET_CONSENT_LINK').parent().parent().removeClass('hide');
    } else {
        $('.acb-gdpr-settings').addClass('hide');
        $('.moduleListContainer').css('display', 'flex');
        $('#PM_ACB_RESET_CONSENT_LINK').parent().parent().addClass('hide');
    }


    // Display or hide options on module categorization option change
    $(document).on('change', 'input[name="PM_ACB_GDPR_MODE"]', function() {
        if ($(this).val() == 1) {
            $('.acb-custom-checkboxes').addClass('hide');
            $('.acb-gdpr-settings').removeClass('hide');
            $('.moduleColumnsOptionContainer').css('display', 'flex');
            $('#PM_ACB_RESET_CONSENT_LINK').parent().parent().removeClass('hide');
        } else {
            $('.acb-custom-checkboxes').removeClass('hide');
            $('.acb-gdpr-settings').addClass('hide');
            $('.moduleListContainer').css('display', 'flex');
            $('#PM_ACB_RESET_CONSENT_LINK').parent().parent().addClass('hide');
        }
    });

    $('.acbRemoveOffset > div.col-lg-offset-3').removeClass('col-lg-offset-3');
});

function setEditorCSS() {
    if (typeof (editor_css) == 'undefined') {
        editor_css = CodeMirror.fromTextArea(document.getElementById("advancedStyles"), {
            mode: "css",
            lineNumbers: true,
            autofocus: true
        });
    }
}

function initDrag() {
    $('#acbReceiverAnalytics, #acbReceiverMarketing, #availableModulesList').sortable({
        revert: "invalid",
        connectWith: ".connectedSortable",
        items: ".acbModuleBlacklist:not(.notDraggable)",
        revert: 10,
        receive: function(event, element) {
            addModuleToList(event.target, element.item);
        },
        remove: function(event, element) {
            removeModuleFromList(event.target, element.item);
        },
        start: function (event, ui) {
            // Highlight possible receivers
            highlightPossibleReceivers(ui);

            // Change classes on the dragged element if it comes from a specific container
            handleAvailableModuleListClasses(ui);
        },
        change: function(event, ui) {
            // Remove cols from the dragged objects to prevent 100% width in right column's rows
            removeClassesFromDraggable();
        },
        stop: function(event, ui) {
            // Change classes on the dragged element if it comes from a specific container
            handleAvailableModuleListClasses(ui);

            checkPlaceholders();
            // Restore all white backgrounds on lists
            $('.connectedSortable').css({ background: '#fff' });
        }
    });

    $(document).on('click', '.acbModuleBlacklist .acbRemoveModuleIconContainer', function() {
        var clickedModule = $(this).parent();
        $(clickedModule).addClass('ui-state-disabled');

        var parentContainer = $(clickedModule).parent();

        // Clone the card back to the available module list
        var clonedModule = $(clickedModule).clone(true).appendTo('#availableModulesList');

        // Sort the available module list elements
        var newModuleList = sortAvailableModulesList();
        // Replace the list with the sorted one, so that we always display the list alphabetically
        $("#availableModulesList").html(newModuleList);

        $(clickedModule).css({
            left: $(clickedModule).position().left,
            top: $(clickedModule).position().top,
        });

        // Re-add col classes
        handleAvailableModuleListClasses({ item: clonedModule });

        // Calculate the new coordinates for the module card to animate
        var newTopValue = $(clonedModule).offset().top - $(parentContainer).height();
        var newLeftValue = $("#availableModulesList").offset().left;

        // Animate the column change
        $(clickedModule).css({ position: 'absolute' }).animate({ left: newLeftValue, top: newTopValue }, 500, function() {
            $(clonedModule).show();
            $(clickedModule).hide();
            $(clonedModule).removeClass('ui-state-disabled');
        });

        // Handle inputs values changes
        var receiverList = $("#availableModulesList");
        var draggedElement = $(clonedModule);

        // In case we are putting a module back to the available list, the module itself won't actually be added
        // to a list but will only be removed from its current list
        addModuleToList(receiverList, draggedElement);
        removeModuleFromList(parentContainer, draggedElement);
        // Check if we have to display back the list placeholder in case it's empty now
        checkPlaceholders();
    });
}

function addModuleToList(event, element) {
    var moduleName = $(element).data('module-name');
    var receiverId = $(event).data('id-input');
    var inputName = 'input[name="' + receiverId + '"]';

    // Check if the input exists before proceeding
    if ($(inputName).length > 0) {
        var previousValue = $(inputName).val();
        $(inputName).val(previousValue + "," + moduleName);
    }
}

function checkPlaceholders() {
    var analyticsInputName = $('#acbReceiverAnalytics').data('id-input');
    var marketingInputName = $('#acbReceiverMarketing').data('id-input');

    if ($('input[name="' + analyticsInputName + '"]').val().length <= 0) {
        // Hide class might be there in case the list was empty during page load
        $('#acbReceiverAnalytics .acbPlaceholder').removeClass('hide').show();
    } else {
        $('#acbReceiverAnalytics .acbPlaceholder').hide();
    }
    if ($('input[name="' + marketingInputName + '"]').val().length <= 0) {
        // Hide class might be there in case the list was empty during page load
        $('#acbReceiverMarketing .acbPlaceholder').removeClass('hide').show();
    } else {
        $('#acbReceiverMarketing .acbPlaceholder').hide();
    }
}

function removeModuleFromList(event, element) {
    var moduleName = $(element).data('module-name');
    var removedContainerId = $(event).data('id-input');
    var inputName = 'input[name="' + removedContainerId + '"]';

    // Check if the input exists before proceeding
    if ($(inputName).length > 0) {
        var previousValue = $(inputName).val();
        $(inputName).val(previousValue.replace(moduleName, ''));

        // If the input values start with one or several comma(s) after we have removed the module, we have to remove it/them too
        while ($(inputName).val().indexOf(',') === 0) {
            $(inputName).val($(inputName).val().substr(1));
        }
    }
}

function sortAvailableModulesList() {
    var sortedList = $('#availableModulesList .acbModuleBlacklist').sort(function(a, b) {
        if ($(a).find(".acbModuleDisplayName").text() < $(b).find(".acbModuleDisplayName").text()) {
            return -1
        } else if ($(a).find(".acbModuleDisplayName").text() > $(b).find(".acbModuleDisplayName").text()) {
            return 1;
        }
        return 0
    });

    return sortedList;
}

/**
 * Remove cols classes from dragged objects to prevent 100% width when changing column
 */
function removeClassesFromDraggable() {
    $('.acbModuleBlacklist.ui-sortable-helper,.acbModuleBlacklist.ui-sortable-placeholder').removeClass('col-lg-12 col-md-12 col-sm-12 col-xs-12');
}

/**
 * Hightlights the possible receivers of a dragged element with a background color
 */
function highlightPossibleReceivers(element) {
    var parentId = $(element.item).parent().attr('id');
    $('.connectedSortable:not(#' + parentId + ')').css({ background: '#c3eacd59' });
}

/**
 * Adds the corresponding col classes and the delete icon based on which columns the element currently is in
 */
function handleAvailableModuleListClasses(element) {
    if ($(element.item).parent().attr('id') == 'availableModulesList') {
        $(element.item).addClass('col-lg-12 col-md-12 col-sm-12 col-xs-12');
        $(element.item).find('div.acbRemoveModuleIconContainer').remove();
    } else {
        $(element.item).removeClass('col-lg-12 col-md-12 col-sm-12 col-xs-12');
        if ($(element.item).find('span.ui-icon-trash').length === 0) {
            $(element.item).append('<div class="acbRemoveModuleIconContainer"><span class="ui-icon ui-icon-trash"></span></div>');
        }
    }
}
