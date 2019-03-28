<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 28/03/2019
 * Time: 14:32
 */

include_once "models/OffreManager.php";

if( isset($_POST['title']) && isset($_POST['text']) ){

    $model = new OffreManager();

    $title = $_POST['title'];
    $text = $_POST['text'];
    $model->addOffer($title,$text);

    header('location: https://lebonrecoin.alwaysdata.net');
}