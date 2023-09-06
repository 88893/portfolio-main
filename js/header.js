$(document).ready(function () {
    $("a").on("click", function (event) {
        event.preventDefault();
        var href = $(this).attr("href");
        $("body").fadeOut(300, function () {
            window.location.href = href;
        });
    });
});

window.addEventListener("load", function() {
    var loader = document.querySelector(".loader-wrapper");
    loader.style.display = "none"; 
});
