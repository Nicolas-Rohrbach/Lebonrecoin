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
        onclick:'echoHome()',
        text: 'Lebonrecoin'
    }).appendTo(li1);

    let li2 = $('<li >', {class: 'nav-item active'}).appendTo(ul);
    $('<button >', {
        class: 'btn btn-sm nav-link',
        type:'button',
        id:'createOffer',
        onclick:'createOffer()',
        text: 'Déposer une offre'
    }).appendTo(li2);

    let li3 = $('<li >', {class: 'nav-item active'}).appendTo(ul);
    $('<button >', {
        class: 'btn btn-sm nav-link',
        type:'button',
        id:'echoOffers',
        onclick:'echoOffers()',
        text: 'Voir les offres'
    }).appendTo(li3);

    let li4 = $('<li >', {class: 'nav-item active'}).appendTo(ul);
    $('<button >', {
        class: 'btn btn-sm nav-link',
        type:'button',
        id:'myAccount',
        onclick:'myAccount()',
        text: 'Mon compte'
    }).appendTo(li4);

    let li5 = $('<li >', {
        class:'nav-item active'
    }).appendTo(ul);
    $('<a >', {
        class:'nav-link',
        href:'/views/javascript/function/disconected.php',
        text: 'Déconnexion'
    }).appendTo(li5);

}