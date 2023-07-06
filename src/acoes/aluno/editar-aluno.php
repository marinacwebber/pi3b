<?php

require_once __DIR__ . '/../../banco/BancoAluno.php';
require_once __DIR__ . '/../../classes/Aluno.php';

$banco = new BancoAluno();

$aluno = new Aluno();

$aluno->setMatricula($_POST['matricula']);
$aluno->setNome($_POST['nome']);
$aluno->setCpf($_POST['cpf']);
$aluno->setDataNascimento($_POST['data_nascimento']);
$aluno->setDormitorio($_POST['dormitorio']);
$aluno->setSerie($_POST['serie']);
$aluno->setDataEntrada($_POST['data_entrada']);
$aluno->setDataSaida($_POST['data_saida'] === '' ? NULL : $_POST['data_saida']);

$banco->editar($aluno);

header('Location: /alunos');