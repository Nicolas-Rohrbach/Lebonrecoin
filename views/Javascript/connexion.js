let connexion = function() {

    let dive = $('<div >', {class: 'text-center', text: 'Connexion'}).appendTo('body');
    let divee = $('<div >', {align: 'center'}).appendTo(dive);
    let forme = $('<form >', {method: 'post', action: '', id: 'loginform'}).appendTo(divee);

    $('<label >', {for: 'user_email', text: 'Adresse email'}).appendTo(forme);
    $('<input >', {
        type: 'email',
        class: 'form-control text-center modal-sm',
        id: 'user_email',
        name: 'email'
    }).appendTo(forme);
    $('<label >', {for: 'user_pass', text: 'Mot de passe'}).appendTo(forme);
    $('<input >', {
        type: 'password',
        class: 'form-control text-center modal-sm',
        id: 'inputPassword',
        name: 'pwd'
    }).appendTo(forme);
    $('<button >', {
        class: 'btn btn-lg btn-primary btn-block modal-sm',
        type: 'submit',
        text: 'Se connecter'
    }).appendTo(forme);
};

$(document).ready(function(){
    console.log("debut");
    $.ajax({
        url: 'views/Javascript/Function/is_connected.php',
        success:(function(data) {
            if(data === false) {
                connexion();
                console.log("Non connecté")
            }
            else {
                $('<div />').append('oui').appendTo('body');
                console.log("Connecté")
            }
        })
    });});