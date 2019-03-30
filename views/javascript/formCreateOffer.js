function createOffer() {

    clear();



    let div = $('<div >', {align: 'center'}).appendTo('body');

    $('<h1 >', {text:' Créer une offre/demande', class: 'text-center'}).appendTo(div);

    let form = $('<form >', {method: 'post', action: 'createOffer.php', id: 'createofferform'}).appendTo(div);

    $('<label >', {text: 'Catégorie *'}).appendTo(form);
    let select = $('<select >', {
        class: 'form-row align-items-center',
        id: 'categorie',
        name:'categorie'
    }).appendTo(form);

    $('<option >', {value: '""', text: ' Choisissez une catégorie '}).appendTo(select);
    $('<option >', {value: 'Emploi', text: ' Emploi '}).appendTo(select);

    let divAnnonce = $('<div >', {text: 'Type d\'annonce * '}).appendTo(form);

    let divRadio1 = $('<div >', {class: 'form-check form-check-inline'}).appendTo(divAnnonce);

    $('<label >', {for: 'inlineRadio1', text: 'Offres '}).appendTo(divRadio1);
    $('<input >', {
        type: 'radio',
        class: 'form-check-input',
        id: 'inlineRadio1',
        name: 'typeOff',
        value: 'Offres'
    }).appendTo(divRadio1);

    let divRadio2 = $('<div >', {class: 'form-check form-check-inline'}).appendTo(divAnnonce);

    $('<label >', {for: 'inlineRadio1', text: 'Demandes '}).appendTo(divRadio2);
    $('<input >', {
        type: 'radio',
        class: 'form-check-input',
        id: 'inlineRadio2',
        name: 'typeOff',
        value: 'Demandes'
    }).appendTo(divRadio2);

    $("<br />").appendTo(form);

    $('<label >', {text: 'Titre d\'annonce'}).appendTo(form);
    $('<input >', {
        type: 'text',
        class: 'form-control text-center modal-sm',
        id: 'title',
        name: 'title'
    }).appendTo(form);

    $("<br />").appendTo(form);

    $('<label >', {text: 'Texte de l\'annonce'}).appendTo(form);
    $('<input >', {
        type: 'text',
        class: 'form-control text-center modal-sm',
        id: 'text',
        name: 'text'
    }).appendTo(form);

    $("<br />").appendTo(form);

    $('<button >', {
        class: 'btn btn-lg btn-primary btn-block modal-sm',
        type: 'submit',
        text: 'Poster'
    }).appendTo(form);

    $(document).ready(function() {
        $("#createofferform").submit(function (data){
            $.ajax({
                url: 'views/javascript/function/createOffer.php',
                type: 'post',
                data: $(this).serialize(),
            }).done(function(result) {
                if(result == true) {
                    echoHome();
                }
                else {
                    alert(result);
                }

            });
            return false;
        });
    });

};