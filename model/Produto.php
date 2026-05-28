<?php
class Produto {
    protected $nome;
    protected $fabricante;
    protected $descricao;
    protected $valor;
    protected $quantidade;
    protected $foto;

    public function __construct($nome, $fabricante, $descricao, $valor, $quantidade, $foto) {
        $this->nome = $nome;
        $this->fabricante = $fabricante;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
        $this->foto = $foto;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getFabricante() {
        return $this->fabricante;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getFoto() {
        return $this->foto;
    }
}

?>
