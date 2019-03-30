<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 27/03/2019
 * Time: 17:05
 */

include_once '../../../models/Model.php';
require_once "../../../models/RegisterManager.php";

if( isset($_POST['user_email']) && isset($_POST['user_pwd']) && isset($_POST['user_log']) && isset($_POST['typeAnn']) ){

    $model = new RegisterManager();

    $login = $_POST['user_log'];
    $email = $_POST['user_email'];
    $pwd = md5($_POST['user_pwd']);
    $type = $_POST['typeAnn'];

    if($model->checkNoDouble($email,$login)){ // Si les infos correspondent...
        $model->add($email,$login,$pwd,$type);
    }
}

$param = json_decode(isset($_POST['user_email']) && isset($_POST['user_pwd']) && isset($_POST['user_log']) && isset($_POST['typeAnn']));

echo $param;