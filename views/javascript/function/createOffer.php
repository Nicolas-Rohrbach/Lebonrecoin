<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 28/03/2019
 * Time: 14:32
 */

include_once '../../../models/Model.php';
include_once "../../../models/OffreManager.php";

if( isset($_POST['title']) && isset($_POST['text']) && isset($_POST['typeOff']) && isset($_POST['categorie'])){

    $model = new OffreManager();

    $title = $_POST['title'];
    $text = $_POST['text'];
    $typeOff = $_POST['typeOff'];
    $categorie = $_POST['categorie'];
    $model->addOffer($title,$text,$typeOff,$categorie);

}

$param = json_decode(isset($_POST['title']) && isset($_POST['text']) && isset($_POST['typeOff']) && isset($_POST['categorie']));

echo $param;