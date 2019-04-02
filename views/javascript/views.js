// Permet de vider le body et puis afficher la navbar
function clear() {

    $('body').empty();
    displayNavBar();

}

$(document).ready(function(){
    console.log("debut");
    clear(); // vide le body est affiche la navbar
    echoHome(); // Affiche la page d'accueil
    $.ajax({
        url: 'views/javascript/function/is_connected.php', // Appel is_connected.php
        success:(function(data) {
            if(data === false) { // Si l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
                formConnexion();
                console.log("Non connecté")
            }
        })
    });
});