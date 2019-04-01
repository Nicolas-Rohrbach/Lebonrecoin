<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 29/03/2019
 * Time: 16:41
 */

include_once '../../../models/Model.php';
require_once "../../../models/OffreManager.php";

$models = new OffreManager();

$var[] = $models->getTuple();

foreach ($var as $offres) {
    foreach ($offres as $offre) {
        echo '
                <div class="column">
                <div class="card" style="width: 18rem;">
                    <img src="views/images/offre.png" class="card-img-top" alt="demande">
                    <div class="card-body">
                    <h5 class="card-title">'. $offre['TITLE'] .' - '. $offre['CATEGORIE'].' </h5>
                    <p class="card-text">' .$offre['CONTENT']. '</p>
                    <button class="btn btn-lg btn-primary btn-block modal-sm " id="'. $offre['ID'].'" onclick="echoOffer(this.id)"> Voir </button>
                  </div>
                </div>
        </div>';


    }
}



