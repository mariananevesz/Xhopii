<?php
class Funcionario{
    protected $nome;
    protected $sobrenome;
    protected $cpf;
    protected $dataAdmissao;
    protected $telefone;
    protected $cargo;
    protected $salario;
    protected $email;
    protected $senha;
    protected $foto;

    public function __construct($nome, $sobrenome, $cpf, $dataAdmissao, $telefone, $cargo, $salario, $email, $senha, $foto) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->dataAdmissao = $dataAdmissao;
        $this->telefone = $telefone;
        $this->cargo = $cargo;
        $this->salario = $salario;
        $this->email = $email;
        $this->senha = $senha;
        $this->foto = $foto;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getDataAdmissao() {
        return $this->dataAdmissao;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getFoto() {
        return $this->foto;
    }
}

?>
