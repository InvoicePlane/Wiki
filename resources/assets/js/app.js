$(document).ready(function(){
    $(".sidebar-toggle").click(function(e){
        e.preventDefault();
        $("#sidebar").toggleClass("show-sidebar");
    });
});