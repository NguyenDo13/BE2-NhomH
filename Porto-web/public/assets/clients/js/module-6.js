$('.module-6 .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay:true,
    autoplayTimeout: 5000,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        500: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
})
owl.data('.module-6 .owlCarousel').reinit({
    touchDrag  : true,
    mouseDrag  : true
});
  
