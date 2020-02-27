//déclaration de mon pluging


(function($){

    $.fn.seachGoogle = function(){
        this.filter('a').each(function(index,element){
         
            $(element).html(function(){
                return $(this).html().replace("GOOGLE", "<a href='https://google.com' target='_blank'>Google</a>")
            })

        });

    return this;

    };   

}(jQuery));




$(document).ready(function(){

    function yesnoapi(choice){

        $.ajax({
            
            url:"https://yesno.wtf/api",
            type: "GET",
            data: {
                force:choice
            }
            })

            .done(function(response) {  

                $('#exo').attr({src:response.image, alt: response.answer});

            });
        
    }
    
    $('.btn-yes-no').click(function(event){
        var myChoice = $(this).data('choice');
        yesnoapi (myChoice);
    });


          $('#yes').click(function(){ yesnoapi('yes')}); 
          $('#no').click(function(){ yesnoapi('no')}); 



});


        $('#go').on('click', function(){   //lorsque je clique sur le bouton go, je lance la fonction suivante : 

            var enteredText = $('#inputTxt').val(); //on intensi une variable qui recupère la valeur dans la div inputTxt

        if (enteredText != '') { // si la variable est vide on fait ce qui suit : 

            $('.content').html(enteredText); // on met la valeur de la variable enteredText dans la div '.content'

            $('#inputTxt').val(''); // On netoie le inputTxt et lui mettant rien ''.
        } 

            
        });
