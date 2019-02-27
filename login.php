<?php
/**
 * Created by PhpStorm.
 * User: r17000292
 * Date: 27/02/19
 * Time: 09:29
 */

require_once 'function.php';
startpage();

?>
<h1 class="text-center"> Le bon recoin </h1>
<div align="center">
    <form method="post" action="" id="loginform" name="loginform">
        <br/>
        <label for="user_email">Adresse email</label>
        <input type="email" class="form-control text-center modal-sm" id="user_email" name="email" required="" autofocus="">
        <label for="user_pass">Mot de passe </label>
        <input type="password" id="inputPassword" class="form-control text-center modal-sm" name="pwd" required="">
        <br/>
        <button class="btn btn-lg btn-primary btn-block modal-sm" type="submit"> Se connecter </button>
        <input type="hidden" value="http://tv-connectee-amu.alwaysdata.net/" name="redirect_to">
    </form>

    Vous n'avez pas de compte ?
    <a href="register.php"> Inscription <a/>
</div>

<?php

$link = new PDO('mysql:host=mysql-lebonrecoin.alwaysdata.net; dbname=lebonrecoin_bd', '178440', 'azerty')
or die('Pb de connexion au serveur: ' . mysqli_connect_error());

$stmt = $link->prepare("SELECT * FROM USER WHERE EMAIL = :EMAIL");
$stmt->bindParam(':EMAIL', $email);

// insertion d'une ligne
$pwd = $_POST['pwd'];
$email = $_POST['email'];
$stmt->execute();

endpage();
