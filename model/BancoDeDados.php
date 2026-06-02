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
        $foto = $produto->getFoto();
        $sql = "INSERT INTO produto (nome, fabricante, descricao, valor, quantidade, foto)
                VALUES ('$nome', '$fabricante', '$descricao', '$valor', '$quantidade', '$foto')";
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
        $foto = $cliente->getFoto();
        $sql = "INSERT INTO cliente (nome, sobrenome, cpf, dataNascimento, telefone, email, senha, foto)
                VALUES ('$nome', '$sobrenome', '$cpf', '$dataNascimento', '$telefone', '$email', '$senha', '$foto')";
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
        $foto = $funcionario->getFoto();
        $sql = "INSERT INTO funcionario (nome, sobrenome, cpf, dataAdmissao, telefone, cargo, salario, email, senha, foto)
                VALUES ('$nome', '$sobrenome', '$cpf', '$dataAdmissao', '$telefone', '$cargo', '$salario', '$email', '$senha', '$foto')";
        mysqli_query($conexao, $sql);
    }

    public function retornarFuncionarios() {
        $conexao = $this->conectarBD();
        $sql = "SELECT * FROM funcionario";
        $resultado = mysqli_query($conexao, $sql);
        return $resultado;
    }

    public function cadastrarLoja($loja) {
        $conexao = $this->conectarBD();
        $nome = $loja->getNome();
        $cnpj = $loja->getCnpj();
        $endereco = $loja->getEndereco();
        $telefone = $loja->getTelefone();
        $email = $loja->getEmail();
        $sql = "INSERT INTO loja (nome, cnpj, endereco, telefone, email)
                VALUES ('$nome', '$cnpj', '$endereco', '$telefone', '$email')";
        mysqli_query($conexao, $sql);
    }

    public function retornarLoja() {
        $conexao = $this->conectarBD();
        $sql = "SELECT * FROM loja";
        $resultado = mysqli_query($conexao, $sql);
        return $resultado;
    }

    public function cadastrarCupom($cupom) {
        $conexao = $this->conectarBD();
        $codigo = $cupom->getCodigo();
        $tipoDesconto = $cupom->getTipoDesconto();
        $valorDesconto = $cupom->getValorDesconto();
        $dataValidade = $cupom->getDataValidade();
        $quantidadeUsos = $cupom->getQuantidadeUsos();
        $foto = $cupom->getFoto();
        $sql = "INSERT INTO cupom (codigo, tipoDesconto, valorDesconto, dataValidade, quantidadeUsos, foto)
                VALUES ('$codigo', '$tipoDesconto', '$valorDesconto', '$dataValidade', '$quantidadeUsos', '$foto')";
        mysqli_query($conexao, $sql);
    }

    public function retornarCupons() {
        $conexao = $this->conectarBD();
        $sql = "SELECT * FROM cupom";
        $resultado = mysqli_query($conexao, $sql);
        return $resultado;
    }

    public function buscarCliente($email, $senha) {
        $conexao = $this->conectarBD();
        $sql = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
        $resultado = mysqli_query($conexao, $sql);
        $cliente = mysqli_fetch_assoc($resultado);
        if ($cliente) {
            return $cliente;
        }
        return false;
    }
    
    public function retornarProdutoPorId($id) {
        $conexao = $this->conectarBD();
        $sql = "SELECT * FROM produto WHERE id = ? LIMIT 1";
        $comando = mysqli_prepare($conexao, $sql);
        mysqli_stmt_bind_param($comando, "i", $id);
        mysqli_stmt_execute($comando);
        $resultado = mysqli_stmt_get_result($comando);
        return mysqli_fetch_assoc($resultado);
    }

    public function atualizarProduto($id, $produto) {
        $conexao = $this->conectarBD();
        $nome = $produto->getNome();
        $fabricante = $produto->getFabricante();
        $descricao = $produto->getDescricao();
        $valor = $produto->getValor();
        $quantidade = $produto->getQuantidade();
        $foto = $produto->getFoto();
        $sql = "UPDATE produto
                SET nome = ?, fabricante = ?, descricao = ?, valor = ?, quantidade = ?, foto = ?
                WHERE id = ?";
        $comando = mysqli_prepare($conexao, $sql);
        mysqli_stmt_bind_param($comando, "sssdisi", $nome, $fabricante, $descricao, $valor, $quantidade, $foto, $id);
        mysqli_stmt_execute($comando);
    }

    public function excluirProduto($id) {
        $conexao = $this->conectarBD();
        $sql = "DELETE FROM produto WHERE id = ?";
        $comando = mysqli_prepare($conexao, $sql);
        mysqli_stmt_bind_param($comando, "i", $id);
        mysqli_stmt_execute($comando);
    }
}

?>
