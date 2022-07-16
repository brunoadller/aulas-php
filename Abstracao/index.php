<?php

abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldos($s){
        $this->saldo = $s;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}

class Itau extends Banco{

    public function Sacar($s){
        $this->saldo -= $s;
        
        if($this->saldo == 0){
            echo "<hr> Sacou: ".$s;
            echo "<br>Sua conta esta vazia";
        }
    }
    public function Depositar($d){
        $this->saldo += $d;
        echo "<hr> Depositou: ".$d;
    }
}
class Bradeco extends Banco{

    public function Sacar($s){
        $this->salado += $s;
    }
    public function Depositar($d){
        $this->saldo -= $d;
    }
}

$itau = new Itau();
$itau->setSaldos(1000);
echo "<hr>Saldo: ".$itau->getSaldo();
$itau->Sacar(250);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->Depositar(2000);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->sacar(2750);


