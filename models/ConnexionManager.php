<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 27/03/2019
 * Time: 16:08
 */

class ConnexionManager extends Model
{
    public function getConnexion($login,$pwd) {
    return $this->getNumberOfTuple($login,$pwd);
    }

    public function  getLogin($login,$pwd) {
        $var = 0;
        $req = $this->getBdd()->prepare('SELECT LOGIN FROM USER WHERE LOGIN =:login AND PASSWORD =:pass');
        $req->bindValue(':login',$login);
        $req->bindValue(':pass',$pwd);
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var = $data;
        }
        return $var;
        $req->closeCursor();
    }
}