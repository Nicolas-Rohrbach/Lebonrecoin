<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 11/03/2019
 * Time: 16:07
 */

include_once 'VIEW/viewLogin.php';

class login implements ControllerG
{

    public function display($data = []) {

        $view = new viewLogin();
        $view->startpage('Connexion');
        $view->displayLogin();
        $view->endpage();

    }


//<?php
//    /**
//     * Created by PhpStorm.
//     * User: r17000292
//     * Date: 27/02/19
//     * Time: 09:29
//     */
//
//
//$email = "nico@nico.fr";
//$pwd = "nico";
//
//$username = "Sdz";
//$password = "salut";
//
//if( isset($_POST['email']) && isset($_POST['pwd']) ){
//
//if($_POST['email'] == $username && $_POST['pwd'] == $password){ // Si les infos correspondent...
//session_start();
//$_SESSION['email'] = $username;
//echo "Success";
//}
//else{ // Sinon
//    echo "Failed";
//}
//}

//if (isset($_POST['email'], $_POST['pwd'])) {
//
//    $link = new PDO('mysql:host=mysql-lebonrecoin.alwaysdata.net; dbname=lebonrecoin_bd', '178440', 'azerty')
//    or die('Pb de connexion au serveur: ' . mysqli_connect_error());
//
////    $email = $_POST['email'];
////    $pwd = md5($_POST['pwd']);
//
////    $stmt = $link->prepare("SELECT * FROM USER WHERE EMAIL = ".$email." AND PASSWORD = ".$pwd);
////    $count = $stmt->rowCount();
//
//    if ($_POST['email'] == $email && $_POST['pwd'] == $pwd) {
//
//            session_start();
//            $_SESSION['email'] = $_POST['email'];
//            $_SESSION['pwd'] = md5($_POST['pwd']);
//            header('location: index.php');
//    }
//    else {
//
//        header('location: login.php');
//    }
//}


}