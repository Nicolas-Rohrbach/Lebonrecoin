<?php
/**
 * Created by PhpStorm.
 * User: r17000292
 * Date: 08/03/19
 * Time: 14:40
 */

class BD
{
    function connexionDB() {
        return $link = new PDO('mysql:host=mysql-lebonrecoin.alwaysdata.net; dbname=lebonrecoin_bd', '178440', 'azerty')
            or die('Pb de connexion au serveur: ' . mysqli_connect_error());
    }
}