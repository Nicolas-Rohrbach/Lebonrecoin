<?php
/**
 * Created by PhpStorm.
 * User: r17000292
 * Date: 08/03/19
 * Time: 14:43
 */

abstract class ViewG
{

    /**
     * ViewG constructor.
     */
    public function __construct()
    {
    }

    public function startpage() {

        session_start();

        echo '
<!DOCTYPE html>
<html lang="fr">

    <head>
        <script src="../jquery-3.3.1.min.js"></script>
        <script src="JS/script.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>lebonrecoin</title>
        <link rel="icon" type="image/png" href="../VIEW/Images/favicon.png" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../VIEW/CSS/style.css">
    ';
    }

    public function buildheader() {
        echo '</head>
    <body>
    <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top orange">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Lebonrecoin</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Rechercher</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Message</a>
                    </li>
                    
                    ';

        if (isset($_SESSION['email'])){
            echo '
                    <li class="nav-item active" >
                        <a class="nav-link" href = "../disconected.php" > Se déconnecter </a>
                    </li > ';
        }
        else {
            echo '<li class="nav-item active" >
                        <a class="nav-link" href = "/login.php" > Se connecter </a>
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

    public function displayRegister() {
        echo '<h1 class="text-center"> Créez un compte </h1>

    <br/>

    <div align="center">
         <div class="">
            <form method="post" action="" id="loginform" name="loginform">

                Type de compte *:
                <label>Particulier
                <input type="radio" name="radio1" value="particulier" required="">
                </label>
                <label>Professionel
                <input type="radio" name="radio1" value="pro" required="">
                </label>

                <br/>

                <label for="user_login">Pseudo *</label>
                <input type="text" class="form-control text-center modal-sm" id="user_login" name="log" required="" autofocus="">

                <label for="user_pass" >Mot de passe *</label>
                <input type="password" id="user_pass" class="form-control text-center modal-sm" name="pwd" required="">

                <label for="user_email" >Email *</label>
                <input type="email" id="user_pass" class="form-control text-center modal-sm" name="email" required="">

                <br/>
                <button class="btn btn-lg btn-primary btn-block modal-sm" type="submit"> Enregistrer </button>
                <input type="hidden" value="http://lebonrecoin.alwaysdata.net/" name="redirect_to">

            </form>
         </div>
    </div>';
    }

    public function endpage() {
        echo '
    </body>

</html>';
    }
}