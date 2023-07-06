<?php

require_once __DIR__ . '/../../banco/BancoFuncionario.php';
require_once __DIR__ . '/../../classes/Funcionario.php';

$banco = new BancoFuncionario();

$funcionario = new Funcionario();

$funcionario->setNome($_POST['nome']);
$funcionario->setCpf($_POST['cpf']);
$funcionario->setDataNascimento($_POST['data_nascimento']);
$funcionario->setFuncao($_POST['funcao']);
$funcionario->setSalario($_POST['salario']);
$funcionario->setDataAdmissao($_POST['data_admissao']);
$funcionario->setDataDemissao($_POST['data_demissao'] === '' ? NULL : $_POST['data_demissao']);

$banco->criar($funcionario);

header('Location: /pages/funcionarios/index.php');
