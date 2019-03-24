<?php
/**
 * Created by PhpStorm.
 * User: r17000292
 * Date: 27/02/19
 * Time: 09:23
 */

$reponse = new stdClass();

if(isset($_SESSION['email'])) {
    $reponse = $_SESSION['email'];
}
else {
    $reponse = false;
}


header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

echo json_encode($reponse);