<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 11/03/2019
 * Time: 16:16
 */

class viewLogin extends ViewG
{
    public function displayLogin() {
        
        echo '<h1 class="text-center"> Connexion </h1>
                <div align="center">
                    <form method="post" action="" id="loginform" name="loginform">
                        <br/>
                        <label for="user_email">Adresse email</label>
                        <input type="email" class="form-control text-center modal-sm" id="user_email" name="email" required="" autofocus="">
                        <label for="user_pass">Mot de passe </label>
                        <input type="password" id="inputPassword" class="form-control text-center modal-sm" name="pwd" required="">
                        <br/>
                        <button class="btn btn-lg btn-primary btn-block modal-sm" type="submit"> Se connecter </button>
                    </form>
                
                    Vous n\'avez pas de compte ?
                    <a href="/register"> Inscription <a/>
                </div>
';
    }
}