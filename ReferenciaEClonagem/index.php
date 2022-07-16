<?php

class Pessoa{
    public $idade;

    public function __clone(){
        echo "Clonagem de objetos ";
    }
}
$pessoa = new Pessoa();
$pessoa->idade = 25;

//pessoa 2 é um objeto que referencia pessoa
$pessoa2 = clone $pessoa;
$pessoa2->idade = 35;

echo $pessoa2->idade;