function echoHome() {

    clear();

    titre = $('<h1 >', {class:'text-center', text:'Lebonrecoin'}).appendTo('body');

    $('<div >', { class:'text-center'
    }).appendTo('body').append($('<img >', {
        class:'img-thumbnail',
        alt:'France',
        src:'views/images/France.jpg'
    }));

    $('<div >', { class:'text-center',
        text:'Lebonrecoin est le site référent' +
            ' de petites annonces de particulier à particulier ' +
            'et professionnels en France. \n    ' +
            'Découvrez nos annonces voitures d’occasion, motos, ' +
            'immobilier, emploi, location de vacances, ' +
            'vêtements, électroménager, jouets, déco, meubles, etc... \n    ' +
            'Déposez une annonce gratuite en toute simplicité pour vendre, ' +
            'donner vos biens ou promouvoir vos services. \n    ' +
            'Avec des milliers de nouvelles annonces mises en ligne ' +
            'chaque jour vous trouverez l’objet d’occasion ou neuf ' +
            'que vous désirez.'
    }).appendTo('body');

}