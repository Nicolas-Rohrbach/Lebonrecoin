function echoOffers() {

    clear();
    $('<h1 >', {text:'Offres', class:'text-center'}).appendTo('body');

    $.ajax({
        url: 'views/javascript/function/viewOffers.php'
    }).done(function(result) {
        let divC = $('<div >', {class:'container'}).appendTo('body');
        let divR = $('<div >', {class:'row'}).appendTo(divC);
        $('<div >').appendTo(divR).append(result);
        $(divC).hide();
        $(divC).fadeIn(1000);
    });

}