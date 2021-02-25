$('.owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout: 6000,
    autoplayHoverPause:true,
    margin: 10,
    responsiveClass:true,
    responsive:{
        0 : {
            items:1,
            // nav:true
        },
        590 : {
            items:2,
            // nav:false
        },
        860 : {
            items:3,
            // nav:false
        },
        // 1180 : {
        //     items: 3,
        //     // nav:true,
        // }
    }
})