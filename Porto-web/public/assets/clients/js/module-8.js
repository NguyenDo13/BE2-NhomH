$('.module-8 .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay:true,
    autoplayTimeout: 3000,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})
owl.data('.module-8 .owlCarousel').reinit({
    touchDrag  : true,
    mouseDrag  : true
});

