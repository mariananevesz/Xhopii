<?php

require_once "../model/Cupom.php";
require_once "../model/BancoDeDados.php";
require_once "../controller/Controlador.php";

$codigo = $_POST["codigo"];
$tipoDesconto = $_POST["tipoDesconto"];
$valorDesconto = $_POST["valorDesconto"];
$dataValidade = $_POST["dataValidade"];
$quantidadeUsos = $_POST["quantidadeUsos"];

$cupom = new Cupom($codigo, $tipoDesconto, $valorDesconto, $dataValidade, $quantidadeUsos);
$controlador = new Controlador();
$controlador->cadastrarCupom($cupom);

header("Location: ../view/cadastrarCupons.php");
?>
