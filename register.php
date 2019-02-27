<?php
/**
 * Created by PhpStorm.
 * User: r17000292
 * Date: 27/02/19
 * Time: 09:35
 */

require_once 'function.php';

startpage();
?>


    <h1 class="text-center"> Le bon recoin </h1>

    <br/>

    <div align="center" class="jumbotron">
        <form method="post" action="" id="loginform" name="loginform">

            Type de compte *:
            <label>Particulier
            <input type="radio" name="radio1" value="particulier" required="">
            </label>
            <label>Professionel
            <input type="radio" name="radio1" value="pro" required="">
            </label>

            <br/>

            <label for="user_login">Pseudo *</label>
            <input type="text" class="form-control text-center modal-sm" id="user_login" name="log" required="" autofocus="">

            <label for="user_pass" >Mot de passe *</label>
            <input type="password" id="user_pass" class="form-control text-center modal-sm" name="pwd" required="">

            <label for="user_email" >Email *</label>
            <input type="email" id="user_pass" class="form-control text-center modal-sm" name="email" required="">

            <br/>
            <button class="btn btn-lg btn-primary btn-block modal-sm" type="submit"> Enregistrer </button>
            <!--<input type="hidden" value="http://lebonrecoin.alwaysdata.net/" name="redirect_to"> -->

        </form>
    </div>

<?php

$link = new PDO('mysql:host=mysql-lebonrecoin.alwaysdata.net; dbname=lebonrecoin_bd', '178440', 'azerty')
or die('Pb de connexion au serveur: ' . mysqli_connect_error());

$stmt = $link->prepare("INSERT INTO USER (LOGIN, PASSWORD, EMAIL) VALUES (:LOGIN, :PASSWORD, :EMAIL)");
$stmt->bindParam(':LOGIN', $log);
$stmt->bindParam(':PASSWORD', $pwd);
$stmt->bindParam(':EMAIL', $email);

// insertion d'une ligne
$log = $_POST['log'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];
$stmt->execute();

endpage();
?>