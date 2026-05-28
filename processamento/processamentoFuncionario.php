<?php

require_once "../model/Funcionario.php";
require_once "../model/BancoDeDados.php";
require_once "../controller/Controlador.php";
require_once "uploadFoto.php";

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$cpf = $_POST["cpf"];
$dataAdmissao = $_POST["dataAdmissao"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cargo = $_POST["cargo"];
$salario = $_POST["salario"];
$foto = salvarFoto("img/funcionarios/", "funcionario", "img/funcionario.png");

$funcionario = new Funcionario($nome, $sobrenome, $cpf, $dataAdmissao, $telefone, $cargo, $salario, $email, $senha, $foto);
$controlador = new Controlador();
$controlador->cadastrarFuncionario($funcionario);

header("Location: ../view/cadastrarFuncionario.php");
?>
