<?php
class Pessoa{
    public function atribuiNme($nome){
        return "O nome da pessoa é ".$nome;
    }
}

class Exibe{
    public $pessoa;
    public $nome;

    function __construct($nome){
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }
    public function exibeNome(){
        echo $this->pessoa->atribuiNme($this->nome);
    }
}

$exibe = new Exibe("Jose");
$exibe->exibeNome();