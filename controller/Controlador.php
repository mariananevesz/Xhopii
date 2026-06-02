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

    public function buscarProdutoPorId($id) {
        return $this->bancoDeDados->retornarProdutoPorId($id);
    }

    public function editarProduto($id, $produto) {
        $this->bancoDeDados->atualizarProduto($id, $produto);
    }

    public function excluirProduto($id) {
        $this->bancoDeDados->excluirProduto($id);
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

    public function cadastrarCupom($cupom){
        $this->bancoDeDados->cadastrarCupom($cupom);
    }

    public function listarCupons() {
        return $this->bancoDeDados->retornarCupons();
    }

    public function validarLogin($email, $senha) {
        return $this->bancoDeDados->buscarCliente($email, $senha);
    }
}
?>
