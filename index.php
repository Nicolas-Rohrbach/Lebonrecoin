<?php

session_start();

include_once 'controllers/ControllerG.php';
include_once 'views/ViewG.php';
include_once 'views/Javascript/Function/connexion.php';

// /Admin/index/tot/1

$url = filter_input(INPUT_GET, 'url');

if (empty($url)) {
    $url = 'Home';
}

$urlExpl = explode('/', $url);
// $urlExpl[0] => nom du controller
// $urlExpl[1] => nom de l'action du controller

$controllerfile = 'controllers/' . $urlExpl[0] . '.php';
if (file_exists($controllerfile)) {
    include_once $controllerfile;
    if (class_exists($urlExpl[0])) {
        $ctrl = new $urlExpl[0]();
        if ($ctrl instanceof ControllerG) {
            $action = 'display';
            if (isset($urlExpl[1])) {
                $action = $urlExpl[1];
            }
            if (method_exists($ctrl, $action)) {
                $ctrl->$action(array_slice($urlExpl, 2));
                exit;
            }
        }
    }
}




