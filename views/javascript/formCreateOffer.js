function createOffer() {

    clear();

    let div = $('<div >', {align: 'center'}).appendTo('body');

    let form = $('<form >', {method: 'post', action: 'createOffer.php', id: 'createofferform'}).appendTo(div);

    $('<label >', {text: 'Catégorie *'}).appendTo(form);
    let select = $('<select >', {
        class: 'form-row align-items-center',
        id: 'categorie'
    }).appendTo(form);

    $('<option >', {value: '""', text: ' Choisissez une catégorie '}).appendTo(select);
    $('<option >', {value: '""', text: ' Emploi '}).appendTo(select);

    let divAnnonce = $('<div >', {text: 'Type d\'annonce * '});

    let divRadio1 = $('<div >', {class: 'form-check form-check-inline'}).appendTo(divAnnonce);

    $('<label >', {for: 'inlineRadio1', text: 'Offres'}).appendTo(divRadio1);
    $('<input >', {
        type: 'radio',
        class: 'form-check-input',
        id: 'inlineRadio1',
        name: 'inlineRadioOptions',
        value: 'Offres'
    }).appendTo(divRadio1);

    let divRadio2 = $('<div >', {class: 'form-check form-check-inline'}).appendTo(form);

    $('<label >', {for: 'inlineRadio1', text: 'Demandes'}).appendTo(divRadio2);
    $('<input >', {
        type: 'radio',
        class: 'form-check-input',
        id: 'inlineRadio2',
        name: 'inlineRadioOptions',
        value: 'Demandes'
    }).appendTo(divRadio2);

    $('<label >', {text: 'Titre d\'annonce'}).appendTo(form);
    $('<input >', {
        type: 'text',
        class: 'form-control text-center modal-sm',
        id: 'title',
        name: 'title'
    }).appendTo(form);

    $('<label >', {text: 'Texte de l\'annonce'}).appendTo(form);
    $('<input >', {
        type: 'text',
        class: 'form-control text-center modal-sm',
        id: 'text',
        name: 'text'
    }).appendTo(form);

    $('<button >', {
        class: 'btn btn-lg btn-primary btn-block modal-sm',
        type: 'submit',
        text: 'Poster'
    }).appendTo(form);
    $('<input >', {
        type: 'hidden',
        value: 'http://lebonrecoin.alwaysdata.net/',
        name: 'redirect_to'
    }).appendTo(form);

};