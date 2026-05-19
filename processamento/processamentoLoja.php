<?php
require_once "../model/Loja.php";
require_once "../model/BancoDeDados.php";
require_once "../controller/Controlador.php";

$nome = $_POST["nome"];
$cnpj = $_POST["cnpj"];
$endereco = $_POST["endereco"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];

$loja = new Loja($nome, $cnpj, $endereco, $telefone, $email);
$controlador = new Controlador();
$controlador->cadastrarLoja($loja);

header("Location: ../view/cadastrarLoja.php");
?>
