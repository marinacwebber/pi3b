<?php

require_once __DIR__ . '/../../banco/BancoFuncionario.php';
require_once __DIR__ . '/../../classes/Funcionario.php';

$banco = new BancoFuncionario();

$lista = $banco->listar();