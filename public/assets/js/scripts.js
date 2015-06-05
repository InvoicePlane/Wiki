/* ===========================================================================
 InvoicePlane  Wiki
 JavaScripts
 v1.0
 ========================================================================== */

/*
 * Make button groups vertical on small devices
 */
if (window.innerWidth < 768) {
    $('.btn-group').addClass('btn-group-vertical');
}

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
    var sidebar_height = $('#sidebar').height(),
        content_height = $('#content').height();
    if (sidebar_height < content_height) {
        $('#sidebar').height(content_height);
    }
});