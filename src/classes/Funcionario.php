<?php

require_once __DIR__ . '/Pessoa.php';

class Funcionario extends Pessoa {

    private $funcao;
    private $salario;
    private $dataAdmissao;
    private $dataDemissao;

    public function getFuncao() {
        return $this->funcao;
    }

    public function setFuncao($funcao) {
        $this->funcao = $funcao;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function getDataAdmissao() {
        return $this->dataAdmissao;
    }

    public function setDataAdmissao($dataAdmissao) {
        $this->dataAdmissao = $dataAdmissao;
    }

    public function getDataDemissao() {
        return $this->dataDemissao;
    }

    public function setDataDemissao($dataDemissao) {
        $this->dataDemissao = $dataDemissao;
    }
    
}