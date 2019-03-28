<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 24/03/2019
 * Time: 17:58
 */

class viewCreateOffer extends ViewG
{
    public function displayCreationOffer() {
        echo '
        <div align="center">
            <form method="post"> 
                <label> Catégorie * </label>
                <select class="form-row align-items-center" id="categorie" required="">
                  <option value="">Choisissez une catégorie</option>
                  <option>Emploi</option>
                  <option>Véhicules</option>
                  <option>Immobilier</option>
                  <option>Vacances</option>
                  <option>Multimédia</option>
                  <option>Maison</option>
                  <option>Loisirs</option>
                  <option>Matériel professionnel</option>
                  <option>Services</option>.
                  <option>Autres</option>
                </select>
                <br/>
                <br/>
                <div> Type d\'annonce *
                    <br/>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" required="">
                      <label class="form-check-label" for="inlineRadio1"> Offres </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2" required="">
                      <label class="form-check-label" for="inlineRadio2"> Demandes </label>
                    </div>
                </div>
                <br/>
                <label> Titre d\'annonce </label>
                <input type="text" class= "form-control text-center modal-sm" id= "title" name= "title">
                <br/>
                <label> Texte de l\'annonce </label>
                <input type="text" class= "form-control text-center modal-sm" id= "text" name= "text">
            </form>
        </div>';
    }
}