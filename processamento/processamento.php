<?php

require_once "../model/Produto.php";
require_once "../model/BancoDeDados.php";
require_once "../controller/Controlador.php";

$nome = $_POST["nome"];
$fabricante = $_POST["fabricante"];
$descricao = $_POST["descricao"];
$valor = $_POST["valor"];
$quantidade = $_POST["quantidade"];

$produto = new Produto($nome, $fabricante, $descricao, $valor, $quantidade);
$controlador = new Controlador();
$controlador->cadastrarProduto($produto);

header("Location: ../view/cadastrarProduto.php");

?>