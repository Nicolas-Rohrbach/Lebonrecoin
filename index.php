<?php
/**
 * Created by PhpStorm.
 * User: r17000292
 * Date: 27/02/19
 * Time: 09:20
 */


require_once 'CONTROLLER/ControllerG.php';

$controller = new ControllerG();
$controller->displayIndex();
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

<?php


echo '<div class="text-center"> Lebonrecoin est le site référent de petites annonces de particulier à particulier et professionnels en France. 
    Découvrez nos annonces voitures d’occasion, motos, immobilier, emploi, location de vacances, vêtements, électroménager, jouets, déco, meubles, etc... 
    Déposez une annonce gratuite en toute simplicité pour vendre, donner vos biens ou promouvoir vos services. 
    Avec des milliers de nouvelles annonces mises en ligne chaque jour vous trouverez l’objet d’occasion ou neuf que vous désirez. </div>';

endpage();