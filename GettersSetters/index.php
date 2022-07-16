<?php

class Login {
    private $email;
    private $senha;

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function Logar(){
        if($this->email == "teste" and $this->senha == "123456"){
            echo "Logado com sucesso";
        }else{
            echo "Dados invalidos";
        }
    }
}

$logar = new Login();

$logar->setEmail("teste()/@teste.com");
$logar->setSenha("123456");
$logar->Logar();

echo"<br>";
echo"<br>";
echo $logar->getEmail();
ECHO"<br>";
echo $logar->getSenha();