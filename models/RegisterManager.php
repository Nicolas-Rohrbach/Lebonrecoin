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

    public function add($email, $login, $pwd) {
        $this->addUser($email, $login, $pwd);
    }
}