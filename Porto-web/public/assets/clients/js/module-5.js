$('.module-5 .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoplay:true,
    autoplayTimeout: 9000,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})
owl.data('.module-5 .owlCarousel').reinit({
    touchDrag  : true,
    mouseDrag  : true
});

