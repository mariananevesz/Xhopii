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

    public function inserirCliente($cliente){
        $conexao = $this->conectarBD();
        $nome = $cliente->getNome();
        $sobrenome = $cliente->getSobrenome();
        $cpf = $cliente->getCpf();
        $dataNascimento = $cliente->getDataNascimento();
        $telefone = $cliente->getTelefone();
        $email = $cliente->getEmail();
        $senha = $cliente->getSenha();
        $sql = "INSERT INTO cliente (nome, sobrenome, cpf, dataNascimento, telefone, email, senha)
                VALUES ('$nome', '$sobrenome', '$cpf', '$dataNascimento', '$telefone', '$email', '$senha')";
        mysqli_query($conexao, $sql);
    }

    public function retornarClientes() {
        $conexao = $this->conectarBD();
        $sql = "SELECT * FROM cliente";
        $resultado = mysqli_query($conexao, $sql);
        return $resultado;
    }

    public function inserirFuncionario($funcionario){
        $conexao = $this->conectarBD();
        $nome = $funcionario->getNome();
        $sobrenome = $funcionario->getSobrenome();
        $cpf = $funcionario->getCpf();
        $dataAdmissao = $funcionario->getDataAdmissao();
        $telefone = $funcionario->getTelefone();
        $cargo = $funcionario->getCargo();
        $salario = $funcionario->getSalario();
        $email = $funcionario->getEmail();
        $senha = $funcionario->getSenha();
        $sql = "INSERT INTO funcionario (nome, sobrenome, cpf, dataAdmissao, telefone, cargo, salario, email, senha)
                VALUES ('$nome', '$sobrenome', '$cpf', '$dataAdmissao', '$telefone', '$cargo', '$salario', '$email', '$senha')";
        mysqli_query($conexao, $sql);
    }

    public function retornarFuncionarios() {
        $conexao = $this->conectarBD();
        $sql = "SELECT * FROM funcionario";
        $resultado = mysqli_query($conexao, $sql);
        return $resultado;
    }
}

?>