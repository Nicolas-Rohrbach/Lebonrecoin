/*
    Affiche les offres et demandes créées par l'utilisateur,
    il peut les supprimer ou les voir.
 */

function myAccount() {

    clear(); // vide le body est affiche la navbar

    $('<h1 >', {text:'Mes offres/Demandes', class:'text-center'}).appendTo('body');

    $.ajax({
        url: 'views/javascript/function/viewAccount.php', // Appel viewAccount.php
    }).done(function(data) { // viewAccount.php renvoie toutes les cards et les places dans divC
        let divC = $('<div >', {class:'container'}).appendTo('body');
        $(data).appendTo(divC);
        $(divC).hide(); // Cache la div puis la fait apparaître avec les cards progressivement
        $(divC).fadeIn(1000);
    });
}

/*
    Lorsque le bouton "Supprimer" est cliqué, supprime l'offre/demande cliquée
 */
function supprOffer(id) {
    $.ajax({
        url: 'views/javascript/function/deleteOffer.php', // Appel deleteOffer.php
        type:'POST',
        data: {
            myParams: id,
        },
        success: function(data)
        {
            if(data > 0) {
                myAccount(); // Lorsque l'offre/demande est supprimé refresh la page
            }
        }
    });
}