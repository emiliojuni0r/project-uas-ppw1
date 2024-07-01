$(document).ready(function() {
    // Initialize product slider
    $('#card-slider').lightSlider({
        item: 3,
        loop: false,
        slideMove: 1,
        easing: 'linear',
        speed: 600,
        responsive : [
            {
                breakpoint:800,
                settings: {
                    item:2,
                    slideMove:1,
                    slideMargin:6,
                }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                }
            }
        ]
    });
    // Initialize best sellers slider
    $('#best-sellers-slider').lightSlider({
        item: 3,
        loop: false,
        slideMove: 1,
        easing: 'linear',
        speed: 600,
        responsive : [
            {
                breakpoint:800,
                settings: {
                    item:2,
                    slideMove:1,
                    slideMargin:6,
                }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                }
            }
        ]
    });
});
