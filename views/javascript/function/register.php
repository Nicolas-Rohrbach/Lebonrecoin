<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 27/03/2019
 * Time: 17:05
 */

include_once '../../../models/Model.php';
require_once "../../../models/RegisterManager.php";

if(!(strlen($_POST['user_pwd']) <= 4) || !(strlen($_POST['user_log'] <= 4))) {

    if (isset($_POST['user_email']) && isset($_POST['user_pwd']) && isset($_POST['user_log']) && isset($_POST['typeAnn'])) {

        $model = new RegisterManager();


        $login = filter_input(INPUT_POST, 'user_log');
        $email = filter_input(INPUT_POST, 'user_email');
        $pwd = md5(filter_input(INPUT_POST, 'user_pwd'));
        $type = filter_input(INPUT_POST, 'typeAnn');

        if ($model->checkNoDouble($email, $login)) { // Si les infos correspondent...
            $model->add($email, $login, $pwd, $type);
            $param = json_decode(isset($_POST['user_email']) && isset($_POST['user_pwd']) && isset($_POST['user_log']) && isset($_POST['typeAnn']));

            echo $param;
        }
        else {
            $param = json_decode(false);
            echo $param;;
        }
    }
    else {
        $param = json_decode(isset($_POST['user_email']) && isset($_POST['user_pwd']) && isset($_POST['user_log']) && isset($_POST['typeAnn']));

        echo $param;
    }
}
else {
    $param = json_decode(array('size' => 'Non'));
    echo $param;
}

