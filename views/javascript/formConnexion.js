/*
    Form pour pouvoir se connecter, lors du submit le fichier connexion.php est appellé pour pouvoir voir si le login et le  mot de passe sont correctes,
    si c'est déjà le cas, la connexion est acceptée et l'utilisateur est dirigé sur la page d'accueil.
*/

function formConnexion() {

    clear(); // vide le body est affiche la navbar

    // Création d'un modal
    let modal = $('<div >', {class: 'modal', id: 'myModal'}).appendTo('body');
    let modal2 = $('<div >', {class: 'modal-content'}).appendTo(modal);
    let modal3 = $('<div >', {class: 'modal-body'}).appendTo(modal2);

    // Création du form
    $('<h1 >', {class: 'text-center font-weight-bold', text: 'Connexion'}).appendTo(modal3);
    let div = $('<div >', {align: 'center'}).appendTo(modal3);
    let form = $('<form >', {method: 'post', id: 'loginform'}).appendTo(div);

    $('<label >', {for: 'user_login', text: 'Pseudo'}).appendTo(form);
    $('<input >', {
        type: 'text',
        class: 'form-control text-center modal-sm',
        id: 'user_login',
        name: 'user_login',
        required:''
    }).appendTo(form);

    $('<label >', {for: 'user_pass', text: 'Mot de passe'}).appendTo(form);
    $('<input >', {
        type: 'password',
        class: 'form-control text-center modal-sm',
        id: 'user_pass',
        name: 'user_pass',
        required:''
    }).appendTo(form);

    $("<br />").appendTo(form);

    $('<button >', {
        class: 'btn btn-lg btn-primary btn-block modal-sm',
        type: 'submit',
        text: 'Se connecter'
    }).appendTo(form);

    $("<br />").appendTo(form);

    //Permet d'aller sur la page d'enregistrement
    $('<button >', {
        class: 'btn btn-lg btn-primary btn-block modal-sm',
        text: 'Inscription',
        onclick: 'echoFormRegister()'
    }).appendTo(div);

    // Div de l'erreur
    $("<div>", {
        id: "error",
        class: "text-danger",
    }).appendTo(form).hide();

    $('#myModal').show();

    /*
        Appel de connexion.php
     */

    $(document).ready(function() {
        $("#loginform").submit(function (data){
            $.ajax({
                url: 'views/javascript/function/connexion.php',
                type: 'post',
                data: $(this).serialize(),
            }).done(function(result) {
                if(result == true) { // Si la connexion est réussie, on enlève le modal et affichage la page d'accueil
                    $('#myModal').hide();
                    echoHome();
                }
                else { // Si la connexion est refusée, on affiche un message d'erreur et on fait trembler l'écran pour indiquer l'erreur
                    $('#error').empty().text("Erreur de connexion").show();
                    $(div).effect( "shake" );
                }
            });
            return false;
        });
    });

}