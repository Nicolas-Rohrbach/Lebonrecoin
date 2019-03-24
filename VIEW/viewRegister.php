<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 23/03/2019
 * Time: 20:07
 */

class viewRegister extends ViewG
{
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
}