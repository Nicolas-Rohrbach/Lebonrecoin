function myAccount() {

    clear();
    $('<h1 >', {text:'Mes offres/Demandes', class:'text-center'}).appendTo('body');

    $.ajax({
        url: 'views/javascript/function/viewAccount.php',
    }).done(function(data) {
        let divC = $('<div >', {class:'container'}).appendTo('body');
        let divR = $('<div >', {class:'row'}).appendTo(divC);
        $('<div >').appendTo(divR).append(data)
        $(divC).hide();
        $(divC).fadeIn(1000);;
    });
}

function supprOffer(id) {
    $.ajax({
        url: 'views/javascript/function/deleteOffer.php',
        type:'POST',
        data: {
            myParams: id,
        },
        success: function(data)
        {
            if(data > 0) {
                myAccount();
            }
        }
    });
}