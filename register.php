<?php
/**
 * Created by PhpStorm.
 * User: r17000292
 * Date: 27/02/19
 * Time: 09:35
 */

require_once 'VIEW/function.php';

startpage();

buildheader();

displayRegister();

$link = new PDO('mysql:host=mysql-lebonrecoin.alwaysdata.net; dbname=lebonrecoin_bd', '178440', 'azerty')
or die('Pb de connexion au serveur: ' . mysqli_connect_error());

$stmt = $link->prepare("INSERT INTO USER (LOGIN, PASSWORD, EMAIL) VALUES (:LOGIN, :PASSWORD, :EMAIL)");
$stmt->bindParam(':LOGIN', $log);
$stmt->bindParam(':PASSWORD', $pwd);
$stmt->bindParam(':EMAIL', $email);

// insertion d'une ligne
$log = $_POST['log'];
$pwd = md5($_POST['pwd']);
$email = $_POST['email'];
$stmt->execute();

endpage();
?>