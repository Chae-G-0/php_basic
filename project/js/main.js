$(function () {
    $(".mainSlide").slick({
        arrows: false,
        dots: true,
        autoplay: true,
        pauseOnHover: false,
        pauseOnFocus: false,
    });

    $(".productSlider").slick({
        arrows: false,
        // dots: true,
        autoplay: true,
        pauseOnHover: false,
        pauseOnFocus: false,
    });

    $(".productArrows i:nth-child(1)").on("click", function () {
        $(".productArrows").slick("slickPrev");
    });

    $(".productArrows i:nth-child(2)").on("click", function () {
        $(".productArrows").slick("slickNext");
    });
});
