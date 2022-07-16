<?php

    class Pessoa {
        public $nome;
        public $idade;
        
        public function Falar(){
            echo $this->nome." de ".$this->idade." anos "." Acabou de falar!";
        }
    }

    $rodrigo = new Pessoa();
    $rodrigo->nome = "Rodrigo Santos";
    $rodrigo->idade = 25;
    $rodrigo->Falar();

    class Calculadora {
        public $val1;
        public $val2;

        public function Somar(){
            return $this->val1 + $this->val2;
        }
        public function Subtrair(){
            return $this->val1 - $this->val2;
        }
        public function Dividir(){
            return $this->val1 / $this->val2;
        }
        public function Multiplicar(){
            return $this->val1 * $this->val2;
        }
    }

    echo "<br><br>#######Calculadora#######<br><br>";
   
    $calculando = new Calculadora();
    $calculando->val1 = 10;
    $calculando->val2 = 5;



    echo "<br>Resultado da soma entre $calculando->val1 e $calculando->val2 = ".$calculando->Somar();
    echo "<br>Resultado da subtracao entre $calculando->val1 e $calculando->val2 = ".$calculando->Subtrair();
    echo "<br>Resultado da divisao entre $calculando->val1 e $calculando->val2 = ".$calculando->Dividir();
    echo "<br>Resultado da multiplicacao entre $calculando->val1 e $calculando->val2 = ".$calculando->Multiplicar();

