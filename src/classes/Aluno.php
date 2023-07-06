<?php

require_once __DIR__ . '/Pessoa.php';

class Aluno extends Pessoa {

    private $dormitorio;
    private $serie;
    private $dataEntrada;
    private $dataSaida;

    public function getDormitorio() {
        return $this->dormitorio;
    }

    public function setDormitorio($dormitorio) {
        $this->dormitorio = $dormitorio;
    }

    public function getSerie() {
        return $this->serie;
    }

    public function setSerie($serie) {
        $this->serie = $serie;
    }

    public function getDataEntrada() {
        return $this->dataEntrada;
    }

    public function setDataEntrada($dataEntrada) {
        $this->dataEntrada = $dataEntrada;
    }

    public function getDataSaida() {
        return $this->dataSaida;
    }

    public function setDataSaida($dataSaida) {
        $this->dataSaida = $dataSaida;
    }

}