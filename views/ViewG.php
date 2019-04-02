<?php
/**
 * Created by PhpStorm.
 * User: r17000292
 * Date: 08/03/19
 * Time: 14:43
 */

abstract class ViewG
{

    public function startpage($title)
    {

        session_start();

        echo '
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>' . PHP_EOL . $title . '</title>
        <link rel="icon" type="image/png" href="views/images/favicon.png" />
        <link rel="stylesheet" href="/views/css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="views/javascript/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="views/javascript/jquery-3.3.1.min.js"></script>
        <script src="views/javascript/jquery-ui.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="views/javascript/viewNavbar.js"></script>
        <script src="views/javascript/views.js"></script>
    </head>
    <body>';
    }


    public function endpage() {
        echo '
    <script src="views/javascript/viewHome.js"></script>
    <script src="views/javascript/viewOffer.js"></script>
    <script src="views/javascript/viewAccount.js"></script>
    <script src="views/javascript/viewOffers.js"></script>
    <script src="views/javascript/formCreateOffer.js"></script>
    <script src="views/javascript/formConnexion.js"></script>
    <script src="views/javascript/formRegister.js"></script>
    </body>

</html>';
    }

    public function  br() {
        echo '<br/>';
    }
}