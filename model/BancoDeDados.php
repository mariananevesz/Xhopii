<?php
class BancoDeDados {

    private $host;
    private $login;
    private $senha;
    private $dataBase;

    public function __construct($host, $login, $senha, $dataBase) {
        $this->host = $host;
        $this->login = $login;
        $this->senha = $senha;
        $this->dataBase = $dataBase;
    }

    public function conectarBD() {
        $conexao = mysqli_connect(
            $this->host,
            $this->login,
            $this->senha,
            $this->dataBase
        );
        return $conexao;
    }

    public function inserirProduto($produto) {
        $conexao = $this->conectarBD();
        $nome = $produto->getNome();
        $fabricante = $produto->getFabricante();
        $descricao = $produto->getDescricao();
        $valor = $produto->getValor();
        $quantidade = $produto->getQuantidade();
        $sql = "INSERT INTO produto (nome, fabricante, descricao, valor, quantidade)
                VALUES ('$nome', '$fabricante', '$descricao', '$valor', '$quantidade')";
        mysqli_query($conexao, $sql);
    }

    public function retornarProdutos() {
        $conexao = $this->conectarBD();
        $sql = "SELECT * FROM produto";
        $resultado = mysqli_query($conexao, $sql);
        return $resultado;
    }
}

?>