<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 28/03/2019
 * Time: 14:32
 */

include_once '../../../models/Model.php';
include_once "../../../models/OffreManager.php";

session_start();

if( isset($_POST['title']) && isset($_POST['text']) && isset($_POST['typeOff']) && isset($_POST['categorie'])){

    $model = new OffreManager();

    $title = filter_input(INPUT_POST,'title');
    $text = filter_input(INPUT_POST,'text');
    $typeOff = filter_input(INPUT_POST,'typeOff');
    $categorie = filter_input(INPUT_POST,'categorie');
    $login = $_SESSION['login'];
//    $image = basename($_FILES['image']['name']);
//
//    $dossier = 'views/images/';
//
//    $fichier = basename($_FILES['image']['name']);
//    $taille_maxi = 10000000;
//    $taille = filesize($_FILES['image']['tmp_name']);
//    $extensions = array('.png', '.gif', '.jpg', '.jpeg');
//    $extension = strrchr($_FILES['image']['name'], '.');
//
//    if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
//    {
//        echo 'Vous devez uploader un fichier de type png, gif, jpg, jpeg';
//    }
//    if($taille>$taille_maxi)
//    {
//        echo 'Le fichier est trop gros...';
//    }
//    if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
//    {
//        move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier);//Si la fonction renvoie TRUE, c'est que ça a fonctionné..
//    }
//
    $model->addOffer($title,$text,$typeOff,$categorie,$login);

}

$param = json_decode(isset($_POST['title']) && isset($_POST['text']) && isset($_POST['typeOff']) && isset($_POST['categorie']));

echo $param;