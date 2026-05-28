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
$cliente = $controlador->validarLogin($email, $senha);

if ($cliente) {
    $_SESSION["cliente_id"] = $cliente["id"];
    $_SESSION["cliente_nome"] = $cliente["nome"];
    header("Location: ../view/home.php");
    exit;
}

header("Location: ../view/login.php?erro=1");
exit;

?>
