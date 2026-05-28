<?php

require_once "../model/Cupom.php";
require_once "../model/BancoDeDados.php";
require_once "../controller/Controlador.php";
require_once "uploadFoto.php";

$codigo = $_POST["codigo"];
$tipoDesconto = $_POST["tipoDesconto"];
$valorDesconto = $_POST["valorDesconto"];
$dataValidade = $_POST["dataValidade"];
$quantidadeUsos = $_POST["quantidadeUsos"];
$foto = salvarFoto("img/cupons/", "cupom", "img/cupom.png");

$cupom = new Cupom($codigo, $tipoDesconto, $valorDesconto, $dataValidade, $quantidadeUsos, $foto);
$controlador = new Controlador();
$controlador->cadastrarCupom($cupom);

header("Location: ../view/cadastrarCupons.php");
?>
