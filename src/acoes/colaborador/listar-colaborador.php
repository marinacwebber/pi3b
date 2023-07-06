<?php

require_once __DIR__ . '/../../banco/BancoColaborador.php';
require_once __DIR__ . '/../../classes/Colaborador.php';

$banco = new BancoColaborador();

$lista = $banco->listar();