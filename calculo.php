<?php

require_once('config.php');

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$operacao = $_POST['operacao'];

$calculadora = new Calculadora();

$calculadora->setN1($n1);
$calculadora->setN2($n2);

switch($operacao) {
  case "somar":
    $calculadora->somar();
    break;

  case "subtrair":
    $calculadora->subtrair();
    break;

  case "dividir":
    $calculadora->dividir();
    break;

  case "multiplicar":
    $calculadora->multiplicar();
    break;
}

header("Location:index.php?total=".$calculadora->getTotal());
?>