$(document).ready(function(){
    $(".sidebar-toggle").click(function(e){
        e.preventDefault();
        $("body").toggleClass("sidebar-visible");
    });

    lightbox.option({
        'fadeDuration': 200,
        'resizeDuration': 200,
        'wrapAround': true
    })
});