<?php

require_once __DIR__ . '/../../banco/BancoAluno.php';
require_once __DIR__ . '/../../classes/Aluno.php';

function buscar($matricula) {
    $banco = new BancoAluno();
    return $banco->buscarPorMatricula($matricula);
}