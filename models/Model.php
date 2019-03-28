<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 25/03/2019
 * Time: 18:10
 */

abstract class Model
{
    private static $bdd;

    private static function setBdd() {
        self::$bdd = new PDO('mysql:host=mysql-lebonrecoin.alwaysdata.net; dbname=lebonrecoin_bd', '178440', '1234');
        self::$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }

    protected function getBdd() {
        if (self:: $bdd == null)
            self::setBdd();
        return self::$bdd;
    }

    protected function getAll($table, $obj) {
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM '.$table.' ORDER BY id desc');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }

    protected function getNumberOfTuple($login, $pwd) {
        $var = 0;
        $req = $this->getBdd()->prepare('SELECT * FROM USER WHERE LOGIN =:login AND PASSWORD =:pass');
        $req->bindValue(':login',$login);
        $req->bindValue(':pass',$pwd);
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var = $var + 1;
        }
        return $var;
        $req->closeCursor();
    }

    protected function verifyNoDouble($email, $login) {
        $var = 0;
        $req = $this->getBdd()->prepare('SELECT * FROM USER WHERE EMAIL =:mail OR LOGIN =:login');
        $req->bindValue(':mail',$email);
        $req->bindValue(':login',$login);
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var = $var + 1;
        }
        if($var > 0) {
            return false;
        }
        else {
            return true;
        }
        $req->closeCursor();
    }
}