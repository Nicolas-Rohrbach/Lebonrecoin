function formConnexion() {

    clear();

    let modal = $('<div >', {class: 'modal', id: 'myModal'}).appendTo('body');
    let modal2 = $('<div >', {class: 'modal-content'}).appendTo(modal);
    let modal3 = $('<div >', {class: 'modal-body'}).appendTo(modal2);

    $('<h1 >', {class: 'text-center font-weight-bold', text: 'Connexion'}).appendTo(modal3);
    let div = $('<div >', {align: 'center'}).appendTo(modal3);
    let form = $('<form >', {method: 'post', action: 'connexion.php', id: 'loginform'}).appendTo(div);

    $('<label >', {for: 'user_login', text: 'Pseudo'}).appendTo(form);
    $('<input >', {
        type: 'text',
        class: 'form-control text-center modal-sm',
        id: 'user_login',
        name: 'user_login'
    }).appendTo(form);
    $('<label >', {for: 'user_pass', text: 'Mot de passe'}).appendTo(form);
    $('<input >', {
        type: 'password',
        class: 'form-control text-center modal-sm',
        id: 'user_pass',
        name: 'user_pass'
    }).appendTo(form);
    $('<button >', {
        class: 'btn btn-lg btn-primary btn-block modal-sm',
        type: 'submit',
        text: 'Se connecter'
    }).appendTo(form);
    $('<button >', {
        text: 'S\'inscrire',
        onclick: 'echoFormRegister()'
    }).appendTo(div);

    $('#myModal').show();

};