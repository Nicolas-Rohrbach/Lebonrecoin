<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 11/03/2019
 * Time: 16:21
 */

include_once 'VIEW/viewHome.php';

class home implements ControllerG
{

    public function display($data = []) {
        $bd = new BD();
        $view = new viewHome();

        $view->startpage();
        $view->buildheader();
        $view->textIndex();
        $view->endpage();
    }
}