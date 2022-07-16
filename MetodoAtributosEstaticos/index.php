<?php

class Login{
    public static $user;

    public static function verificaLogin(){
        echo "o usuario ",self::$user," esta logado";
    }
    public function sairSistema(){
        echo "usuario deslogou";
    }
}

$login = new Login();
$login->sairSistema();