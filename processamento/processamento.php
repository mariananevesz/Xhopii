<?php

session_start();

require_once "../model/Produto.php";
require_once "../model/BancoDeDados.php";
require_once "../controller/Controlador.php";
require_once "uploadFoto.php";

$controlador = new Controlador();
$acao = $_POST["acao"] ?? $_GET["acao"] ?? "";

if ($acao == "editarProduto") {
    $idProduto = (int) $_POST["idProduto"];
    $nome = $_POST["nome"];
    $fabricante = $_POST["fabricante"];
    $descricao = $_POST["descricao"];
    $valor = $_POST["valor"];
    $quantidade = $_POST["quantidade"];
    $fotoAtual = $_POST["foto_atual"] ?? "img/produto1.png";
    $foto = salvarFoto("img/produtos/", "produto", $fotoAtual);

    $produto = new Produto($nome, $fabricante, $descricao, $valor, $quantidade, $foto);
    $controlador->editarProduto($idProduto, $produto);

    header("Location: ../view/verProdutos.php");
    exit;
}

if ($acao == "excluirProduto") {
    $idProduto = (int) $_GET["idProduto"];
    $controlador->excluirProduto($idProduto);

    header("Location: ../view/verProdutos.php");
    exit;
}

header("Location: ../view/verProdutos.php");
exit;

?>
