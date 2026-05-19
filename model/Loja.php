<?php
class Loja{
    protected $nome;
    protected $cnpj;
    protected $endereco;
    protected $telefone;
    protected $email;

    public function __construct($nome, $cnpj, $endereco, $telefone, $email) {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEmail() {
        return $this->email;
    }
}

?>