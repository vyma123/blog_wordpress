jQuery(document).ready(function($) {
    console.log("jQuery is ready!");
    $(".main-nav-link").on("click", function() {
        $(".main-nav-link").removeClass("active");

        $(this).addClass("active");
    });
});
