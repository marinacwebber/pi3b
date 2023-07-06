<?php

require_once __DIR__ . '/Pessoa.php';

class Colaborador extends Pessoa {

    private $endereco;

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

}