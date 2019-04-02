/*
    Form pour pouvoir créer une offre, lors du submit le fichier createOffer.php est appellé pour pouvoir créer une offre/demande.
*/

function createOffer() {

    clear(); // vide le body est affiche la navbar

    // Création du form
    let div = $('<div >', {align: 'center'}).appendTo('body');

    $('<h1 >', {text:' Créer une demande ou une offre', class: 'text-center'}).appendTo(div);


    let form = $('<form >', {method: 'post', action: 'createOffer.php', id: 'createofferform'}).appendTo(div);

    $('<label >', {text: 'Catégorie *'}).appendTo(form);
    let select = $('<select >', {
        class: 'form-row align-items-center',
        id: 'categorie',
        name:'categorie'
    }).appendTo(form);

    $('<option >', {value: 'Autre', text: ' Autre '}).appendTo(select);
    $('<option >', {value: 'Emploi', text: ' Emploi '}).appendTo(select);
    $('<option >', {value: 'Vehicule', text: ' Véhicule '}).appendTo(select);
    $('<option >', {value: 'Immobilier', text: ' Immobilier '}).appendTo(select);
    $('<option >', {value: 'Vacances', text: ' Vacances '}).appendTo(select);
    $('<option >', {value: 'Multimedia', text: ' Multimédia '}).appendTo(select);
    $('<option >', {value: 'Maison', text: ' Maison '}).appendTo(select);
    $('<option >', {value: 'Materiel professionel', text: ' Matériel professionel '}).appendTo(select);
    $('<option >', {value: 'Service', text: ' Service '}).appendTo(select);

    $("<br />").appendTo(form);

    let divAnnonce = $('<div >', {text: 'Type d\'annonce * '}).appendTo(form);

    let divRadio1 = $('<div >', {class: 'form-check form-check-inline'}).appendTo(divAnnonce);

    $('<label >', {for: 'inlineRadio1', text: 'Offre '}).appendTo(divRadio1);
    $('<input >', {
        type: 'radio',
        class: 'form-check-input',
        id: 'inlineRadio1',
        name: 'typeOff',
        value: 'Offre',
        required:''
    }).appendTo(divRadio1);

    let divRadio2 = $('<div >', {class: 'form-check form-check-inline'}).appendTo(divAnnonce);

    $('<label >', {for: 'inlineRadio1', text: 'Demande '}).appendTo(divRadio2);
    $('<input >', {
        type: 'radio',
        class: 'form-check-input',
        id: 'inlineRadio2',
        name: 'typeOff',
        value: 'Demande',
        required:''
    }).appendTo(divRadio2);

    $("<br />").appendTo(form);

    $('<label >', {text: 'Titre d\'annonce'}).appendTo(form);
    $('<input >', {
        type: 'text',
        class: 'form-control text-center modal-sm',
        id: 'title',
        name: 'title',
        required:''
    }).appendTo(form);

    $("<br />").appendTo(form);

    $('<label >', {text: 'Texte de l\'annonce'}).appendTo(form);
    $('<textarea >', {
        type: 'text',
        class: 'form-control text-center modal-sm',
        id: 'text',
        name: 'text',
        required:''
    }).appendTo(form);

    // $('<label >', {text: 'Image de l\'annonce'}).appendTo(form);
    // $('<input >', {
    //     type: 'file',
    //     class: 'form-control text-center modal-sm',
    //     id: 'image',
    //     name: 'image',
    //     required:''
    // }).appendTo(form);

    $("<br />").appendTo(form);

    $('<button >', {
        class: 'btn btn-lg btn-primary btn-block modal-sm',
        type: 'submit',
        text: 'Poster'
    }).appendTo(form);

    /*
        Appel de createOffer.php
    */

    $(document).ready(function() {
        $("#createofferform").submit(function (data){
            $.ajax({
                url: 'views/javascript/function/createOffer.php',
                type: 'post',
                data: $(this).serialize(),
            }).done(function(result) {
                if(result == true) { //Lorsque l'offre/demande est crée, redirection sur les offres/demandes du la personne
                    myAccount();
                }
            });
            return false;
        });
    });

};