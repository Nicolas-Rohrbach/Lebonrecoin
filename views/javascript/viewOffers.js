/*
    Affiche les offres et demandes créées par les utilisateurs,
    ils peuvent les voirs en détail en appuyant sur voir.
 */

function echoOffers() {

    clear(); // vide le body est affiche la navbar

    $('<h1 >', {text:'Demandes & Offres', class:'text-center'}).appendTo('body');

    $.ajax({
        url: 'views/javascript/function/viewOffers.php' // Appel viewOffers.php
    }).done(function(data) { // viewOffers.php renvoie toutes les cards et les places dans divC
        let divC = $('<div >', {class:'container'}).appendTo('body');
        //let divR = $('<div >', {class:'row'}).appendTo(divC);
        $(data).appendTo(divC);
        $(divC).hide(); // Cache la div puis la fait apparaître avec les cards progressivement
        $(divC).fadeIn(1000);
    });

}