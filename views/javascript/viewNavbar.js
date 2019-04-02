/*
    Affiche le menu.
 */

function displayNavBar() {

    let header = $('<header >').appendTo('body').append('<br/>').append('<br/>').append('<br/>');
    let nav = $('<nav >', {class: 'navbar navbar-expand-md navbar-dark fixed-top orange'}).appendTo(header);

    let div = $('<div >', {class: 'collapse navbar-collapse', id: 'navbarCollapse'}).appendTo(nav);

    let ul = $('<ul >', {class: 'navbar-nav mr-auto'}).appendTo(div);

    let li1 = $('<li >', {class: 'nav-item active'}).appendTo(ul);
    $('<button >', {
        class: 'btn btn-sm nav-link',
        type:'button',
        id:'Home',
        onclick:'echoHome()', // Affiche la page d'accueil
        text: 'Lebonrecoin'
    }).appendTo(li1);

    let li2 = $('<li >', {class: 'nav-item active'}).appendTo(ul);
    $('<button >', {
        class: 'btn btn-sm nav-link',
        type:'button',
        id:'createOffer',
        onclick:'createOffer()', // Affiche le formulaire qui permet de créer une offre/demande
        text: 'Déposer une demande ou une offre'
    }).appendTo(li2);

    let li3 = $('<li >', {class: 'nav-item active'}).appendTo(ul);
    $('<button >', {
        class: 'btn btn-sm nav-link',
        type:'button',
        id:'echoOffers',
        onclick:'echoOffers()', // Affiche toutes les offres/demandes créées par les utilisateurs
        text: 'Voir les demandes et les offres'
    }).appendTo(li3);

    let li4 = $('<li >', {class: 'nav-item active'}).appendTo(ul);
    $('<button >', {
        class: 'btn btn-sm nav-link',
        type:'button',
        id:'myAccount',
        onclick:'myAccount()', // Affiche les offres/demandes crées par l'utilisateur
        text: 'Mon compte'
    }).appendTo(li4);

    let li5 = $('<li >', {
        class:'nav-item active'
    }).appendTo(ul);
    $('<a >', {
        class:'nav-link',
        href:'/views/javascript/function/disconected.php', // Permet de se déconnecter
        text: 'Déconnexion'
    }).appendTo(li5);

}