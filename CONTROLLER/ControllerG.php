<?php
/**
 * Created by PhpStorm.
 * User: r17000292
 * Date: 08/03/19
 * Time: 14:48
 */

include "../VIEW/ViewG.php";
include "../MODEL/BD.php";

class ControllerG
{
    private $bd;
    private $viewG;

    /**
     * ControllerG constructor.
     */
    public function __construct()
    {
        $this->bd = new BD();
        $this->viewG = new ViewG();
    }

    public function displayIndex() {
        $this->viewG->startpage();
        $this->viewG->buildheader();
        $this->viewG->endpage();
    }
}