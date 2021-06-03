//etoiles

var evalIndex =-1;   //quand il y a pas evaluation

$(document).ready(function() {
  couleurDefault();  
  
  if(localStorage.getItem('evalIndex') !=null){
    setEtoile(parseInt(localStorage.getItem('evalIndex'))); 

  }

  $('.bi-star-fill').on('click', function () { 
    evalIndex= parseInt($(this).attr('data-index')); 
    localStorage.setItem('evalIndex', evalIndex); 
   });
   
  $('.bi-star-fill').on('mouseover', function() { 
    $('#cardRating').removeClass('d-none'); 
    couleurDefault();   
    valeurIndex= parseInt($(this).attr('data-index')); 
    setEtoile(valeurIndex)
    
  });
  $('.bi-star-fill').on('mouseleave', function(){
    $('#cardRating').addClass('d-none'); 
    couleurDefault();
    if(evalIndex != -1){
      setEtoile(evalIndex)
    }
  });
  
});

function setEtoile(max) {
  for(let i=0; i<= max; i++)    
  $('.bi-star-fill').eq(i).css('color', '#FFC107'); //$('.bi-star-fill:eq('+i+')').css('color', '#FFC107');
}

function couleurDefault(){
  $('.bi-star-fill').css('color', 'rgb(143, 140, 140)');
}



  // do something...
