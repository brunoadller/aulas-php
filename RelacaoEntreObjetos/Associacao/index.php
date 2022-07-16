<?php

class Pedido{
    public $numero;
    public $cliente;

}
class Cliente {
    public $nome;
    public $endereco;

}

$cliente = new Cliente();
$cliente->nome = "Bruno Adller";
$cliente->endereco = "Rua Francisco Manoel da Silva 607";


$pedido = new Pedido();
$pedido->numero = "1234";
$pedido->cliente = $cliente;

$dados = array(
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco_ciente' => $pedido->cliente->endereco
);

var_dump($dados);