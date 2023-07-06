<?php

require_once __DIR__ . '/../../banco/BancoFuncionario.php';
require_once __DIR__ . '/../../classes/Funcionario.php';

function buscar($matricula) {
    $banco = new BancoFuncionario();
    return $banco->buscarPorMatricula($matricula);
}