//notation etoiles

var evalIndex = -1;  //quand il y a pas d'evaluation
var eval = 0;


$(document).ready(function () {

    couleurDefault();
    $('#btnEnvoyer').submit(function () {
        console.log('el submit');
        return;
      
    });

    
    $('.bi-star-fill').on('click', function () {
        evalIndex = parseInt($(this).attr('data-index'));
        $('.note').text(evalIndex + 1);
        $('#note').attr("value", evalIndex + 1);
        eval = evalIndex + 1;
       
    });

    $('.bi-star-fill').on('mouseover', function () {
        $('#cardRating').removeClass('d-none');
        
        couleurDefault();
        valeurIndex = parseInt($(this).attr('data-index'));
        setEtoile(valeurIndex)

    });
    $('.bi-star-fill').on('mouseleave', function () {
        $('#cardRating').addClass('d-none');
        couleurDefault();
        if (evalIndex != -1) {
            setEtoile(evalIndex)
        }

    });
    
    //eval = $('#ponderation').text()
    
      
          
});

// function setNoteLocal() {
//     evalIndex = parseInt($(this).attr('data-index'));
//     eval = evalIndex + 1;
// }

function setEtoile(note) {
    for (let i = 0; i <= note; i++)
        $('.bi-star-fill').eq(i).css('color', '#FFC107'); 
}

function couleurDefault() {
    $('.bi-star-fill').css('color', '#A9A9A9'); //'#58B58D'
}

