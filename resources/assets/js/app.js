$(document).ready(function(){
    $(".sidebar-toggle").click(function(e){
        e.preventDefault();
        $("body").toggleClass("sidebar-visible");
    });
});