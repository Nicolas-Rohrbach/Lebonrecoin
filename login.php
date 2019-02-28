<?php
/**
 * Created by PhpStorm.
 * User: r17000292
 * Date: 27/02/19
 * Time: 09:29
 */

require_once 'function.php';
startpage();
buildheader();

?>
<h1 class="text-center"> Connexion </h1>
<div align="center">
    <form method="post" action="" id="loginform" name="loginform">
        <br/>
        <label for="user_email">Adresse email</label>
        <input type="email" class="form-control text-center modal-sm" id="user_email" name="email" required="" autofocus="">
        <label for="user_pass">Mot de passe </label>
        <input type="password" id="inputPassword" class="form-control text-center modal-sm" name="pwd" required="">
        <br/>
        <button class="btn btn-lg btn-primary btn-block modal-sm" type="submit"> Se connecter </button>
    </form>

    Vous n'avez pas de compte ?
    <a href="register.php"> Inscription <a/>
</div>

<?php

$email = "nico@nico.fr";
$pwd = "nico";

if (isset($_POST['email'], $_POST['pwd'])) {

    $link = new PDO('mysql:host=mysql-lebonrecoin.alwaysdata.net; dbname=lebonrecoin_bd', '178440', 'azerty')
    or die('Pb de connexion au serveur: ' . mysqli_connect_error());

//    $email = $_POST['email'];
//    $pwd = md5($_POST['pwd']);

//    $stmt = $link->prepare("SELECT * FROM USER WHERE EMAIL = ".$email." AND PASSWORD = ".$pwd);
//    $count = $stmt->rowCount();

    if ($_POST['email'] == $email && $_POST['pwd'] == $pwd) {

            session_start();
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['pwd'] = md5($_POST['pwd']);
            header('location: index.php');
    }
    else {

        header('location: login.php');
    }
}

endpage();
