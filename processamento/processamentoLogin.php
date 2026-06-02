<?php

session_start();

require_once "../model/BancoDeDados.php";
require_once "../controller/Controlador.php";

$email = $_POST["email"] ?? "";
$senha = $_POST["senha"] ?? "";

if (empty($email) || empty($senha)) {
    header("Location: ../view/login.php?erro=1");
    exit;
}

$controlador = new Controlador();
$funcionario = $controlador->validarLogin($email, $senha);

if ($funcionario) {
    $_SESSION["funcionario_id"] = $funcionario["id"];
    $_SESSION["funcionario_nome"] = $funcionario["nome"];
    $_SESSION["funcionario_email"] = $funcionario["email"];
    header("Location: ../view/home.php");
    exit;
}

header("Location: ../view/login.php?erro=1");
exit;

?>
