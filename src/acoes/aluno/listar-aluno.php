<?php

require_once __DIR__ . '/../../banco/BancoAluno.php';
require_once __DIR__ . '/../../classes/Aluno.php';

$banco = new BancoAluno();

$lista = $banco->listar();