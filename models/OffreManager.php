<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 25/03/2019
 * Time: 18:36
 */

class OffreManager extends Model
{

    public function  addOffer($title,$text,$typeOff,$categorie,$login) {
        $req = $this->getBdd()->prepare('INSERT INTO OFFRE (TITLE, CONTENT, TYPE, CATEGORIE, LOGIN) VALUES (:title, :text, :type, :categorie, :login)');
        $req->bindValue(':title',$title);
        $req->bindValue(':text',$text);
        $req->bindValue(':type',$typeOff);
        $req->bindValue(':categorie',$categorie);
        $req->bindValue(':login',$login);
        //$req->bindValue(':image',$image);
        $req->execute();
    }

    public function getMyTuple($login) {
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM OFFRE WHERE LOGIN = :login');
        $req->bindValue(':login', $login);
        $req->execute();
        while ($data = $req->fetch()) {
            $var[] = $data;
        }
        return $var;
        $req->closeCursor();
    }

    public function getMyTupleID($id) {
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM OFFRE WHERE ID = :id');
        $req->bindValue(':id', $id);
        $req->execute();
        while ($data = $req->fetch()) {
            $var[] = $data;
        }
        return $var;
        $req->closeCursor();
    }

    public function deleteTuple($id) {

        $req = $this->getBdd()->prepare('DELETE FROM OFFRE WHERE ID = :id');
        $req->bindValue(':id', $id);
        $req->execute();

    }
}