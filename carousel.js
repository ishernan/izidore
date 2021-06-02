
// $(document).ready(function () {
//   $(".owl-carousel").owlCarousel(); 
//   });

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



$(document).ready(function() {
  couleurEtoiles();
   
  $('.bi-star-fill').mouseover(function () {  
    counter= parseInt($(this).data('index')); 

    for(let i=0; i<= counter; i++)
    $('.bi-star-fill:eq('+i+')').css('color', '#FFC107');

  });
  $('.bi-star-fill').mouseleave(function(){
    couleurEtoiles();
  });

});

function couleurEtoiles(){
  $('.bi-star-fill').css('color', 'rgb(143, 140, 140)');
}