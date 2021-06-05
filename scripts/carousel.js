
//carousel

$(".owl-carousel").owlCarousel({
  autoplay: false, 
  autoplayhoverpause: true,
  autoplaytimeout: 100,
  items: 4,
  nav: true, 
  loop:true,
  responsive:{
    0: {
      items: 1,
      dots: false
    },
    485: {
      items : 2,
      dots : false
    },
    728: {
      items: 3,
      dots: false
    }, 
    960: {
      items : 4,
      dots : false
    },
    1200 : {
      items : 5,
      dots: true
    }
  }
}); 


