<?php

function salvarFoto($pasta, $prefixo, $fotoPadrao) {
    if (!isset($_FILES["foto"]) || $_FILES["foto"]["error"] !== UPLOAD_ERR_OK) {
        return $fotoPadrao;
    }

    $extensao = strtolower(pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION));
    $extensoesPermitidas = ["jpg", "jpeg", "png", "webp"];

    if (!in_array($extensao, $extensoesPermitidas)) {
        return $fotoPadrao;
    }

    $pastaUpload = "../" . $pasta;

    if (!is_dir($pastaUpload)) {
        mkdir($pastaUpload, 0777, true);
    }

    $nomeArquivo = $prefixo . "_" . uniqid() . "." . $extensao;
    $caminhoBanco = $pasta . $nomeArquivo;
    $caminhoUpload = "../" . $caminhoBanco;

    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $caminhoUpload)) {
        return $caminhoBanco;
    }

    return $fotoPadrao;
}

?>
