<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 31/03/2019
 * Time: 16:45
 */

include_once '../../../models/Model.php';
require_once "../../../models/OffreManager.php";

session_start();

$model = new OffreManager();

$login = $_SESSION['login'];

$var[] = $model->getMyTuple($login);

$compteur = 0;

foreach ($var as $offres) {
    foreach ($offres as $offre) {

        if($compteur % 4 == 0) {
            echo '<div class="row">';
        }

        $compteur = $compteur + 1;

        echo '
                <div class="column">
                <div class="card">
                    <h3 class="card-title"> '. $offre['TYPE'].' - '. $offre['CATEGORIE'].' </h3>
                    <img src="views/images/'.$offre['CATEGORIE'].'.png" class="card-img-top" alt="demande">
                <div class="card-body">
                    <h5 class="card-title">'. $offre['TITLE'] .'</h5>
                    <button class="btn btn-lg btn-primary btn-block modal-sm " id="'. $offre['ID'].'" onclick="echoOffer(this.id)"> Voir </button>
                    <button class="btn btn-lg btn-primary btn-block modal-sm" id="'. $offre['ID'].'" onclick="supprOffer(this.id)"> Supprimer </button>
                  </div>
                </div>
        </div>';
    }
    if($compteur % 4 == 3) {
        echo '</div>';
    }
}