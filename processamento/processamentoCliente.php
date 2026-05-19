<?php

require_once "../model/Cliente.php";
require_once "../model/BancoDeDados.php";
require_once "../controller/Controlador.php";

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$cpf = $_POST["cpf"];
$dataNascimento = $_POST["dataNascimento"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$cliente = new Cliente($nome, $sobrenome, $cpf, $dataNascimento, $telefone, $email, $senha);
$controlador = new Controlador();
$controlador->cadastrarCliente($cliente);

header("Location: ../view/cadastrarCliente.php");
?>