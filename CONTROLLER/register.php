<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 23/03/2019
 * Time: 20:08
 */

include_once 'VIEW/viewRegister.php';

class register implements ControllerG
{
    public function display($data = [])
    {
        $view = new viewRegister();
        $view->startpage('Inscription');
        $view->displayRegister();
        $view->endpage();
    }
}

//$link = new PDO('mysql:host=mysql-lebonrecoin.alwaysdata.net; dbname=lebonrecoin_bd', '178440', 'azerty')
//or die('Pb de connexion au serveur: ' . mysqli_connect_error());
//
//$stmt = $link->prepare("INSERT INTO USER (LOGIN, PASSWORD, EMAIL) VALUES (:LOGIN, :PASSWORD, :EMAIL)");
//$stmt->bindParam(':LOGIN', $log);
//$stmt->bindParam(':PASSWORD', $pwd);
//$stmt->bindParam(':EMAIL', $email);
//
//// insertion d'une ligne
//$log = $_POST['log'];
//$pwd = md5($_POST['pwd']);
//$email = $_POST['email'];
//$stmt->execute();