//notation etoiles

var evalIndex =-1;  //quand il y a pas d'evaluation
var userID =0; 

$(document).ready(function() {
  couleurDefault();  
  
  if(localStorage.getItem('evalIndex') !=null){
    setEtoile(parseInt(localStorage.getItem('evalIndex'))); 
  }

  $('.bi-star-fill').on('click', function () { 
    evalIndex= parseInt($(this).attr('data-index')); 
    localStorage.setItem('evalIndex', evalIndex); 
    $('#note').text(evalIndex+1); 
    garderDb();
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

function setEtoile(note) {
  for(let i=0; i<= note; i++)    
  $('.bi-star-fill').eq(i).css('color', '#FFC107'); //$('.bi-star-fill:eq('+i+')').css('color', '#FFC107');
}

function couleurDefault(){
  $('.bi-star-fill').css('color','#A9A9A9' ); //'#58B58D'
}

function garderDb() {
  $.ajax({
    url     : "evaluation.html", 
    method  : "POST",
    dataType: 'json',
    data    : {
      save     : 1,
      userID   : userID,
      evalIndex: etoilesNotation
    }, success : function (response) {
      userID = response.uid; 
    }
  });
}


//formulaire 

const formulaire  = document.querySelector('#formulaire');
const btnEnvoyer  = document.querySelector('#btnEnvoyer');
const btnLoad     = document.querySelector('#btnLoad');
const toast       = document.querySelector('.toast');


formulaire.addEventListener('submit', (e)=> {
  e.preventDefault();

  const data = new FormData(formulaire);

  console.log('User :', data.get('user'))
  console.log('Mot de passe :', data.get('passe'))
  console.log('Commentaire :', data.get('commentaire'))
  console.log('Titre :', data.get('titre'))

  console.log(evalIndex+1)


  btnEnvoyer.classList.add("d-none")
  btnLoad.classList.remove('d-none')

  setTimeout(()=> {
   btnEnvoyer.classList.remove("d-none")
   btnLoad.classList.add('d-none')

   const toastEvent = new bootstrap.Toast(toast)
   toastEvent.show()

  }, 2000); 

  formulaire.reset();//pour remettre a zero le formulaire  
  
  })
  
