$(document).ready(function(){



        // Declaration des variables 

        var bois = 10000;
        var diamant = 10000;
        var eau = 1000000;

    


        /*On passe une référence à l'objet event en argument pour pouvoir 
        utiliser ses propriétés*/
        $("body").mousemove(function(event){
            //On récupère la position de la souris dans le document
            let pageCoords = "(" + event.pageX + ", " + event.pageY + ")";

            //Affiche cette position dans un span
            $("span").text(pageCoords);
        });
    // on fait bouger le personnage en fonction de la souris en ligne droite
        $( "body" ).click(function() {
            $("#dragon")
            .animate({ "left": (event.pageX - 50), "top": (event.pageY + 10)}, 'slow')
        });


        $('.ressource').click(function(event){
            var ressource = $(this).data('matiere');
            
            if (ressource === 'bois'){
                bois++;
                document.getElementById("bois").innerHTML = " " + bois;
                
            } else if (ressource === 'diamant') {
                diamant++;
                document.getElementById("diamant").innerHTML = "  " + diamant;

            } else if (ressource === 'eau') {
                eau++;
                document.getElementById("eau").innerHTML = " " + eau + "pts";

            } else if (ressource === 'piege' ){
                eau = eau -10;
                document.getElementById("eau").innerHTML = " " + eau + "pts";
            }
            if ((eau || (bois && diamant))<=0) {
                document.getElementById("instruction").innerHTML = "Vous avez perdus, <a href=''>ReJouer</a>";
            }
            return(bois,diamant,eau);
            
        })

        $('#construire').click(function(event){
            
            if ((bois>=8) && (diamant>=3)){
                $('#construire').addClass('build') ;
                bois = bois-10;
                diamant = diamant-2;

                return(diamant,bois);

            }
            
        });

        $('#construire2').click(function(event){
            
            if ((bois>=1000) && (diamant>=200)) {
                $(this).addClass('build2') ;
                bois = bois-1000;
                diamant = diamant-200;

                return(diamant,bois);

            }
        });




        $('#exampleModalCenter').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
          })


    

//Fonction du jeu


$(".ressource").mouseenter(function(event){

var ressource2 = $(this).data('matiere');
var positionMouse = { "left":(document.pageX - 50), "top": (document.pageY +10)};
switch (ressource2) {

    case 'bois' :

        $(this).append("<div id='hache'></div>");
        $("#hache").css(positionMouse).addClass('rebond');
        console.log(ressource2, positionMouse, hache);
        break;

    case 'diamant' :
        $(this).append("<div id='pelle'></div>");
        $("#pelle").css(positionMouse).addClass('rebond');
        console.log(ressource2);
        break;

    case 'eau' :
        $(this).append("<div id='fiole'></div>");
        $("#fiole").css(positionMouse).addClass('rebond');
        console.log(ressource2);
        break;

    case 'piege' :
        $(this).addClass('interogation');
        console.log(ressource2);
        break;

    default:
        break;
}

});

$(".ressource").mouseleave(function(event){
    $(this).removeClass('.rebond');//.css('opacity',0);
    $("#hache, #pelle, #fiole").remove();

});




            
});



// corbeille à code >>


        // function randRsc(nbrMax,nbrMin) {
                
        //     var number =  Math.floor(Math.random() * (nbrMax + 1) + nbrMin);
        // };


        // 