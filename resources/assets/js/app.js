$(document).ready(function(){
    $(".sidebar-toggle").click(function(e){
        e.preventDefault();
        $("body").toggleClass("sidebar-visible");
    });

    lightbox.option({
        'fadeDuration': 150,
        'resizeDuration': 150,
        'wrapAround': true
    })
});