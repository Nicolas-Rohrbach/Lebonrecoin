<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 11/03/2019
 * Time: 16:21
 */

class viewHome extends ViewG
{
    public function textIndex() {
        echo '<div class="container text-center empt"> Lebonrecoin est le site référent de petites annonces de particulier à particulier et professionnels en France. 
    Découvrez nos annonces voitures d’occasion, motos, immobilier, emploi, location de vacances, vêtements, électroménager, jouets, déco, meubles, etc... 
    Déposez une annonce gratuite en toute simplicité pour vendre, donner vos biens ou promouvoir vos services. 
    Avec des milliers de nouvelles annonces mises en ligne chaque jour vous trouverez l’objet d’occasion ou neuf que vous désirez. </div>';
    }

    public function displayFrance() {
        echo '<div class="text-center">
                <img class="img-thumbnail" alt="France" src="views/images/France.jpg"/>
              </div>';
    }
}