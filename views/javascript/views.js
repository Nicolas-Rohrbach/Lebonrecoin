function clear() {

    $('body').empty();
    displayNavBar();

}

$(document).ready(function(){
    console.log("debut");
    clear();
    echoHome();
    $.ajax({
        url: 'views/javascript/function/is_connected.php',
        success:(function(data) {
            if(data === false) {
                formConnexion();
                console.log("Non connecté")
            }
            else {
                console.log("Connecté")
            }
        })
    });
});