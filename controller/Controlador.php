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

    public function cadastrarCliente($cliente){
        $this->bancoDeDados->inserirCliente($cliente);
    }

    public function listarClientes() {
        return $this->bancoDeDados->retornarClientes();
    }

    public function cadastrarFuncionario($funcionario){
        $this->bancoDeDados->inserirFuncionario($funcionario);
    }

    public function listarFuncionarios() {
        return $this->bancoDeDados->retornarFuncionarios();
    }

    public function cadastrarLoja($loja){
        $this->bancoDeDados->cadastrarLoja($loja);
    }

    public function listarLojas() {
        return $this->bancoDeDados->retornarLoja();
    }
}
?>