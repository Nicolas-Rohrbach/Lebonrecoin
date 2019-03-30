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

    public function  addOffer($title,$text,$typeOff,$categorie) {
        $req = $this->getBdd()->prepare('INSERT INTO OFFRE (TITLE, CONTENT, TYPE, CATEGORIE) VALUES (:title, :text, :type, :categorie)');
        $req->bindValue(':title',$title);
        $req->bindValue(':text',$text);
        $req->bindValue(':type',$typeOff);
        $req->bindValue(':categorie',$categorie);
        $req->execute();
    }
}