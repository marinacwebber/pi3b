<?php

require_once __DIR__ . '/../../../src/acoes/funcionario/buscar-funcionario.php';
require_once __DIR__ . '/../../../src/classes/Funcionario.php';

$matricula = $_GET['matricula'];

$funcionario = new Funcionario();

if ($matricula !== NULL) {
  $funcionario = buscar($matricula);
}

?>

<?php require_once __DIR__ . './../../templates/inicio-html.php'; ?>

  <h1 class="mt-4">Cadastro de funcionario</h1>
  <form class="mt-4" action="<?= ($matricula === NULL || $matricula === '') ? '/funcionarios' : '/funcionarios/edit' ?>" method="POST">

    <input type="hidden" name="matricula" id="matricula" value="<?=$funcionario->getMatricula()?>">

    <div class="row">

      <div class="col-md-6 mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?=$funcionario->getNome()?>">
      </div>

      <div class="col-md-3 mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" value="<?=$funcionario->getCpf()?>">
      </div>

      <div class="col-md-3 mb-3">
        <label for="data_nascimento" class="form-label">Data de nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?=$funcionario->getDataNascimento()?>">
      </div>

      <div class="col-md-3 mb-3">
        <label for="funcao" class="form-label">Função</label>
        <input type="text" class="form-control" id="funcao" name="funcao" value="<?=$funcionario->getFuncao()?>">
      </div>

      <div class="col-md-3 mb-3">
        <label for="salario" class="form-label">Salário</label>
        <input type="number" step="0.01" class="form-control" id="salario" name="salario" value="<?=$funcionario->getSalario()?>">
      </div>

      <div class="col-md-3 mb-3">
        <label for="data_admissao" class="form-label">Data de admissão</label>
        <input type="date" class="form-control" id="data_admissao" name="data_admissao" value="<?=$funcionario->getDataAdmissao()?>">
      </div>

      <div class="col-md-3 mb-3">
        <label for="data_demissao" class="form-label">Data de demissão</label>
        <input type="date" class="form-control" id="data_demissao" name="data_demissao" value="<?=$funcionario->getDataDemissao()?>">
      </div>
      
    </div>
    <div class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a class="ms-2" href="">Voltar para listagem</a>
      </div>
    </div>
  </form>

<?php require_once __DIR__ . './../../templates/fim-html.php'; ?>