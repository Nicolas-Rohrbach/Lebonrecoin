function echoOffers() {

    clear();
    $('<h1 >', {text:'Offres', class:'text-center'}).appendTo('body');
    $(document).ready(function() {
            $.ajax({
                url: 'views/javascript/function/register.php'
            }).done(function(result) {
            });
            return false;

    });
}