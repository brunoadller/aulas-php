<?php
require 'Classes/index.php';
require 'Models/index.php';

use models\Produto as productModel;
use classes\Produto as productClass;


$produto = new productModel();
$produto->mostrarDetalhes();

echo "<br/>";

$produto2 = new productClass();
$produto2->mostrarDetalhes();