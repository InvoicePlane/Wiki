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
});