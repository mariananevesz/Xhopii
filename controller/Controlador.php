<?php
class Controlador {
    private $bancoDeDados;

    public function __construct() {
        $this->bancoDeDados = new BancoDeDados("localhost", "root", "", "xhopii");
    }

    public function cadastrarProduto($produto) {
        $this->bancoDeDados->inserirProduto($produto);
    }

    public function listarProdutos() {
      return $this->bancoDeDados->retornarProdutos();
    }
}
?>