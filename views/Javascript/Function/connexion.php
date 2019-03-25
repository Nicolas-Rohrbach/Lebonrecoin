<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 24/03/2019
 * Time: 16:06
 */

$email = "nico@nico.fr";
$pwd = "nico";

if (isset($_POST['email'], $_POST['pwd'])) {

    $link = new PDO('mysql:host=mysql-lebonrecoin.alwaysdata.net; dbname=lebonrecoin_bd', '178440', '1234')
    or die('Pb de connexion au serveur: ' . mysqli_connect_error());

//    $email = $_POST['email'];
//    $pwd = md5($_POST['pwd']);

//    $stmt = $link->prepare("SELECT * FROM USER WHERE EMAIL = ".$email." AND PASSWORD = ".$pwd);
//    $count = $stmt->rowCount();

    if ($_POST['email'] == $email && $_POST['pwd'] == $pwd) {

        session_start();
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['pwd'] = md5($_POST['pwd']);
        header('location: ');
    }
    else {

        header('location: Login.php');
    }
}