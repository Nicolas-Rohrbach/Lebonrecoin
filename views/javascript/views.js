function clear() {

    $('body').empty();
    displayNavBar();

}

function displayNavBar() {

    let header = $('<header >').appendTo('body').append('<br/>').append('<br/>').append('<br/>');
    let nav = $('<nav >', {class: 'navbar navbar-expand-md navbar-dark fixed-top orange'}).appendTo(header);

    let div = $('<div >', {class: 'collapse navbar-collapse', id: 'navbarCollapse'}).appendTo(nav);

    let ul = $('<ul >', {class: 'navbar-nav mr-auto'}).appendTo(div);

    let li1 = $('<li >', {class: 'nav-item active'}).appendTo(ul);
    $('<a >', { class: 'nav-link', href: '/Home', text:'Lebonrecoin'}).append($('<img >', {
        src: 'views/images/favicon.png',
        width: 30,
        height: 30,
        alt: ''
    })).appendTo(li1);

    let li2 = $('<li >', {class: 'nav-item active'}).appendTo(ul);
    $('<button >', {
        class: 'btn btn-sm btn-outline-secondary',
        type:'button',
        id:'createOffer',
        onclick:'createOffer()',
        text: 'Déposer une offre'
    }).appendTo(li2);

    let li3 = $('<li >', {class: 'nav-item active'}).appendTo(ul);
    $('<button >', {
        class: 'btn btn-sm btn-outline-secondary',
        type:'button',
        id:'viewOffers',
        onclick:'viewOffers()',
        text: 'Voir les offres'
    }).appendTo(li3);

    let li4 = $('<li >', {
        class:'nav-item active'
    }).appendTo(ul);
    $('<a >', {
        class:'nav-link',
        href:'/views/javascript/function/disconected.php',
        text: 'Déconnexion'
    }).appendTo(li4);

}

$(document).ready(function(){
    console.log("debut");
    displayNavBar();
    $.ajax({
        url: 'views/javascript/function/is_connected.php',
        success:(function(data) {
            if(data === false) {
                formConnexion();
                console.log("Non connecté")
            }
            else {
                console.log("Connecté")
            }
        })
    });
});