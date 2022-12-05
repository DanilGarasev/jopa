$(document).ready(() => {
    const bottomSliderDots = $(".slider_content_paganation_button");
    const slides = $(".slider_content_slide");
    let count = 0;

    bottomSliderDots.hide();
    $(slides).hide();
    $(slides[0]).addClass("toggled").show();

    for (let i = 0; i < slides.length; i++) {
        $(bottomSliderDots[i]).show();
    }

    function resetBottomDots() {
        for (let i = 0; i < bottomSliderDots.length; i++) {
            $(bottomSliderDots[i]).removeClass(
                "reviews_slider_paganation_button_active"
            );
        }
    }

    for (let i = 0; i < slides.length; i++) {
        $(bottomSliderDots[i]).attr("index", [i]);
    }

    bottomSliderDots.click((evt) => {
        slides.hide();
        let index = $(evt.target).attr("index");
        resetBottomDots();
        $(slides[index]).fadeIn();
    });

});