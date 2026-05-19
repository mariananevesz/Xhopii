<?php
class Cupom{
    protected $codigo;
    protected $tipoDesconto;
    protected $valorDesconto;
    protected $dataValidade;
    protected $quantidadeUsos;

    public function __construct($codigo, $tipoDesconto, $valorDesconto, $dataValidade, $quantidadeUsos) {
        $this->codigo = $codigo;
        $this->tipoDesconto = $tipoDesconto;
        $this->valorDesconto = $valorDesconto;
        $this->dataValidade = $dataValidade;
        $this->quantidadeUsos = $quantidadeUsos;
    }
    
    public function getCodigo() {
        return $this->codigo;
    }

    public function getTipoDesconto() {
        return $this->tipoDesconto;
    }

    public function getValorDesconto() {
        return $this->valorDesconto;
    }

    public function getDataValidade() {
        return $this->dataValidade;
    }

    public function getQuantidadeUsos() {
        return $this->quantidadeUsos;
    }
}

?>