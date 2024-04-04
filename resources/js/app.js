import "./bootstrap";
import "video.js";

$(document).ready(function () {
    $(".slick").slick({
        slidesToShow: 1,
    });
});

document.addEventListener("DOMContentLoaded", function () {
    window.HELP_IMPROVE_VIDEOJS = false;
    if (typeof videojs !== "undefined") {
        var player = videojs("my-video", {
            controls: true,
            autoplay: false,
            preload: "auto",
            fluid: true,
            muted: true,
            responsive: true,
        });
    }
});
