/*
    Affiche l'offre/demande choisi par l'utilisateur,
    il peut voir les détail de l'offre/demande.
 */

function echoOffer(id) {

    clear(); // vide le body est affiche la navbar

    $.ajax({
        url: 'views/javascript/function/viewOffer.php', // Appel viewOffer.php
        type:'POST',
        data: {
            myParams: id, // envoie l'id récupérer lorsqu'on clique sur le bouton "voir" de l'offre à viewOffer.php
        },
    }).done(function(data) {
        let div = $('<div >').appendTo('body').append(data); // envoie toutes les infos de l'offre/demande choisi
        $(div).hide(); // Cache la div puis la fait apparaître avec les cards progressivement
        $(div).fadeIn(1000);
    });

}