<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 25/03/2019
 * Time: 18:36
 */

class OffreManager extends Model
{
    public function getOffres() {
        return $this->getAll('OFFRE','Offre');
    }

    public function  addOffer($title,$text) {
        $req = $this->getBdd()->prepare('INSERT INTO OFFRE (TITLE, CONTENT) VALUES (:title, :text)');
        $req->bindValue(':title',$title);
        $req->bindValue(':text',$text);
        $req->execute();
    }
}