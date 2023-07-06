<?php

require_once __DIR__ . '/../../../src/acoes/aluno/buscar-aluno.php';
require_once __DIR__ . '/../../../src/classes/Aluno.php';

$matricula = $_GET['matricula'];

$aluno = new Aluno();

if ($matricula !== NULL) {
  $aluno = buscar($matricula);
}

?>

<?php require_once __DIR__ . './../../templates/inicio-html.php'; ?>

  <h1 class="mt-4">Cadastro de aluno</h1>
  <form class="mt-4" action="<?= ($matricula === NULL || $matricula === '') ? '/alunos' : '/alunos/edit' ?>" method="POST">

    <input type="hidden" name="matricula" id="matricula" value="<?=$aluno->getMatricula()?>">

    <div class="row">

      <div class="col-md-6 mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?=$aluno->getNome()?>">
      </div>

      <div class="col-md-3 mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" value="<?=$aluno->getCpf()?>">
      </div>

      <div class="col-md-3 mb-3">
        <label for="data_nascimento" class="form-label">Data de nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?=$aluno->getDataNascimento()?>">
      </div>

      <div class="col-md-3 mb-3">
        <label for="dormitorio" class="form-label">Dormitório</label>
        <input type="text" class="form-control" id="dormitorio" name="dormitorio" value="<?=$aluno->getDormitorio()?>">
      </div>

      <div class="col-md-3 mb-3">
        <label for="serie" class="form-label">Série</label>
        <input type="text" class="form-control" id="serie" name="serie" value="<?=$aluno->getSerie()?>">
      </div>

      <div class="col-md-3 mb-3">
        <label for="data_entrada" class="form-label">Data de entrada</label>
        <input type="date" class="form-control" id="data_entrada" name="data_entrada" value="<?=$aluno->getDataEntrada()?>">
      </div>

      <div class="col-md-3 mb-3">
        <label for="data_saida" class="form-label">Data de saída</label>
        <input type="date" class="form-control" id="data_saida" name="data_saida" value="<?=$aluno->getDataSaida()?>">
      </div>
      
    </div>
    <div class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a class="ms-2" href="/alunos">Voltar para listagem</a>
      </div>
    </div>
  </form>
  
<?php require_once __DIR__ . './../../templates/fim-html.php'; ?>