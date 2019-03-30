<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 29/03/2019
 * Time: 16:41
 */

include_once '../../../models/Model.php';
require_once "../../../models/OffreManager.php";

$models = new OffreManager();

$var[] = $models->getOffres();

echo "merde";

foreach ($var as $offre) {
    echo $offre->title();
}