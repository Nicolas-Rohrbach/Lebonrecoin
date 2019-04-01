function echoOffer(id) {

    clear();

    $.ajax({
        url: 'views/javascript/function/viewOffer.php',
        type:'POST',
        data: {
            myParams: id,
        },
    }).done(function(data) {
        let div = $('<div >').appendTo('body').append(data);
        $(div).hide();
        $(div).fadeIn(1000);
    });

}