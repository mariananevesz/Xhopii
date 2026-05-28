<?php
class Cliente {
    protected $nome;
    protected $sobrenome;
    protected $cpf;
    protected $dataNascimento;
    protected $telefone;
    protected $email;
    protected $senha;
    protected $foto;

    public function __construct($nome, $sobrenome, $cpf, $dataNascimento, $telefone, $email, $senha, $foto) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
        $this->telefone = $telefone;
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

    public function getDataNascimento() {
        return $this->dataNascimento;
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
