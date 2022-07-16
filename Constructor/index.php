<?php

class Login{
    private $email;
    private $senha;
    private $nome;


    public function __construct($email, $senha, $nome){
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->nome = $nome;    
    }
    public function getNome(){
        return $this->nome;
    }
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
    public function setSenha($s){
        $this->senha = $s;
    }
    public function Logar(){
        if($this->email == "teste@teste.gmail.com" and $this.senha == "123456"){
            echo "Logado com sucesso";
        }else{
            echo "Dados invalidos";
        }
    }
}

$logar = new Login("teste@gmail.com", "1234567", 'Wilson');
$logar->Logar();
echo "<br>".$logar->getEmail();
echo "<br>".$logar->getNome();