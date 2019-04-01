function formConnexion() {

    clear();

    let modal = $('<div >', {class: 'modal', id: 'myModal'}).appendTo('body');
    let modal2 = $('<div >', {class: 'modal-content'}).appendTo(modal);
    let modal3 = $('<div >', {class: 'modal-body'}).appendTo(modal2);

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

    $('<button >', {
        class: 'btn btn-lg btn-primary btn-block modal-sm',
        text: 'Inscription',
        onclick: 'echoFormRegister()'
    }).appendTo(div);

    $('#myModal').show();

    $(document).ready(function() {
        $("#loginform").submit(function (data){
            $.ajax({
                url: 'views/javascript/function/connexion.php',
                type: 'post',
                data: $(this).serialize(),
            }).done(function(result) {
                if(result == true) {
                    $('#myModal').hide();
                    echoHome();
                }
                else {
                    $('<div >', {text: 'Erreur lors de la connexion'}).appendTo('form');
                }

            });
            return false;
        });
    });

}