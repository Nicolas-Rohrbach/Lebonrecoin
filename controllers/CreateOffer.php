<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 24/03/2019
 * Time: 18:07
 */

include_once "views/ViewCreateOffer.php";

class CreateOffer implements ControllerG
{
    public function display($data = [])
    {
        $view = new viewCreateOffer();
        $view->startpage("Déposer une annonce");
        $view->displayCreationOffer();
        $view->endpage();

    }
}