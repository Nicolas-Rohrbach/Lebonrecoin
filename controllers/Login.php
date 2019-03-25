<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 11/03/2019
 * Time: 16:07
 */

include_once 'views/ViewLogin.php';

class login implements ControllerG
{

    public function display($data = []) {

        $view = new viewLogin();
        $view->startpage('Connexion');
        $view->displayLogin();
        $view->endpage();

    }

}