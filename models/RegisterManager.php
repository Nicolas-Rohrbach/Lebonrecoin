<?php
/**
 * Created by PhpStorm.
 * User: Rohrb
 * Date: 27/03/2019
 * Time: 17:05
 */

class RegisterManager extends Model
{
    public function checkNoDouble ($email, $login) {
        return $this->verifyNoDouble($email, $login);
    }

    public function addUser($email, $login, $type, $pwd) {
        $req = $this->getBdd()->prepare("INSERT INTO USER (LOGIN, PASSWORD, EMAIL, TYPE) VALUES (:email, :pwd, :email, :type)");
        $req->bindParam(':email', $email);
        $req->bindParam(':login', $login);
        $req->bindParam(':type', $type);
        $req->bindParam(':pwd', $pwd);

        $req->execute();
    }
}