<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 27/03/2019
 * Time: 17:05
 */

require_once "models/RegisterManager";

if( isset($_POST['user_mail']) && isset($_POST['user_pwd']) /*&& isset($_POST['user_type'])*/ && isset($_POST['user_login']) ){

    $model = new RegisterManager();

    $type = $_POST['user_type'];
    $login = $_POST['user_login'];
    $email = $_POST['user_mail'];
    $pwd = md5($_POST['user_pwd']);


    if($model->checkNoDouble($email,$login)){ // Si les infos correspondent...
        $model->addUser($email,$login,$type,$pwd);
    }
}