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
}