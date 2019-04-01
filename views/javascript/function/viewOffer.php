<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 31/03/2019
 * Time: 21:26
 */

session_start();

include_once '../../../models/Model.php';
require_once "../../../models/OffreManager.php";

$models = new OffreManager();

$id = $_POST['myParams'];

$var[] = $models->getMyTupleID($id);

foreach ($var as $offres) {
    foreach ($offres as $offre) {
        $var2[] = $models->getEMAIL($offre['LOGIN']);
        foreach ($var2 as $emails) {
            foreach ($emails as $email) {
                echo '
            <div class="container text-center">
                <h1 class="text-center">'. $offre['TYPE'].' - '. $offre['CATEGORIE'].' - '.$offre['TITLE']. ' </h1>
                <img src="views/images/offre.png" class="img-thumbnail" alt="demande">
                <div class="text-center"> '.$offre['CONTENT'].' 
                    <div >Posté(e) par '.$offre['LOGIN'].' </div>
                        <div > Contact: '.$email['EMAIL'].'</div> 
            </div>';
            }
        }
    }

}