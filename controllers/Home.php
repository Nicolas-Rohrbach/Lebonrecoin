<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 11/03/2019
 * Time: 16:21
 */

include_once 'views/ViewHome.php';

class Home implements ControllerG
{

    public function display($data = []) {

        $view = new viewHome();
        $view->startpage('Lebonrecoin');
        $view->br();
        $view->br();
        $view->br();
        $view->displayFrance();
        $view->textIndex();
        $view->endpage();

    }
}