<?php 
/*Herança é um recurso que permite que classes compartilhem atributos e metodos afim de 
reaproveitar codigos ou comportamentos generalizados*/
class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }
    public function getAno(){
        return $this->ano;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }
    public function Andar(){
        echo '<br>Andou';
    }
    public function Parar(){
        echo "<br>Parou";
    }
}

class Carro extends Veiculo {

    public function __construct($modelo, $cor, $ano){
        $this->setModelo($modelo);
        $this->setCor($cor);
        $this->setAno($ano);
    }
   
    public function ligarLimpador(){
        echo '<br>Limpando parabrisa';
    }
    public function AcenderFarol(){
        echo "<br>Farol Ligado";
    }
} 

class Moto extends Veiculo{

    public function __construct($modelo, $cor, $ano){
        $this->setModelo($modelo);
        $this->setCor($cor);
        $this->setAno($ano);

    }
    
    public function darGrau(){
        echo "<br>Dando grau";
    }
}

$carro = new Carro("Mustang", "Vermelho", "2022");

echo "<br>".$carro->getModelo();
echo "<br>".$carro->getCor();
echo "<br>".$carro->getAno();


$moto = new Moto("Yamaha", "Preta", "2017");

echo "<br>".$moto->getModelo();
echo "<br>".$moto->getCor();
echo "<br".$moto->getAno();


