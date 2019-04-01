function echoOffer(id) {

    clear();

    $.ajax({
        url: 'views/javascript/function/viewOffer.php',
        type:'POST',
        data: {
            myParams: id,
        },
    }).done(function(result) {
        let div = $('<div >').appendTo('body').append(result);
        $(div).hide();
        $(div).fadeIn(1000);
    });

}