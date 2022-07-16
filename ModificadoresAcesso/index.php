<?php

/*public - fará com que não haja ocutação nenhuma, toda propriedade ou método declarado com public serão acessiveis 
por todos ue quiserem acessá-los

protected - visibilidade protected faz com que todos os herdeiros vejam as propriedades ou métodos
protegidos como se fossem publicos

private - ao contrário do public, esse modificador faz com que qualquer método ou propriedade seja visível só
e somente só pela classe que a declarou
*/
class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    protected function Andar(){
        echo "<br>Andou";
    }
    public function Parar(){
        echo "<br>Parou";
    }
    
   
}
class Carro extends Veiculo{
    public function ligarParaBrisa(){
        echo "Limpador de parabrisa ligado!";
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function mostrarAcao(){
        $this->Andar();
    }

}

$carro = new Carro();
$carro->mostrarAcao();

