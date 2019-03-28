function echoFormRegister() {

    clear();

    let modal = $('<div >', {class: 'modal', id: 'myModal'}).appendTo('body');
    let modal2 = $('<div >', {class: 'modal-content'}).appendTo(modal);
    let modal3 = $('<div >', {class: 'modal-body'}).appendTo(modal2);

    $('<h1 >', {class: 'text-center font-weight-bold', text: 'Inscription'}).appendTo(modal3);
    let div = $('<div >', {align: 'center'}).appendTo(modal3);
    let form = $('<form >', {method: 'post', action: 'register.php', id: 'registerform'}).appendTo(div);



    let label1 = $('<label >', { text:'Particulier' }).appendTo(form);
    $('<input >', { type:'radio', value:'particulier'}).appendTo(label1);

    let label2 = $('<label >', { text:'Professionel' }).appendTo(form);
    $('<input >', { type:'radio', value:'progessionel'}).appendTo(label2);

    $('<label >', {for: 'user_log', text: 'Pseudo'}).appendTo(form);
    $('<input >', {
        type: 'text',
        class: 'form-control text-center modal-sm',
        id: 'user_log',
        name: 'user_log'
    }).appendTo(form);

    $('<label >', {for: 'user_email', text: 'Adresse email'}).appendTo(form);
    $('<input >', {
        type: 'email',
        class: 'form-control text-center modal-sm',
        id: 'user_email',
        name: 'user_email'
    }).appendTo(form);

    $('<label >', {for: 'user_pwd', text: 'Mot de passe'}).appendTo(form);
    $('<input >', {
        type: 'password',
        class: 'form-control text-center modal-sm',
        id: 'user_pwd',
        name: 'user_pwd'
    }).appendTo(form);

    $('<button >', {
        class: 'btn btn-lg btn-primary btn-block modal-sm',
        type: 'submit',
        text: 'S\'inscrire'
    }).appendTo(form);

    $('<button >', {
        class: 'btn btn-lg btn-primary btn-block modal-sm',
        type: 'submit',
        text: 'Déjà inscrit ?',
        onclick: 'formConnexion()'
    }).appendTo(div);

    $('#myModal').show();

};