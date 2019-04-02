/*
    Form pour pouvoir s'enregistrer, lors du submit le fichier register.php est appellé pour pouvoir voir si l'adresse mail et/ou le login est déjà utilisé,
    si c'est déjà le cas, l'enregistrement du compte est refusé. Sinon le compte est créé.
*/

function echoFormRegister() {

    clear(); // vide le body est affiche la navbar

    // Création d'un modal
    let modal = $('<div >', {class: 'modal', id: 'myModal'}).appendTo('body');
    let modal2 = $('<div >', {class: 'modal-content'}).appendTo(modal);
    let modal3 = $('<div >', {class: 'modal-body'}).appendTo(modal2);

    // Création du form
    $('<h1 >', {class: 'text-center font-weight-bold', text: 'Inscription'}).appendTo(modal3);
    let div = $('<div >', {align: 'center'}).appendTo(modal3);
    let form = $('<form >', {method: 'post', id: 'registerform'}).appendTo(div);



    let label1 = $('<label >', { text:'Particulier' }).appendTo(form);
    $('<input >', { type:'radio',
        value:'particulier',
        name:'typeAnn',
        id:'typeAnn',
        required:''
    }).appendTo(label1);

    let label2 = $('<label >', { text:'Professionel' }).appendTo(form);

    $("<br />").appendTo(form);

    $('<input >', { type:'radio', value:'professionel', name:'typeAnn', id:'typeAnn'}).appendTo(label2);

    $('<label >', {for: 'user_log', text: 'Pseudo  (4 caractères minimum)'}).appendTo(form);
    $('<input >', {
        type: 'text',
        class: 'form-control text-center modal-sm',
        id: 'user_log',
        name: 'user_log',
        required:''
    }).appendTo(form);

    $('<label >', {for: 'user_email', text: 'Adresse email'}).appendTo(form);
    $('<input >', {
        type: 'email',
        class: 'form-control text-center modal-sm',
        id: 'user_email',
        name: 'user_email',
        required:''
    }).appendTo(form);

    $('<label >', {for: 'user_pwd', text: 'Mot de passe (4 caractères minimum)'}).appendTo(form);
    $('<input >', {
        type: 'password',
        class: 'form-control text-center modal-sm',
        id: 'user_pwd',
        name: 'user_pwd',
        required:''
    }).appendTo(form);

    $("<br />").appendTo(form);

    $('<button >', {
        class: 'btn btn-lg btn-primary btn-block modal-sm',
        type: 'submit',
        id:'regist',
        text: 'S\'inscrire'
    }).appendTo(form);

    $("<br />").appendTo(form);

    //Permet d'aller sur la page de connexion
    $('<button >', {
        class: 'btn btn-lg btn-primary btn-block modal-sm',
        type: 'submit',
        text: 'Déjà inscrit ?',
        onclick: 'formConnexion()'
    }).appendTo(div);

    // Div de l'erreur
    $("<div>", {
        id: "error",
        class: "text-danger",
    }).appendTo(form).hide();

    $('#myModal').show();

    /*
        Appel de register.php
    */

    $(document).ready(function() {
        $("#registerform").submit(function (data){
            $.ajax({
                url: 'views/javascript/function/register.php',
                type: 'post',
                data: $(this).serialize(),
            }).done(function(result) {
                if(result == true) { // Si l'enregistrement est réussi, l'utilisateur est redirigé à la page de connexion
                    formConnexion();
                }
                else { // Si l'enregistrement est refusé, on affiche un message d'erreur et on fait trembler l'écran pour indiquer l'erreur
                    $('#error').empty().text("Email ou login déjà utilisé").show();
                    $(div).effect( "shake" );
                }

            });
            return false;
        });
    });

};