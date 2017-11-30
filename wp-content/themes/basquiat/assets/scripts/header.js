$(document).ready(function() {
    // Click sul bottone
    $(".menu-icon").on("click", function() {
        console.log('ok');
        $("#header").toggleClass("header--open");
    });
});

