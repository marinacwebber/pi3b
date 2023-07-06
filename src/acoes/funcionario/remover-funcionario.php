<?php

require_once __DIR__ . '/../../banco/BancoFuncionario.php';
require_once __DIR__ . '/../../classes/Funcionario.php';

$banco = new BancoFuncionario();

$banco->excluir($_GET['matricula']);

header('Location: /funcionarios');