<?php

class Pessoa{
    const nome = "Bruno";

    public function exibirNome(){
        echo self::nome;
    }
}
class Bruno extends Pessoa{
    const nome = "Oliveira";

    public function exibirNome(){
        //para mostrar a constante da classe principal 
        //na classe herdeira usa-se parent
        echo parent::nome," ",self::nome;
    }
}

$nomes = new Bruno();
$nomes->exibirNome();