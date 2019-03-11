<?php
/**
 * Created by PhpStorm.
 * User: r17000292
 * Date: 27/02/19
 * Time: 09:20
 */

session_start();

include_once 'CONTROLLER/ControllerG.php';
include_once  'VIEW/ViewG.php';
include_once  'MODEL/BD.php';

if (empty($url)) {
    $url = 'home';
}
$urlExpl = explode('/', $url);
$controllerfile = 'CONTROLLER/' . $urlExpl[0] . '.php';
if (file_exists($controllerfile)) {
    include_once $controllerfile;
    if (class_exists($urlExpl[0])) {
        $ctrl = new $urlExpl[0]();
        if ($ctrl instanceof ControllerG) {
            $action = 'display';
            if (isset($urlExpl[1])) {
                $action = $urlExpl[1];
            }
            if (method_exists($ctrl, $action)) {
                $ctrl->$action(array_slice($urlExpl, 2));
                exit;
            }
        }
    }
}

?>

<!--<script>-->
<!---->
<!--    $(document).ready(function(){-->
<!--        console.log("debut");-->
<!--        $.ajax({-->
<!--            url: '/is_connected.php'-->
<!--        }).done(function(data) {-->
<!--            if(data === false) {-->
<!--                location.href = '/login.php';-->
<!--                console.log("Non connecté")-->
<!--            }-->
<!--            else {-->
<!--                $('<div />').append('oui');-->
<!--                console.log("Connecté")-->
<!--            }-->
<!--        })-->
<!--    });-->
<!---->
<!--</script>-->

<!--<script>-->
<!---->
<!--    $(document).ready(function(){-->
<!---->
<!--        $("#submit").click(function{-->
<!---->
<!--            $.post(-->
<!--                'login.php', // Un script PHP que l'on va créer juste après-->
<!--                {-->
<!--                    username : $("#email").val(),  // Nous récupérons la valeur de nos inputs que l'on fait passer à connexion.php-->
<!--                    password : $("#pwd").val()-->
<!--                },-->
<!---->
<!--                function(data){ // Cette fonction ne fait rien encore, nous la mettrons à jour plus tard-->
<!--                },-->
<!---->
<!--                'text' // Nous souhaitons recevoir "Success" ou "Failed", donc on indique text !-->
<!--            );-->
<!---->
<!--        });-->
<!---->
<!--    });-->
<!---->
<!--</script>-->
