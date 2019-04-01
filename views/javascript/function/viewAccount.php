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

foreach ($var as $offres) {
    foreach ($offres as $offre) {

        echo '
                <div class="column">
                <div class="card">
        ';
        if($offre['TYPE'] == "Demande") {
            echo '<img src="views/images/demande.jpg" alt="demande">';
        }
        else {
            echo '<img src="views/images/offre.png" alt="offre">';
        }
        echo '<div class="card-body">
                    <h5 class="card-title">'. $offre['TITLE'] .' - '. $offre['CATEGORIE'].' </h5>
                    <p class="card-text">' .$offre['CONTENT']. '</p>
                    <button class="btn btn-lg btn-primary btn-block modal-sm " id="'. $offre['ID'].'" onclick="echoOffer(this.id)"> Voir </button>
                    <button class="btn btn-lg btn-primary btn-block modal-sm" id="'. $offre['ID'].'" onclick="supprOffer(this.id)"> Supprimer </button>
                  </div>
                </div>
        </div>';

    }
}