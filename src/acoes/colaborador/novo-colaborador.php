<?php

require_once __DIR__ . '/../../banco/BancoColaborador.php';
require_once __DIR__ . '/../../classes/Colaborador.php';

$banco = new BancoColaborador();

$colaborador = new Colaborador();

$colaborador->setNome($_POST['nome']);
$colaborador->setCpf($_POST['cpf']);
$colaborador->setDataNascimento($_POST['data_nascimento']);
$colaborador->setEndereco($_POST['endereco']);

$banco->criar($colaborador);

header('Location: /colaboradores');
