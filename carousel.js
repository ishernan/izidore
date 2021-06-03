
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

//etoiles


let evalIndex =-1;   //quand il y a pas evaluation

$(document).ready(function() {
  remplacerCouleur();   

  $('.bi-star-fill').on('click', function () { 
    evalIndex= parseInt($(this).attr('data-index')); 
   })
  $('.bi-star-fill').on('mouseover', function() { 
    remplacerCouleur();   
    valeurIndex= parseInt($(this).attr('data-index')); 

    for(let i=0; i<= valeurIndex; i++)    
    $('.bi-star-fill').eq(i).css('color', '#FFC107'); //$('.bi-star-fill:eq('+i+')').css('color', '#FFC107');

  });
  $('.bi-star-fill').on('mouseleave', function(){
    remplacerCouleur();
    if(evalIndex != -1){
      for(let i=0; i<= evalIndex; i++)    
      $('.bi-star-fill').eq(i).css('color', '#FFC107');
    }
  });

});

function remplacerCouleur(){
  $('.bi-star-fill').css('color', 'rgb(143, 140, 140)');
}
