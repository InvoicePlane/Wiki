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

/*
 * Get a JS Cookie
 */
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}

$(window).load(function(){
    $('[data-toggle="tooltip"]').tooltip();

    var sidebar_height = $('#sidebar').height(),
        content_height = $('#content').height();
    if (sidebar_height < content_height) {
        $('#sidebar').height(content_height);
    }

    /*
    var currentTime = new Date(),
        cookie_expire = new Date(currentTime.getTime() + (6 * 60 * 60 * 1000));
    if (currentTime.getHours() > 0 && currentTime.getHours() < 12) {
        var ip_wiki_nightmode=getCookie("ip_wiki_nightmode");
        if (ip_wiki_nightmode === "") {
            $('#nightmode').delay(500).show();
            setTimeout( function() {
                $('#nightmode').removeClass('ns-show').addClass('ns-hide').delay(300).hide();
            }, 6000 );
            $('#nightmode-on').click(function(cookie_expire){
                document.cookie="ip_wiki_nightmode=on; expires="+cookie_expire+"; path=/";
                $('#nightmode').removeClass('ns-show').addClass('ns-hide').delay(300).hide();
                $('body').addClass('nightmode');
            });
            $('#nightmode-off').click(function(cookie_expire){
                document.cookie="ip_wiki_nightmode=off; expires="+cookie_expire+"; path=/";
                $('#nightmode').removeClass('ns-show').addClass('ns-hide').delay(300).hide();
                $('body').addClass('nightmode');
            });
        } else {
            $('body').addClass('nightmode');
        }
    }
    */
});