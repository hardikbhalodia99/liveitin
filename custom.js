// $('.owl-carousel').owlCarousel({
//     items:5,
//     loop:true,
//     margin:24,
//     merge:true,
//     responsive:{
//         678:{
//             mergeFit:true
//         },
//         1000:{
//             mergeFit:false
//         }
//     }
// });
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:32,
    nav:true,
    merge:true,
    responsive:{
        0:{
            items:1,
            mergeFit:true
        },
        600:{
            items:3,
            mergeFit:true
        },
        1000:{
            items:5,
            mergeFit:false
        }
    }
})