$('.find__slider').slick( {
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    nextArrow:`<button type='button' class='slick-next pull-right'><i class="fas fa-chevron-right"></i></button>`,

    responsive: [ {
        breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
            }
    }]
});