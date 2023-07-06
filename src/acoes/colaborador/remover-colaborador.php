<?php

require_once __DIR__ . '/../../banco/BancoColaborador.php';
require_once __DIR__ . '/../../classes/Colaborador.php';

$banco = new BancoColaborador();

$banco->excluir($_GET['matricula']);

header('Location: /colaboradores');