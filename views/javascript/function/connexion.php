<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 24/03/2019
 * Time: 16:06
 */

include_once "models/ConnexionManager.php";

if( isset($_POST['user_login']) && isset($_POST['user_pass']) ){

    $model = new ConnexionManager();

    $login = $_POST['user_login'];
    $pwd = md5($_POST['user_pass']);

    if($model->getConnexion($login,$pwd) > 0){

        session_start();
        $_SESSION['login'] = $login;

    }
}
