<?php
/**
 * Created by PhpStorm.
 * User: r17000292
 * Date: 08/03/19
 * Time: 14:43
 */

abstract class ViewG
{

    public function startpage($title) {

        session_start();

        echo '
<!DOCTYPE html>
<html lang="fr">

    <head>
        <script src="Javascript/jquery-3.3.1.min.js"></script>
        <script src="Javascript/script.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>' . PHP_EOL . $title . '</title>
        <link rel="icon" type="image/png" href="../VIEW/Images/favicon.png" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../VIEW/CSS/style.css">
    </head>
    <body>
    <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top orange">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/Accueil">Lebonrecoin</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Rechercher</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Message</a>
                    </li>';
        if (isset($_SESSION['email'])){
            echo '
                    <li class="nav-item active" >
                        <a class="nav-link" href = "/CONTROLLER/disconected.php" > Se déconnecter </a>
                    </li > ';
        }
        else {
            echo '<li class="nav-item active" >
                        <a class="nav-link" href = "/login" > Se connecter </a>
                    </li > ';
        }

        echo '
                </ul>
            </div>
        </nav>
        </header>
        <br/>
        <br/>
        <br/>
        ';
    }

    public function endpage() {
        echo '
    </body>

</html>';
    }
}