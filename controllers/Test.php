<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 26/03/2019
 * Time: 21:10
 */

include_once  'views/ViewTest.php';

class Test implements ControllerG
{
    public function display($data = [])
    {
        $view = new ViewTest();
        $view->startpage("Test");
        $view->displayTest();
        $view->endpage();
    }
}