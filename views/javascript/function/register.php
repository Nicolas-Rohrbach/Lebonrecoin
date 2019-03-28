<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 27/03/2019
 * Time: 17:05
 */

require_once "models/RegisterManager.php";

if( isset($_POST['user_email']) && isset($_POST['user_pwd']) && isset($_POST['user_log']) ){

    $model = new RegisterManager();

    $login = $_POST['user_log'];
    $email = $_POST['user_mail'];
    $pwd = md5($_POST['user_pwd']);

    $model->add($email,$login,$pwd);

//    if($model->checkNoDouble($email,$login)){ // Si les infos correspondent...
//        $model->addUser($email,$login,$pwd);
//    }
    header('location: https://lebonrecoin.alwaysdata.net');
}
else {
    header('location: https://lebonrecoin.alwaysdata.net');
}