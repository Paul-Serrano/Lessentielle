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

$(document).ready(function () {
    setEditorCSS15();
    removeEmptyLabel();
});

function removeEmptyLabel() {
    $('fieldset#fieldset_0 .margin-form #acbLeftColumn').parent().find('label').remove();
}

/**
 * Use a different function as we don't want the autofocus on PS1.5 (would make the page scroll to bottom every time)
 */
function setEditorCSS15() {
    if (typeof (editor_css) == 'undefined') {
        editor_css = CodeMirror.fromTextArea(document.getElementById("advancedStyles"), {
            mode: "css",
            lineNumbers: true,
            autofocus: false
        });
    }
}
