<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 31/03/2019
 * Time: 17:27
 */

include_once '../../../models/Model.php';
require_once "../../../models/OffreManager.php";

$model = new OffreManager();

$id = $_POST['myParams'];

$model->deleteTuple($id);

echo($id);