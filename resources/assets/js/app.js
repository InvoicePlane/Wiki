$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    
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