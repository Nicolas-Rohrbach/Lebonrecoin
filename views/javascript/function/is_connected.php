<?php
/**
 * Created by PhpStorm.
 * User: r17000292
 * Date: 27/02/19
 * Time: 09:23
 */

session_start();

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

echo json_encode(isset($_SESSION['login']));