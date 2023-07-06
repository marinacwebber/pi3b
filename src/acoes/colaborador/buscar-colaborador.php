<?php

require_once __DIR__ . '/../../banco/BancoColaborador.php';
require_once __DIR__ . '/../../classes/Colaborador.php';

function buscar($matricula) {
    $banco = new BancoColaborador();
    return $banco->buscarPorMatricula($matricula);
}